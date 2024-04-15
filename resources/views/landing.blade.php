@extends('app') @section('content')
    <section class="bg-emerald-400">
        <div class="mx-auto max-w-7xl px-3 sm:px-6 lg:px-8 text-center">
            <h1 class="pt-20 lg:pt-32 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight text-white dark:text-white ">Your Data Insights Strategist</h1>
            <p class="mt-6 text-lg leading-8 text-white dark:text-gray-300">
                Illuminate Your Insights, Empower Your Growth with Kognize
            </p>
            <livewire:subscription-form />
            <div class="max-w-3xl sm:max-w-5xl lg:max-w-none md:max-h-96 xl:max-h-136 relative -bottom-8 lg:bottom-0 mt-20 lg:mt-32">
                <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="App screenshot" width="1120" height="560" class="w-full object-cover md:max-h-96 xl:max-h-136 rounded-xl bg-white/5 shadow-xl ring-1 ring-white/10" />
            </div>
        </div>
        <div class="bg-emerald-400">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 260">
                <path fill="#FFFFFF" fill-opacity="1" d="M0,32L48,53.3C96,75,192,117,288,117.3C384,117,480,75,576,64C672,53,768,75,864,122.7C960,171,1056,245,1152,234.7C1248,224,1344,128,1392,80L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </section>
@endsection
