<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo SITE_NAME; ?>
    </title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🍕</text></svg>">

</head>

<body class="bg-black">
    <section class="w-full px-6 pb-12 antialiased bg-black" data-tails-scripts="//unpkg.com/alpinejs">
        <div class="mx-auto max-w-7xl">
            <nav
                class="bg-black dark:text-white px-2 sm:px-4 py-2.5 fixed w-full z-20 top-0 left-0 border-b border-gray-800">
                <div class="mx-auto container w-full flex flex-wrap items-center justify-between pl-4">
                    <a href="<?php echo route($routes->get('home')) ?>" class="flex items-center">
                        <span class="self-center text-xl font-semibold whitespace-nowrap">
                            <?php echo SITE_NAME; ?>
                        </span>
                    </a>
                    <div class="flex md:order-2">
                        <?php if (!auth()->check()): ?>
                            <a href="<?php echo route($routes->get('login')) ?>"
                                class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-lg shadow-blue-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Bejelentkezés
                            </a>
                        <?php else: ?>
                            <button type="button" class="flex space-x-2" id="user-menu-button" aria-expanded="false"
                                data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                                <span>Üdv,
                                    <?php echo auth()->user()->name ?>!
                                </span>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                                id="user-dropdown">
                                <div class="px-4 py-3">
                                    <span class="block text-sm text-gray-900">
                                        <?php echo auth()->user()->name ?>
                                    </span>
                                    <span class="block text-sm font-medium text-gray-500 truncate">
                                        <?php echo auth()->user()->email ?>
                                    </span>
                                    <span class="block text-sm font-medium text-gray-500 truncate">Role:
                                        <?php echo auth()->user()->role ?>
                                    </span>
                                </div>
                                <ul class="py-1" aria-labelledby="user-menu-button">
                                    <li>
                                        <a href="<?php echo route($routes->get('logout')) ?>"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kijelentkezés</a>
                                    </li>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <button data-collapse-toggle="navbar-sticky" type="button"
                            class="ml-2 inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                            aria-controls="navbar-sticky" aria-expanded="false">
                            <span class="sr-only">Menü</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <main class="overflow-x-hidden py-10">