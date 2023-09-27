<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('search');
        $response = Http::get('https://api.gurufocus.com/public/user/fe7c0dd8ffaaa1f8f37b3f9cc44354fe:38178f166827eb46e1e5e79c2edd150a/stock/' . $query . '/financials');
        $results = $response->json();

        $fiscalYears = $results['financials']['annuals']['Fiscal Year'];
        $perShareDataArray = $results['financials']['annuals']['per_share_data_array'];

        $results = $response->json();
        //FinHub SEC Filings API

        $SECFilings = Http::get('https://finnhub.io/api/v1/stock/filings?symbol=' . $query . '&token=cb61go2ad3i70tu5s97g');
        $SECFilings = $SECFilings->json();

        $news = array_filter($SECFilings, function ($filing) {
            return $filing['form'] === '8-K';
        });

        $ownershipForms = ['3', '4', '5', '13D/A', '13 D', 'SC 13G', '13 G/A', 'SC 13D'];
        $proxyForms = ['DEF 14A', 'PRE 14A', 'DEFA 14A', 'PRE 14A'];
        $prospectusAndRegistrationForms = ['S-8', '424B4', '424B3', '424B5', 'S-1', 'S-1/A', 'S-3', 'S-3A', 'D', '8-a12B', '8-A12B/A'];
        $financialForms = ['10-Q', '10-K', '10-Q/A', '10-K/A', 'NT 10-Q', 'NT 10-K'];

        $ownership = array_filter($SECFilings, function ($filing) use ($ownershipForms) {
            return in_array($filing['form'], $ownershipForms);
        });

        $proxies = array_filter($SECFilings, function ($filing) use ($proxyForms) {
            return in_array($filing['form'], $proxyForms);
        });

        $prospectusesAndRegistrations = array_filter($SECFilings, function ($filing) use ($prospectusAndRegistrationForms) {
            return in_array($filing['form'], $prospectusAndRegistrationForms);
        });

        $financials = array_filter($SECFilings, function ($filing) use ($financialForms) {
            return in_array($filing['form'], $financialForms);
        });

        // Sort each group
        $sort = function (&$group) {
            usort($group, function ($a, $b) {
                return strtotime($b['filedDate']) <=> strtotime($a['filedDate']);
            });
        };

        $sort($ownership);
        $sort($proxies);
        $sort($prospectusesAndRegistrations);
        $sort($financials);
        $sort($news);

        return view('results', compact('fiscalYears', 'perShareDataArray', 'news', 'ownership', 'proxies', 'prospectusesAndRegistrations', 'financials'));
    }
}
