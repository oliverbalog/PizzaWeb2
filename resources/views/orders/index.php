<?php
include(APP_ROOT . "/resources/views/layouts/header.php");
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src = "/js/orders.js"></script>
    <section class="w-full px-6 pb-12 antialiased bg-black text-white">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-2xl font-semibold mb-8">Rendelés kiválasztása</h1>
            <div class="flex flex-col items-center md:flex-row">
                <div class="flex flex-col space-y-2 w-full">
                    <div>
                        <label for="categorySelect" class="block mb-2 text-sm font-medium text-gray-900">Category:</label>
                        <select id="categorySelect" data-route="<?php echo $routes->get('orders.ajax')->getPath(); ?>" <?php echo isset($disabled) ? 'disabled' : '' ?> class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </select>
                    </div>
                    <div>
                        <label for="pizzaSelect" class="block mb-2 text-sm font-medium text-gray-900">Pizza:</label>
                        <select id="pizzaSelect" <?php echo isset($disabled) ? 'disabled' : '' ?> class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </select>
                    </div>
                    <div>
                        <label for="orderedSelect" class="block mb-2 text-sm font-medium text-gray-900">Ordered at:</label>
                        <select id="orderedSelect" <?php echo isset($disabled) ? 'disabled' : '' ?> class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </select>
                    </div>
                </div>
                <div class="w-full mt-16 ml-20 md:mt-0 md:w-2/5">
                    <span class="td-content">Pizza neve: </span><span id="name" class="data"></span>
                    <br>
                    <span class="td-content">Ár: </span><span id="price" class="data"></span>
                    <br>
                    <span class="td-content">Mennyiség: </span><span id="amount" class="data"></span>
                    <br>
                    <span class="td-content">Megrendelve: </span><span id="ordered_at" class="data"></span>
                    <br>
                    <span class="td-content">Kiszállítva: </span><span id="delivery_at" class="data"></span>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full px-6 pb-12 antialiased bg-black text-white">
        <div class="px-10 mx-auto max-w-8xl">
            <h1 class="text-2xl font-semibold mb-8">
                Orders
                <?php if(auth()->check()) : ?>
                    - <a class="button" href="<?php echo route($routes->get('orders.create')); ?>">Add new</a>
                <?php endif; ?>
            </h1>

            <?php include_once APP_ROOT . '/resources/views/shared/status.php' ?>
            <?php include_once APP_ROOT . '/resources/views/shared/errors.php' ?>

            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left ">
                    <thead class="text-xs  uppercase bg-black">
                        <tr>
                            <th scope="col" class="py-3 px-6">Név</th>
                            <th scope="col" class="py-3 px-6">Kategória</th>
                            <th scope="col" class="py-3 px-6">Vegetáriánus?</th>
                            <th scope="col" class="py-3 px-6">Mennyiség</th>
                            <th scope="col" class="py-3 px-6">Ár</th>
                            <th scope="col" class="py-3 px-6">Megrendelve</th>
                            <th scope="col" class="py-3 px-6">Kiszállítva</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($orders as $order) { ?>
                        <tr class="bg-black border-b">
                            <th scope="row" class="py-4 px-6 font-medium  whitespace-nowrap">
                                <span class="td-content"><?php echo $order['pizza_name']; ?></span>
                            </th>
                            <td class="py-4 px-6">
                                <span class="td-content"><?php echo $order['pizcat_name']; ?></span>
                            </td>
                            <td class="py-4 px-6">
                                <span class="td-content"><?php if ($order['veg'] == 0) echo "Nem"; ?><?php if ($order['veg'] == 1) echo "Igen"; ?></span>
                            </td>
                            <td class="py-4 px-6">
                                <span class="td-content"><?php echo $order['amount']; ?></span>
                            </td>
                            <td class="py-4 px-6">
                                <span class="td-content"><?php echo $order['cat_price']; ?> Ft</span>
                            </td>
                            <td class="py-4 px-6">
                                <span class="td-content"><?php echo $order['ordered_at']; ?></span>
                            </td>
                            <td class="py-4 px-6">
                                <span class="td-content"><?php echo $order['delivery_at']; ?></span>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
<?php
include(APP_ROOT . "/resources/views/layouts/footer.php");
?>