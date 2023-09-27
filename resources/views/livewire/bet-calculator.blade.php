<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body>

        <section class="p-4">
            <div class="relative">
                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="bg-gray-100 px-3 text-base font-semibold leading-6 text-gray-900">Bet Calculator</span>
                </div>
            </div>


            <!-- Form Start-->
            <form wire:submit.prevent="calculate">
                <div class="grid grid-cols-2 gap-4">

                    <!-- First column-->
                    <div>
                        <label for="Ticker" class="block text-sm font-medium leading-6 text-gray-900">Ticker</label>
                        <div class="mt-2">
                            <input type="text" wire:model="Ticker" id="Ticker" class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="LQDA">
                        </div>
                    </div>
                    <!-- Second column-->
                    <div>
                        <label for="bankroll" class="block text-sm font-medium leading-6 text-gray-900">Bankroll</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">$</span>
                            </div>
                            <input type="text" wire:model="Bankroll" id="bankroll" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-12 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00" aria-describedby="price-currency">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-gray-500 sm:text-sm" id="price-currency">USD</span>
                            </div>
                        </div>
                    </div>
                    <!-- First column Third row-->
                    <div>
                        <label for="entry" class="block text-sm font-medium leading-6 text-gray-900">Entry</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">$</span>
                            </div>
                            <input type="float" wire:model="entry" id="entry" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-12 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00" aria-describedby="price-currency">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-gray-500 sm:text-sm" id="price-currency">USD</span>
                            </div>
                        </div>
                    </div>
                    <!-- Second column Third row-->
                    <div>
                        <label for="operator" class="block text-sm font-medium leading-6 text-gray-900">Position</label>
                        <select id="operator" wire:model="operator" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option>None</option>
                            <option selected>Long</option>
                            <option>Short</option>
                        </select>
                    </div>
                    <!-- First column Fourth row-->
                    <div>
                        <label for="PriceTarget1" class="block text-sm font-medium leading-6 text-gray-900">Price Target 1</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">$</span>
                            </div>
                            <input type="float" wire:model="PriceTarget1" id="PriceTarget1" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-12 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00" aria-describedby="price-currency">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-gray-500 sm:text-sm" id="price-currency">USD</span>
                            </div>
                        </div>
                    </div>
                    <!-- Second column Fourth row-->
                    <div>
                        <label for="probrwd1" class="block text-sm font-medium leading-6 text-gray-900">Prob. of Reward 1</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm"></span>
                            </div>
                            <input type="float" wire:model="probrwd1" id="probrwd1" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-12 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0%" aria-describedby="percentage-sign">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-gray-500 sm:text-sm" id="percentage-sign">%</span>
                            </div>
                        </div>
                    </div>
                    <!-- First column Fifth row-->
                    <div>
                        <label for="PriceTarget2" class="block text-sm font-medium leading-6 text-gray-900">Price Target 2</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">$</span>
                            </div>
                            <input type="float" wire:model="PriceTarget2" id="PriceTarget2" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-12 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00" aria-describedby="price-currency">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-gray-500 sm:text-sm" id="price-currency">USD</span>
                            </div>
                        </div>
                    </div>
                    <!-- Second column Fifth row-->
                    <div>
                        <label for="probrwd2" class="block text-sm font-medium leading-6 text-gray-900">Prob. of Reward 2</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm"></span>
                            </div>
                            <input type="float" wire:model="probrwd2" id="probrwd2" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-12 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0%" aria-describedby="percentage-sign">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-gray-500 sm:text-sm" id="percentage-sign">%</span>
                            </div>
                        </div>
                    </div>
                    <!-- First column Sixth row-->
                    <div>
                        <label for="PriceTarget3" class="block text-sm font-medium leading-6 text-gray-900">Price Target 3</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">$</span>
                            </div>
                            <input type="float" wire:model="PriceTarget3" id="PriceTarget3" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-12 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00" aria-describedby="price-currency">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-gray-500 sm:text-sm" id="price-currency">USD</span>
                            </div>
                        </div>
                    </div>
                    <!-- Second column Sixth row-->
                    <div>
                        <label for="probrwd3" class="block text-sm font-medium leading-6 text-gray-900">Prob. of Reward 3</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm"></span>
                            </div>
                            <input type="float" wire:model="probrwd3" id="probrwd3" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-12 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0%" aria-describedby="percentage-sign">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-gray-500 sm:text-sm" id="percentage-sign">%</span>
                            </div>
                        </div>
                    </div>
                    <!-- First column Seventh row-->
                    <div>
                        <label for="StopOut" class="block text-sm font-medium leading-6 text-gray-900">Stop Out</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">$</span>
                            </div>
                            <input type="float" wire:model="StopOut" id="StopOut" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-12 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00" aria-describedby="price-currency">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-gray-500 sm:text-sm" id="price-currency">USD</span>
                            </div>
                        </div>
                    </div>
                    <!-- Second column Seventh row-->
                    <div>
                        <label for="probrsk" class="block text-sm font-medium leading-6 text-gray-900">Prob. of Risk</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm"></span>
                            </div>
                            <input type="float" wire:model="probrsk" id="probrsk" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-12 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0%" aria-describedby="percentage-sign">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-gray-500 sm:text-sm" id="percentage-sign">%</span>
                            </div>
                        </div>
                    </div>
                    <!-- First column Eighth row-->
                    <div>
                        <button type="submit" wire:model="measurebet" value="submit" class="rounded-md bg-green-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Calculate</button>
                    </div>
                    <!-- End of form-->
                </div>
            </form>
            <br>
            <div>
                @if(empty($operator))
                {{ $operator = '' }}
                @endif

                @if($operator == 'None')
                <!-- Do nothing -->
                @elseif($operator == 'Long')
                Ticker: {{ $Ticker }}<br>
                Total reward if right: ${{ number_format($RWDLTOTAL, 3) }}<br>
                Dollar Risk: ${{ $RISK }}<br>
                Stop Out: ${{ $StopOut }}<br>
                Odds of bet: {{ number_format($ODDSOFBET, 3) }}/1<br>
                Reward 1 EV: ${{ number_format($EV1, 2) }}<br>
                Reward 2 EV: ${{ number_format($EV2, 2) }}<br>
                Reward 3 EV: ${{ number_format($EV3, 2) }}<br>
                Total EV of RWD: ${{ $TotalEVRWD }}<br>
                RISK EV: ${{ number_format($EVRSK, 2) }}<br>
                Edge: ${{ number_format((float)$EDGE, 2) }}<br>
                Kelly: {{ number_format((float)$KELLYLONG, 3) }}%<br>
                Bankroll: ${{ number_format($Bankroll, 2) }}<br>
                Max Shares: {{ number_format($MaxShares, 1) }}<br>
                Bet Size: ${{ number_format($BetSize, 2) }}<br>
                Max Loss: ${{ number_format($MaxLoss, 2) }}<br>
                Value at Stop: ${{ number_format($ValueAtStop, 2) }}<br>
                Goal reward: ${{ number_format($GOALRWD, 2) }}<br>

                @elseif($operator == 'Short')
                Ticker: {{ $Ticker }}<br>
                Total reward if right: ${{ number_format($RWDSTOTAL, 3) }}<br>
                Dollar Risk: ${{ $RISK }}<br>
                Stop Out: ${{ $StopOut }}<br>
                Odds of bet: {{ number_format($ODDSOFBET, 3) }}/1<br>
                Reward 1 EV: ${{ number_format($EV1, 2) }}<br>
                Reward 2 EV: ${{ number_format($EV2, 2) }}<br>
                Reward 3 EV: ${{ number_format($EV3, 2) }}<br>
                Total EV of RWD: ${{ $TotalEVRWD }}<br>
                RISK EV: ${{ number_format($EVRSK, 2) }}<br>
                Edge: ${{ number_format((float)$EDGE, 2) }}<br>
                Kelly: {{ number_format((float)$KELLYSHORT, 3) }}%<br>
                Bankroll: ${{ number_format($Bankroll, 2) }}<br>
                Max Shares: {{ number_format($MaxShares, 1) }}<br>
                Bet Size: ${{ number_format($BetSize, 2) }}<br>
                Max Loss: ${{ number_format($MaxLoss, 2) }}<br>
                Value at Stop: ${{ number_format($ValueAtStop, 2) }}<br>
                Goal reward: ${{ number_format($GOALRWD, 2) }}<br>
                @endif
            </div>





</div>