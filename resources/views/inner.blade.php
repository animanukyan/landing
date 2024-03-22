{{--@extends('app')--}}

{{--@section('content')--}}
{{--    <section class="relative overflow-hidden bg-blue-600 mt-20 pb-16">--}}
{{--        <div class="mx-auto max-w-7xl px-6 pb-8 pt-10 sm:pb-16 lg:px-8 lg:pt-16 text-center">--}}
{{--            <h1 class="font-display text-3xl tracking-tight text-white sm:text-4xl md:text-5xl">Everything you need to run your books.</h1>--}}
{{--            <p class="mt-6 text-lg tracking-tight text-blue-100">Well everything you need if you aren’t that picky about minor details like tax compliance.</p>--}}
{{--        </div>--}}
{{--        <div class="mx-auto max-w-7xl p-6 lg:p-8 ">--}}
{{--            <div x-data="{ activeTab: 'tab1' }" class="lg:flex lg:items-center">--}}
{{--                <div class="flex lg:flex-col gap-2 md:gap-4 grow flex-shrink-0 basis-2/5">--}}
{{--                    <div class="lg:max-w-lg grow basis-1/3">--}}
{{--                        <div :class="{ 'bg-blue-500/40 border border-blue-100/10 rounded-full lg:rounded-l-xl lg:rounded-r-none p-4 lg:p-6': activeTab === 'tab1', 'rounded-full lg:rounded-l-xl lg:rounded-r-none border border-transparent p-4 lg:p-6 hover:bg-blue-500/20': activeTab !== 'tab1' }">--}}
{{--                            <div @click="activeTab = 'tab1'" class="flex flex-col lg:items-start cursor-pointer" >--}}
{{--                                <button class="text-white text-sm lg:text-lg">Payroll</button>--}}
{{--                                <p class="mt-2 hidden text-sm leading-6 lg:block text-white">--}}
{{--                                    Keep track of everyone's salaries and whether or not they've been paid. Direct deposit not supported.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="lg:max-w-lg grow basis-1/3">--}}
{{--                        <div :class="{ 'bg-blue-500/40 border border-blue-100/10 rounded-full lg:rounded-l-xl lg:rounded-r-none p-4 lg:p-6': activeTab === 'tab2', 'rounded-full lg:rounded-l-xl lg:rounded-r-none border border-transparent p-4 lg:p-6 hover:bg-blue-500/20': activeTab !== 'tab2' }">--}}
{{--                            <div @click="activeTab = 'tab2'" class="flex flex-col lg:items-start cursor-pointer" >--}}
{{--                                <button class="text-white text-sm lg:text-lg">Claim expenses</button>--}}
{{--                                <p class="mt-2 hidden text-sm leading-6 lg:block text-white">--}}
{{--                                    All of your receipts organized into one place, as long as you don't mind typing in the data by hand.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="lg:max-w-lg grow basis-1/3">--}}
{{--                        <div :class="{ 'bg-blue-500/40 border border-blue-100/10  rounded-full lg:rounded-l-xl lg:rounded-r-none p-4 lg:p-6': activeTab === 'tab3', 'rounded-full lg:rounded-l-xl lg:rounded-r-none border border-transparent p-4 lg:p-6 hover:bg-blue-500/20': activeTab !== 'tab3' }">--}}
{{--                            <div @click="activeTab = 'tab3'" class="flex flex-col lg:items-start cursor-pointer" >--}}
{{--                                <button class="text-white text-sm lg:text-lg">VAT handling</button>--}}
{{--                                <p class="mt-2 hidden text-sm leading-6 lg:block text-white">--}}
{{--                                    We only sell our software to companies who don't deal with VAT at all, so technically we do all the VAT stuff they need.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="lg:max-w-lg grow basis-1/3">--}}
{{--                        <div :class="{ 'bg-blue-500/40 border border-blue-100/10  rounded-full lg:rounded-l-xl lg:rounded-r-none p-4 lg:p-6': activeTab === 'tab4', 'rounded-full lg:rounded-l-xl lg:rounded-r-none border border-transparent p-4 lg:p-6 hover:bg-blue-500/20': activeTab !== 'tab4' }">--}}
{{--                            <div @click="activeTab = 'tab4'" class="flex flex-col lg:items-start cursor-pointer" >--}}
{{--                                <button class="text-white text-sm lg:text-lg">Reporting</button>--}}
{{--                                <p class="mt-2 hidden text-sm leading-6 lg:block text-white">--}}
{{--                                    Easily export your data into an Excel spreadsheet where you can do whatever the hell you want with it.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div x-show="activeTab === 'tab1'" class="max-w-3xl flex-none sm:max-w-7xl overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 mt-10 lg:mt-0">--}}
{{--                    <img src="https://salient.tailwindui.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpayroll.517af4e7.png&w=1200&q=75" alt="screenshot 1">--}}
{{--                </div>--}}
{{--                <div x-show="activeTab === 'tab2'" class="max-w-3xl flex-none sm:max-w-7xl overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 mt-10 lg:mt-0">--}}
{{--                    <img src="https://salient.tailwindui.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fexpenses.3f331919.png&w=1200&q=75" alt="screenshot 2">--}}
{{--                </div>--}}
{{--                <div x-show="activeTab === 'tab3'" class="max-w-3xl flex-none sm:max-w-7xl overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 mt-10 lg:mt-0">--}}
{{--                    <img src="https://salient.tailwindui.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fvat-returns.7402820f.png&w=1200&q=75" alt="screenshot 3">--}}
{{--                </div>--}}
{{--                <div x-show="activeTab === 'tab4'" class="max-w-3xl flex-none sm:max-w-7xl overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 mt-10 lg:mt-0">--}}
{{--                    <img src="https://salient.tailwindui.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Freporting.2ad6f065.png&w=1200&q=75" alt="screenshot 4">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}
