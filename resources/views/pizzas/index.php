<?php
include(APP_ROOT . "/resources/views/layouts/header.php");
?>
<section class="w-full px-6 pb-12 antialiased bg-black dark:text-white">
    <div class="px-10 mx-auto max-w-7xl">
        <h1 class="text-2xl font-semibold mb-8">
            Pizzák
            <?php if(auth()->check()) : ?>
                - <a class="button" href="<?php echo route($routes->get('pizzas.create')); ?>">Hozzáadás</a>
		    <?php endif; ?>
        </h1>

		<?php include_once APP_ROOT . '/resources/views/shared/status.php' ?>
		<?php include_once APP_ROOT . '/resources/views/shared/errors.php' ?>

        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-white uppercase bg-gray-500">
                    <tr>
                        <th scope="col" class="py-3 px-6">Név</th>
                        <th scope="col" class="py-3 px-6">Kategória</th>
                        <th scope="col" class="py-3 px-6">Ár</th>
                        <th scope="col" class="py-3 px-6">Rendelés</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($pizzas as $pizza) { ?>
                    <tr class="bg-black dark:text-white border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-white whitespace-nowrap">
                            <span class="td-content"><?php echo $pizza['name']; ?></span>
                        </th>
                        <td class="py-4 px-6">
                            <span class="td-content"><?php echo $pizza['category_name']; ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="td-content"><?php echo $pizza['cat_price']; ?> Ft</span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="td-content">
                            <a class="button" href="">+</a>
                            </span>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<section>

<?php
include(APP_ROOT . "/resources/views/layouts/footer.php");
?>