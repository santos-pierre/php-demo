<?php require('partials/head.php') ?>

<h1>Book Review</h1>

<form method="POST" action="book/create">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>
  <div class="mb-3">
    <label for="author" class="form-label">Author</label>
    <input type="text" class="form-control" id="author" name="author" required>
  </div>
	<div class="mb-3">
		<label for="comment" class="form-label">Comment</label>
		<textarea class="form-control" id="comment" rows="3" name="comment" required></textarea>
	</div>
	<div class="mb-3">
		<label for="rating" class="form-label">Rating</label>
		<select class="form-select" id="rating" name="rating" required>
			<option selected value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php if ($_SESSION['errors'] && $_SESSION['errors']['username']) { ?>
	<div class="alert alert-danger mt-5" role="alert">
		<?= $_SESSION['errors']['username'] ?>
	</div>
<?php } ?>


<?php require('partials/footer.php') ?>
