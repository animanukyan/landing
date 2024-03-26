<!DOCTYPE html>
<html class="h-full">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-T9B97GRH8P"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-T9B97GRH8P');
        </script>
        <title>Project</title>
        <meta charset="UTF-8" />
        <meta name="description" content="Information about page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
        @livewireStyles
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="h-full">
        <div class="h-full" x-data="{ darkMode: false }" :class="{ 'dark': darkMode }">
            <header class="mx-auto max-w-7xl top-0 left-0 px-4 py-4 z-10">
                <div class="flex items-center justify-between py-4">
                    <a href="#" class="text-3xl font-bold text-gray-900 dark:text-gray-200 pl-4">
                        Kognize
                    </a>
                </div>
            </header>
            <main>
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
