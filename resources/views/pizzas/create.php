<?php
include(APP_ROOT . "/resources/views/layouts/header.php");
?>
<section class="w-full px-6 pb-12 antialiased bg-black dark:text-white">
    <div class="px-10 py-24 mx-auto max-w-7xl">
        <h1 class="text-2xl font-semibold mb-8">Pizza hozzáadása</h1>

		<?php include_once APP_ROOT . '/resources/views/shared/errors.php' ?>

        <form method="POST" action="<?php echo route($routes->get('pizzas.store')); ?>" enctype=”multipart/form-data”>

            <?php include_once 'form.php' ?>

            <div class="flex justify-end mt-6">
                <button type="submit" class="button">
                    Hozzáad
                </button>
            </div>
        </form>
    </div>
</section>
<?php
include(APP_ROOT . "/resources/views/layouts/footer.php");
?>