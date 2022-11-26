<?php require('partials/head.php') ?>

<h1>Login</h1>
<div class="alert alert-primary" role="alert">
  Test User => username: johndoe || password: password
</div>

<form method="POST" action="auth/login">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" value="johndoe">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php if ($_SESSION['errors'] && $_SESSION['errors']['username']) { ?>
	<div class="alert alert-danger mt-5" role="alert">
		<?= $_SESSION['errors']['username'] ?>
	</div>
<?php } ?>


<?php require('partials/footer.php') ?>
