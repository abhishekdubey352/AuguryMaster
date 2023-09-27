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
                    <span class="bg-gray-100 px-3 text-base font-semibold leading-6 text-gray-900">Percent Change Calculator</span>
                </div>
            </div>

            <!-- Form Start-->
            <form wire:submit.prevent='percentageCalculate'>
                <div class="grid grid-cols-2 gap-4">

                    <!-- First column-->
                    <div>
                        <label for="StartValue" class="block text-sm font-medium leading-6 text-gray-900">Starting Value</label>
                        <div class="mt-2">
                            <input type="float" wire:model="StartValue" id="StartValue" class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Starting Value">
                        </div>
                    </div>
                    <!-- Second column-->
                    <div>
                        <label for="EndValue" class="block text-sm font-medium leading-6 text-gray-900">Ending Value</label>
                        <div class="mt-2">
                            <input type="float" wire:model="EndValue" id="EndValue" class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Ending Value">
                        </div>
                    </div>
                    <!-- First column Second row-->
                    <div>
                        <label for="Duration" class="block text-sm font-medium leading-6 text-gray-900">Duration</label>
                        <div class="mt-2">
                            <input type="float" wire:model="Duration" id="Duration" class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Duration (days)">
                        </div>
                    </div>
                    <!-- Second column Second row " I want this grid to be empty"-->
                    <div></div>
                    <!-- First column Third row-->
                    <div>
                        <button type="submit" wire:model="submit" value="submit" class="rounded-md bg-green-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Calculate</button>
                    </div>
                    <!-- End of form-->
                </div>
            </form>
            <br>
            <br>
            @if(!empty($StartValue))
            Starting Value: {{ $StartValue }}<br>
            @endif

            @if(!empty($EndValue))
            Ending Value: {{ $EndValue }}<br>
            @endif

            @if(!empty($Gain))
            Gain: ${{ $Gain }}<br>
            @endif

            @if(!empty($Duration))
            Duration: {{ $Duration }} days<br>
            @endif

            @if(!empty($PercentageIncrease))
            Increase: {{ number_format($PercentageIncrease, 2) }}%<br>
            @elseif(!empty($PercentageDecrease))
            Decrease: -{{ number_format($PercentageDecrease, 2) }}%<br>
            @endif

            @if(!empty($AnnualizedRateReturn))
            ARR: {{ number_format($AnnualizedRateReturn * 100, 2) }}%<br>
            @endif

            <div>

        </section>
    </body>

    </html>
</div>