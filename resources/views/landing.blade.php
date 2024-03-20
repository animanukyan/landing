@extends('app') @section('content')
    <section class="relative isolate overflow-hidden h-screen">
        <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-40 lg:flex lg:px-8 lg:pt-40">
            <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                <div class="mt-24 sm:mt-32 lg:mt-16">
                    <a href="#" class="inline-flex flex-wrap">
                        <span class="inline-flex items-center space-x-2 text-sm font-medium leading-6 text-gray-600 dark:text-gray-300">
                            <span id="countdown">Launching in 60 days, 6 hours, 30 seconds</span>
                            <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                </div>
                <h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-6xl">Your Data Insights Strategist</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300">
                    Illuminate Your Insights, Empower Your Growth with Luminax
                </p>
                <div class="mt-10">
                    <a href="{{ route('inner.page') }}" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">See more screenshots <span aria-hidden="true">→</span></a>
                </div>
                <form class="my-8 md:my-12 max-w-lg">
                    <div class="mt-1 flex space-x-4">
                        <input type="email" id="email" name="email" placeholder="Email address" class="block w-full px-3 rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                        <button
                            type="submit"
                            class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400"
                        >
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
            <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                    <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="App screenshot" width="2432" height="1442" class="w-[76rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10" />
                </div>
            </div>
        </div>
    </section>
@endsection
