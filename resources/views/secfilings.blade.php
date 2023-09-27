<div class="container m-10 grid grid-cols-2 gap-4 sm:px-6 lg:px-8 border-2 border-gray-200 shadow-lg justify-evenly">

    <!-- Containers Content Financials-->
    <div class="container m-10 sm:px-6 lg:px-8 ">
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <!-- Container Title -->
            <div class="relative flex justify-center">
                <span class="bg-gray-100 px-3 text-3xl font-semibold leading-6 text-gray-900">Financials </span>
            </div>
        </div>
        <!-- Container Description -->
        <div>
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">Financial Reports</h1>
                        <p class="mt-2 text-sm text-gray-700">Quarterly Reports (10-Q) and Annual Reports (10-K).</p>


                    </div>
                </div>

                <!-- SEC Filing Table 2 -->

                <div class="mt-8 flow-root max-h-96 overflow-auto">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <table class="min-w-full divide-y divide-gray-600 shadow-md">
                                <tbody>
                                    @foreach ($financials as $filing)
                                    <tr class="cursor-pointer border-2 border-gray-200  bg-white hover:bg-gray-200 rounded-lg" onclick="window.location='{{ $filing['filingUrl'] }}';">
                                        <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="font-semibold text-green-400">{{ $filing['form'] }}</div>
                                            <div class="mt-1 flex flex-col text-gray-500 sm:block lg:hidden">
                                                <span>Filed Date: {{ date('m-d-Y', strtotime($filing['filedDate'])) }}</span>
                                            </div>
                                        </td>
                                        <td class="hidden px-3 py-3.5 text-sm text-gray-800 lg:table-cell">{{ date('m-d-Y', strtotime($filing['filedDate'])) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Containers Content News -->
    <div class="container m-10 sm:px-6 lg:px-8 ">
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <!-- Container Title -->
            <div class="relative flex justify-center">
                <span class="bg-gray-100 px-3 text-3xl font-semibold leading-6 text-gray-900">News </span>
            </div>
        </div>
        <!-- Container Description -->
        <div>
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">8-K</h1>
                        <p class="mt-2 text-sm text-gray-700">Required by the SEC to announce any events that shareholders should know.</p>
                    </div>
                </div>

                <!-- SEC Filing Table 1 -->

                <div class="mt-8 flow-root max-h-96 overflow-auto">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <table class="min-w-full divide-y divide-gray-600 shadow-md">
                                <tbody>
                                    @foreach ($news as $filing)
                                    <tr class="cursor-pointer border-2 border-gray-200 bg-white hover:bg-gray-200 rounded-lg" onclick="window.location='{{ $filing['filingUrl'] }}';">
                                        <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="font-semibold text-green-400">{{ $filing['form'] }}</div>
                                            <div class="mt-1 flex flex-col text-gray-500 sm:block lg:hidden">
                                                <span>Filed Date: {{ date('m-d-Y', strtotime($filing['filedDate'])) }}</span>
                                            </div>
                                        </td>
                                        <td class="hidden px-3 py-3.5 text-sm text-gray-800 lg:table-cell">{{ date('m-d-Y', strtotime($filing['filedDate'])) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Containers Content Prospectuses and Registrations-->
    <div class="container m-10 sm:px-6 lg:px-8 ">
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <!-- Container Title -->
            <div class="relative flex justify-center">
                <span class="bg-gray-100 px-3 text-3xl font-semibold leading-6 text-gray-900">Prospectuses and Registrations </span>
            </div>
        </div>
        <!-- Container Description -->
        <div>
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">Disclosures</h1>
                        <p class="mt-2 text-sm text-gray-700">Formal documents required by the SEC for any public offering. </p>


                    </div>
                </div>

                <!-- SEC Filing Table 2 -->

                <div class="mt-8 flow-root max-h-96 overflow-auto">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <table class="min-w-full divide-y divide-gray-600 shadow-md">
                                <tbody>
                                    @foreach ($prospectusesAndRegistrations as $filing)
                                    <tr class="cursor-pointer border-2 border-gray-200  bg-white hover:bg-gray-200 rounded-lg" onclick="window.location='{{ $filing['filingUrl'] }}';">
                                        <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="font-semibold text-green-400">{{ $filing['form'] }}</div>
                                            <div class="mt-1 flex flex-col text-gray-500 sm:block lg:hidden">
                                                <span>Filed Date: {{ date('m-d-Y', strtotime($filing['filedDate'])) }}</span>
                                            </div>
                                        </td>
                                        <td class="hidden px-3 py-3.5 text-sm text-gray-800 lg:table-cell">{{ date('m-d-Y', strtotime($filing['filedDate'])) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Containers Content Proxies-->
    <div class="container m-10 sm:px-6 lg:px-8 ">
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <!-- Container Title -->
            <div class="relative flex justify-center">
                <span class="bg-gray-100 px-3 text-3xl font-semibold leading-6 text-gray-900">Proxies </span>
            </div>
        </div>
        <!-- Container Description -->
        <div>
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">Proxies</h1>
                        <p class="mt-2 text-sm text-gray-700">Matters up for shareholder vote (management and executive comp.)</p>


                    </div>
                </div>

                <!-- SEC Filing Table 2 -->

                <div class="mt-8 flow-root max-h-96 overflow-auto">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <table class="min-w-full divide-y divide-gray-600 shadow-md">
                                <tbody>
                                    @foreach ($proxies as $filing)
                                    <tr class="cursor-pointer border-2 border-gray-200  bg-white hover:bg-gray-200 rounded-lg" onclick="window.location='{{ $filing['filingUrl'] }}';">
                                        <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="font-semibold text-green-400">{{ $filing['form'] }}</div>
                                            <div class="mt-1 flex flex-col text-gray-500 sm:block lg:hidden">
                                                <span>Filed Date: {{ date('m-d-Y', strtotime($filing['filedDate'])) }}</span>
                                            </div>
                                        </td>
                                        <td class="hidden px-3 py-3.5 text-sm text-gray-800 lg:table-cell">{{ date('m-d-Y', strtotime($filing['filedDate'])) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Containers Content Ownership-->
    <div class="container m-10 sm:px-6 lg:px-8 ">
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <!-- Container Title -->
            <div class="relative flex justify-center">
                <span class="bg-gray-100 px-3 text-3xl font-semibold leading-6 text-gray-900">Ownership </span>
            </div>
        </div>
        <!-- Container Description -->
        <div>
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">Ownership</h1>
                        <p class="mt-2 text-sm text-gray-700">Ownership</p>


                    </div>
                </div>

                <!-- SEC Filing Table 2 -->

                <div class="mt-8 flow-root max-h-96 overflow-auto">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <table class="min-w-full divide-y divide-gray-600 shadow-md">
                                <tbody>
                                    @foreach ($ownership as $filing)
                                    <tr class="cursor-pointer border-2 border-gray-200  bg-white hover:bg-gray-200 rounded-lg" onclick="window.location='{{ $filing['filingUrl'] }}';">
                                        <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="font-semibold text-green-400">{{ $filing['form'] }}</div>
                                            <div class="mt-1 flex flex-col text-gray-500 sm:block lg:hidden">
                                                <span>Filed Date: {{ date('m-d-Y', strtotime($filing['filedDate'])) }}</span>
                                            </div>
                                        </td>
                                        <td class="hidden px-3 py-3.5 text-sm text-gray-800 lg:table-cell">{{ date('m-d-Y', strtotime($filing['filedDate'])) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>