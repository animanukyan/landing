@extends('app') @section('content')
    <section class="bg-emerald-400 md:rounded-b-large">
        <div class="mx-auto max-w-7xl px-3 sm:px-6 lg:px-8 text-center">
            <h1 class="pt-20 lg:pt-16 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight text-white dark:text-white ">Your Data Insights Strategist</h1>
            <p class="mt-6 text-lg leading-8 text-white dark:text-gray-300">
                Illuminate Your Insights, Empower Your Growth with Kognize
            </p>
            <livewire:subscription-form />
            <div class="max-w-3xl sm:max-w-5xl lg:max-w-none md:max-h-96 xl:max-h-136 relative -bottom-8 lg:bottom-0">
                <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="App screenshot" width="1120" height="560" class="w-full object-cover md:max-h-96 xl:max-h-136 rounded-xl bg-white/5 shadow-xl ring-1 ring-white/10" />
            </div>
        </div>
    </section>
@endsection
