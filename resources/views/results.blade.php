@extends('layouts.maincontent')

<x-app-layout>
    @section('results')
    <div class="container  sm:px-6 lg:px-8">
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center">
                <span class="bg-gray-100 px-3 text-3xl font-semibold leading-6 text-gray-900">Per Share Data </span>
            </div>
        </div>

        <div>
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">Per Share Data</h1>
                        <p class="mt-2 text-sm text-gray-700">A list of all the per share data for the selected stock.</p>
                    </div>
                </div>
                <div class="mt-8 flow-root">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <tr>
                                        <th scope="col" class="sticky  bg-gray-200 left-0 py-3 px-6 text-left">Metric</th>
                                        @foreach($fiscalYears as $year)
                                        @if($year == "TTM")
                                        <th scope="col" class="py-3 px-6 text-left">{{ $year }}</th>
                                        @else
                                        <th scope="col" class="py-3 px-6 text-left">{{ date('M-Y', strtotime($year)) }}</th>
                                        @endif
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700 text-sm font-light">
                                    @foreach($perShareDataArray as $key => $dataArray)
                                    <tr>
                                        <td class="sticky   bg-gray-50 left-0 whitespace-nowrap py-4 px-6 border-b border-gray-200">{{ $key }}</td>
                                        @foreach($dataArray as $value)
                                        <td class="whitespace-nowrap px-6 py-4 border-b border-gray-200">{{ $value }}</td>
                                        @endforeach
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @include('secfilings')

                </div>
            </div>



</x-app-layout>