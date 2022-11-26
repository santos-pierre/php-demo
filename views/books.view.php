<?php require('partials/head.php') ?>

<div class="d-flex justify-content-between">
	<h1>My Books review</h1>

	<a href="create-book">
		<button type="button" class="btn btn-primary">Create Book Review</button>
	</a>
</div>

<?php if (count($books) === 0) { ?>
	<h2>Book review not found</h2>
<?php } else { ?>
	<div class="list-group mb-5">
			<?php foreach($books as $book){ ?>
				<a href="book?id=<?=$book['id'] ?>" class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><?= $book['title'] ?></h5>
						<small class="text-muted"><?= $book['rating'] ?> / 5</small>
					</div>
					<p class="mb-1"><?= $book['comment'] ? $book['comment'] : 'No Comment Posted' ?></p>
					<small class="text-muted">Author: <?= $book['author'] ?></small>
				</a>
			<?php } ?>
	</div>
<?php }?>

<?php require('partials/footer.php') ?>
