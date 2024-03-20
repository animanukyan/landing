<!DOCTYPE html>
<html class="h-full">
    <head>
        <title>Project</title>
        <meta charset="UTF-8" />
        <meta name="description" content="Information about page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="h-full">
        <div class="bg-gradient-to-r h-full from-gray-200 to-gray-100 dark:from-gray-900 dark:to-gray-700" x-data="{ darkMode: false }" :class="{ 'dark': darkMode }">
            <header class="fixed w-full top-0 left-0 px-4 z-10 bg-gradient-to-r from-gray-200 to-gray-100 dark:from-gray-900 dark:to-gray-700">
                <div class="flex items-center justify-between py-4">
                    <a href="#" class="text-lg text-gray-900 dark:text-gray-200 pl-4">
                        Luminax
                    </a>
                    <div class="relative flex items-center">
                        <a href="#" class="rounded-full hover:shadow-md border border-transparent hover:border-gray-200 dark:border-gray-700 p-3 flex items-center justify-center">
                            <img src="./images/twitter.svg" alt="twitter icon" class="w-7 h-7" />
                        </a>
                        <a href="#" class="rounded-full hover:shadow-md border border-transparent hover:border-gray-200 dark:border-gray-700 p-3 flex items-center justify-center">
                            <img src="./images/discord.svg" alt="discord icon" class="w-8 h-8" />
                        </a>
                        <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-0 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </header>
            <main>
                @yield('content')
            </main>
        </div>
        <script>
            var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
            var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

            // Change the icons inside the button based on previous settings
            if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
                themeToggleLightIcon.classList.remove("hidden");
            } else {
                themeToggleDarkIcon.classList.remove("hidden");
            }

            var themeToggleBtn = document.getElementById("theme-toggle");

            themeToggleBtn.addEventListener("click", function () {
                // toggle icons inside button
                themeToggleDarkIcon.classList.toggle("hidden");
                themeToggleLightIcon.classList.toggle("hidden");

                // if set via local storage previously
                if (localStorage.getItem("color-theme")) {
                    if (localStorage.getItem("color-theme") === "light") {
                        document.documentElement.classList.add("dark");
                        localStorage.setItem("color-theme", "dark");
                    } else {
                        document.documentElement.classList.remove("dark");
                        localStorage.setItem("color-theme", "light");
                    }

                    // if NOT set via local storage previously
                } else {
                    if (document.documentElement.classList.contains("dark")) {
                        document.documentElement.classList.remove("dark");
                        localStorage.setItem("color-theme", "light");
                    } else {
                        document.documentElement.classList.add("dark");
                        localStorage.setItem("color-theme", "dark");
                    }
                }
            });

            // Set the launch date
            const launchDate = new Date("May 17, 2024 00:00:00").getTime();

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
    </body>
</html>
