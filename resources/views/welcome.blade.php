<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="antialiased">
    <div class="bg-gray-900">
        <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="relative isolate overflow-hidden bg-gray-800 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0" aria-hidden="true">
                    <circle cx="512" cy="512" r="512" fill="#02c853" fill-opacity="0.7" />
                    <defs>
                        <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                            <stop stop-color="#7775D6" />
                            <stop offset="1" stop-color="#E935C1" />
                        </radialGradient>
                    </defs>
                </svg>
                <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-5xl">Dream the Dream<span class="  text-green-500">.</span> <br> Live The Dream<span class=" text-green-500">.</span><br>Never Settle For Anything Less<span class=" text-green-500">.</span></h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Augury is home to value investors looking to explore new opportunties, measure their portfolio, and develop a broad range of knowledge.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                        <a href="{{ route('login') }}" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Login</a>
                        <a href="{{ route('register') }}" class="text-sm font-semibold leading-6 text-white">Register Now <span aria-hidden="true">→</span></a>
                    </div>
                </div>
                <div class="relative mt-16 h-80 lg:mt-8">
                    <img class="absolute left-0 top-0 w-[57rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10" src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="App screenshot" width="1824" height="1080">
                </div>
            </div>
            <div class="relative mt-20 mb-8">
                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="bg-gray-900 px-10 text-3xl font-semibold leading-6 text-white">Augury Key Stats</span>
                </div>
            </div>

            <div>
                <h3 class="text-base font-semibold leading-6 text-white">Performance YTD</h3>
                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-4">
                    <div class="overflow-hidden rounded-lg bg-gray-800 px-4 py-5 shadow sm:p-6">
                        <dt class="truncate text-sm font-medium text-gray-200">Total Subscribers</dt>
                        <dd class="text-xs font-medium text-gray-400">+4.75%</dd>
                        <dd class="mt-1 text-3xl font-semibold tracking-tight text-white">85</dd>
                    </div>
                    <div class="overflow-hidden rounded-lg bg-gray-800 px-4 py-5 shadow sm:p-6">
                        <dt class="truncate text-sm font-medium text-gray-200">Total Money Behind Augury</dt>
                        <dd class="text-xs font-medium text-gray-400">+34.02%</dd>
                        <dd class="mt-1 text-3xl font-semibold tracking-tight text-white">$3,531,000</dd>
                    </div>
                    <div class="overflow-hidden rounded-lg bg-gray-800 px-4 py-5 shadow sm:p-6">
                        <dt class="truncate text-sm font-medium text-gray-200">Average Performance YTD</dt>
                        <dd class="text-xs font-medium text-gray-400">+12.39%</dd>
                        <dd class="mt-1 text-3xl font-semibold tracking-tight text-white">36.8%</dd>
                    </div>
                    <div class="overflow-hidden rounded-lg bg-gray-800 px-4 py-5 shadow sm:p-6">
                        <dt class="truncate text-sm font-medium text-gray-200">Total Augury Member Profits</dt>
                        <dd class="text-xs font-medium text-gray-400">+48.18%</dd>
                        <dd class="mt-1 text-3xl font-semibold tracking-tight text-white">$1,030,400</dd>
                    </div>
                </dl>
            </div>




        </div>

    </div>

</body>

</html