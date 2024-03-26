@extends('app') @section('content')
    <section class="relative isolate overflow-hidden">
        <div class="mx-auto max-w-7xl px-6 pb-20 pt-10 lg:flex lg:px-8 lg:pt-40">
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
                    Illuminate Your Insights, Empower Your Growth with Kognize
                </p>
                <div class="mt-10">
                    <a href="#section" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">See more screenshots <span aria-hidden="true">→</span></a>
                </div>
                <form class="my-8 md:my-12 max-w-lg">
                    <div class="mt-1 flex flex-wrap sm:flex-nowrap">
                        <input type="email" id="email" name="email" placeholder="Email address" class="block w-full py-2.5 px-3 rounded sm:rounded-r-none border border-indigo-500 focus:border-indigo-500 focus:ring-0 focus:ring-indigo-500 sm:text-sm" />
                        <button
                            type="submit"
                            class="mt-4 sm:mt-0 rounded sm:rounded-l-none bg-indigo-500 px-7 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400"
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
    <section class="relative overflow-hidden bg-indigo-300 dark:bg-gray-500 pb-16" id="section">
        <div class="mx-auto max-w-7xl px-6 pb-8  sm:pb-16 lg:px-8 text-center">
            <h2 class="font-display text-3xl tracking-tight text-white sm:text-4xl md:text-5xl pt-10 lg:pt-24">Everything you need to run your books.</h2>
            <p class="mt-6 text-lg tracking-tight text-blue-100">Well everything you need if you aren’t that picky about minor details like tax compliance.</p>
        </div>
        <div class="mx-auto max-w-7xl p-6 lg:p-8 ">
            <div x-data="{ activeTab: 'tab1' }" class="lg:flex lg:items-center">
                <div class="flex lg:flex-col gap-2 md:gap-4 grow flex-shrink-0 basis-2/5">
                    <div class="lg:max-w-lg grow basis-1/3">
                        <div :class="{ 'bg-blue-500/40 border border-blue-100/10 rounded-full lg:rounded-l-xl lg:rounded-r-none p-4 lg:p-6': activeTab === 'tab1', 'rounded-full lg:rounded-l-xl lg:rounded-r-none border border-transparent p-4 lg:p-6 hover:bg-blue-500/20': activeTab !== 'tab1' }">
                            <div @click="activeTab = 'tab1'" class="flex flex-col lg:items-start cursor-pointer" >
                                <button class="text-white text-sm lg:text-lg">Payroll</button>
                                <p class="mt-2 hidden text-sm leading-6 lg:block text-white">
                                    Keep track of everyone's salaries and whether or not they've been paid. Direct deposit not supported.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:max-w-lg grow basis-1/3">
                        <div :class="{ 'bg-blue-500/40 border border-blue-100/10 rounded-full lg:rounded-l-xl lg:rounded-r-none p-4 lg:p-6': activeTab === 'tab2', 'rounded-full lg:rounded-l-xl lg:rounded-r-none border border-transparent p-4 lg:p-6 hover:bg-blue-500/20': activeTab !== 'tab2' }">
                            <div @click="activeTab = 'tab2'" class="flex flex-col lg:items-start cursor-pointer" >
                                <button class="text-white text-sm lg:text-lg">Claim expenses</button>
                                <p class="mt-2 hidden text-sm leading-6 lg:block text-white">
                                    All of your receipts organized into one place, as long as you don't mind typing in the data by hand.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:max-w-lg grow basis-1/3">
                        <div :class="{ 'bg-blue-500/40 border border-blue-100/10  rounded-full lg:rounded-l-xl lg:rounded-r-none p-4 lg:p-6': activeTab === 'tab3', 'rounded-full lg:rounded-l-xl lg:rounded-r-none border border-transparent p-4 lg:p-6 hover:bg-blue-500/20': activeTab !== 'tab3' }">
                            <div @click="activeTab = 'tab3'" class="flex flex-col lg:items-start cursor-pointer" >
                                <button class="text-white text-sm lg:text-lg">VAT handling</button>
                                <p class="mt-2 hidden text-sm leading-6 lg:block text-white">
                                    We only sell our software to companies who don't deal with VAT at all, so technically we do all the VAT stuff they need.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:max-w-lg grow basis-1/3">
                        <div :class="{ 'bg-blue-500/40 border border-blue-100/10  rounded-full lg:rounded-l-xl lg:rounded-r-none p-4 lg:p-6': activeTab === 'tab4', 'rounded-full lg:rounded-l-xl lg:rounded-r-none border border-transparent p-4 lg:p-6 hover:bg-blue-500/20': activeTab !== 'tab4' }">
                            <div @click="activeTab = 'tab4'" class="flex flex-col lg:items-start cursor-pointer" >
                                <button class="text-white text-sm lg:text-lg">Reporting</button>
                                <p class="mt-2 hidden text-sm leading-6 lg:block text-white">
                                    Easily export your data into an Excel spreadsheet where you can do whatever the hell you want with it.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div x-show="activeTab === 'tab1'" class="max-w-3xl flex-none sm:max-w-7xl overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 mt-10 lg:mt-0">
                    <img src="https://salient.tailwindui.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpayroll.517af4e7.png&w=1200&q=75" alt="screenshot 1">
                </div>
                <div x-show="activeTab === 'tab2'" class="max-w-3xl flex-none sm:max-w-7xl overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 mt-10 lg:mt-0">
                    <img src="https://salient.tailwindui.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fexpenses.3f331919.png&w=1200&q=75" alt="screenshot 2">
                </div>
                <div x-show="activeTab === 'tab3'" class="max-w-3xl flex-none sm:max-w-7xl overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 mt-10 lg:mt-0">
                    <img src="https://salient.tailwindui.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fvat-returns.7402820f.png&w=1200&q=75" alt="screenshot 3">
                </div>
                <div x-show="activeTab === 'tab4'" class="max-w-3xl flex-none sm:max-w-7xl overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 mt-10 lg:mt-0">
                    <img src="https://salient.tailwindui.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Freporting.2ad6f065.png&w=1200&q=75" alt="screenshot 4">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gradient-to-r from-gray-200 to-gray-100 dark:from-gray-900 dark:to-gray-700 py-16 sm:py-24 lg:py-32">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:gap-8 lg:px-8">
            <div class="max-w-xl text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:col-span-7">
                <h3 class="inline sm:block lg:inline xl:block dark:text-gray-200 text-3xl tracking-tight  sm:text-4xl">
                    Want product news and updates?
                    <span class="block mt-3">Sign up for our newsletter.</span>
                </h3>
            </div>
            <form class="w-full max-w-md lg:col-span-5 lg:pt-2">
                <div class="flex gap-x-4">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="min-w-0 flex-auto rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter your email">
                    <button type="submit" class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Subscribe</button>
                </div>
{{--                <p class="mt-4 text-sm leading-6 text-gray-900">We care about your data. Read our <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">privacy&nbsp;policy</a>.</p>--}}
            </form>
        </div>
    </section>
    <footer class="bg-gradient-to-r from-gray-200 to-gray-100 dark:from-gray-900 dark:to-gray-700 ">
        <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8 border-t border-gray-900/10 dark:border-white/10">
            <div class="flex justify-center space-x-6 md:order-2">
                <a href="#" class="rounded-full hover:shadow-md border border-transparent hover:border-gray-200 dark:border-gray-700 p-3 flex items-center justify-center">
                    <img src="./images/twitter.svg" alt="twitter icon" class="w-7 h-7" />
                </a>
                <a href="#" class="rounded-full hover:shadow-md border border-transparent hover:border-gray-200 dark:border-gray-700 p-3 flex items-center justify-center">
                    <img src="./images/discord.svg" alt="discord icon" class="w-8 h-8" />
                </a>
            </div>
            <div class="mt-8 md:order-1 md:mt-0">
                <p class="text-center text-xs leading-5 text-gray-500  dark:text-gray-300">&copy; 2020 Your Company, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>

@endsection
