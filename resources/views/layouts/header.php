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
            <nav class="bg-black dark:text-white px-2 sm:px-4 py-2.5 fixed w-full z-20 top-0 left-0 border-b border-gray-800">
                <div class="container flex flex-wrap items-center justify-between pl-4">
                    <a href="<?php echo route($routes->get('home')) ?>" class="flex items-center">
                        <span class="self-center text-xl font-semibold whitespace-nowrap">
                            <?php echo SITE_NAME; ?>
                        </span>
                    </a>
                </div>
            </nav>
        </div>
    </section>

    <main class="overflow-x-hidden py-10">