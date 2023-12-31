<?php
include(APP_ROOT . "/resources/views/layouts/header.php");
?>
<section class="w-full px-6 pb-12 antialiased bg-black text-white">
    <div class="px-10 py-24 mx-auto max-w-7xl">
        <h1 class="text-2xl font-semibold text-white mb-8">Szerkesztés</h1>

        <?php include_once APP_ROOT . '/resources/views/shared/errors.php' ?>

        <form method="POST" action="<?php echo route($routes->get('pizzas.update'), $pizza['id']); ?>"
            enctype=”multipart/form-data”>

            <?php include_once 'form.php' ?>

            <div class="flex justify-end mt-6">
                <div class="py-2 mr-5">
                    <a class="text-red-600 link"
                        href="<?php echo route($routes->get('pizzas.delete'), $pizza['id']); ?>">Törlés</a>
                </div>
                <button type="submit" class="button">
                    Mentés
                </button>
            </div>
        </form>
    </div>
</section>
<?php
include(APP_ROOT . "/resources/views/layouts/footer.php");
?>