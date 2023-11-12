<?php
include(APP_ROOT . "/resources/views/layouts/header.php");
?>

<section class="bg-black">
    <div class="max-w-screen-xl px-4 justify-center mx-auto lg:gap-8 xl:gap-0 grid-cols-3">
        <div id="controls-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/pizza.png"
                        class="absolute block h-auto max-w-sm -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="/images/pizza2.png"
                        class="absolute block h-auto max-w-sm -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Előző</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Következő</span>
                </span>
            </button>
        </div>
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1
                class="dark:text-white max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">
                Pizzák hagyomány szerint</h1>
            <p class="text-2xl text-gray-900 dark:text-white mb-6">
                A legjobb pizzákat itt kapni. Házhozszállítás lehetséges a megrendelések menüpont alatt.
            </p>
            <a href="#"
                class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-lg shadow-blue-500/50 font-medium rounded-lg text-base px-5 py-2.5 text-center">
                Rendelés
            </a>
            <a href="#"
                class="dark:text-white ml-5 px-5 py-2.5 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-black focus:ring-4 focus:ring-gray-100">
                Válogatás
            </a>
        </div>

        <div class="mr-auto place-self-center lg:col-span-7 mt-20">
            <h3 class="font-medium text text-gray dark:text-white mt-4">
                Kínálatunk
            </h3>
            <p class="text text-gray dark:text-white ml-4">
                Ételkínálatunk a magyaros fogásokon át az olasz és görög konyha ízvilágáig széles spektrumon mozog.
            </p>
            <p class="text text-gray dark:text-white ml-4">
                Fontos számunkra, hogy kiváló minőségű, friss alapanyagokból készítsük el ételeinket, vásárlóink
                maximális megelégedettségéért.
            </p>
            <p class="text text-gray dark:text-white ml-4">
                Küldetésünk, hogy élményt adjunk vendégeinknek.
            </p>
            <p class="text text-gray dark:text-white ml-4">
                Napi választékunkban megtalálhatóak levesek, húsételek, magyaros ételek, pizzák, kézműves burgerek,
                desszertek, friss szendvicsek, stb…
            </p>

        </div>
    </div>
</section>

<?php
include(APP_ROOT . "/resources/views/layouts/footer.php");
?>