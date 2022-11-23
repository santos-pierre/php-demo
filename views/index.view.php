<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>Hello. Welcome to the home page.</p>
				<?php if ($_SESSION['connected']) { ?>
					<h1>Hello <?= $_SESSION['user'] ?></h1>
				<?php } ?>
    </div>
</main>

<?php require('partials/footer.php') ?>
