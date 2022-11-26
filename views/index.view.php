<?php require('partials/head.php') ?>
	<h1>Last user ratings</h1>
	<div class="list-group mb-5">
			<?php foreach($books as $book){ ?>
				<a href="book?id=<?=$book['id'] ?>" class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><?= $book['title'] ?></h5>
						<small class="text-muted"><?= $book['rating'] ?> / 5</small>
					</div>
					<p class="mb-1"><?= $book['comment'] ? $book['comment'] : 'No Comment Posted' ?></p>
					<small class="text-muted">Added by <?= $book['username'] ?></small>
				</a>
			<?php } ?>
	</div>

<?php require('partials/footer.php') ?>
