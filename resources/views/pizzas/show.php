<?php
include(APP_ROOT . "/resources/views/layouts/header.php");
?>
    <section class="w-full px-6 pb-12 antialiased bg-black text-white">
        <div class="px-10 py-24 mx-auto max-w-7xl">
            <h1 class="text-2xl font-semibold mb-8">Mutat</h1>

			<?php $disabled = true; ?>
			<?php include_once 'form.php' ?>

            <?php if(auth()->check()) : ?>
                <a class="mt-5" href="<?php echo route($routes->get('opsystems.edit'), $opsystem['id']); ?>">
                    Szerkesztés
                </a>
			<?php endif; ?>
        </div>
    </section>
<?php
include(APP_ROOT . "/resources/views/layouts/footer.php");
?>