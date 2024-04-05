<!DOCTYPE html>
<html class="h-full">
    <head>
        <link rel="icon" href="./images/favicon.svg" type="image/svg+xml">
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-T9B97GRH8P"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-T9B97GRH8P');
        </script>
        <title>Kognize</title>
        <meta charset="UTF-8" />
        <meta name="description" content="Illuminate Your Insights, Empower Your Growth with Kognize" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
        @livewireStyles
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="h-screen">
        <div class="h-screen" x-data="{ darkMode: false }" :class="{ 'dark': darkMode }">
            <header class="fixed w-full top-0 left-0 px-4 bg-white z-50">
                <div class="max-w-7xl mx-auto flex items-center justify-between py-4">
                    <a href="#" class="text-3xl font-bold text-gray-900 dark:text-gray-200 pl-4">
                        <img src="./images/kognize.svg" alt="logo">
                    </a>
                </div>
            </header>
            <main class="py-8 md:pt-12 lg:pt-16 relative z-10">
                @yield('content')
            </main>
        </div>
        <script>
            // Set the launch date
            const launchDate = new Date("June 17, 2024 00:00:00").getTime();

            // Update the countdown every second
            const countdownElement = document.getElementById("countdown");
            setInterval(function () {
                // Get the current date and time
                const now = new Date().getTime();

                // Calculate the time difference
                const distance = launchDate - now;

                // Calculate days, hours, minutes, and seconds
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the countdown
                countdownElement.innerHTML = `Launching in ${days} days, ${hours} hours, ${minutes} minutes, ${seconds} seconds`;
            }, 1000);
        </script>
        @livewireScripts
    </body>
</html>
