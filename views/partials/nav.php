<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/books-app/">Book App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/books-app/">Home</a>
        </li>
				<?php if($_SESSION['connected']) { ?>
					<li class="nav-item">
					<a class="nav-link" href="books">My Books</a>
					</li>
				<?php } ?>
				<?php if(!$_SESSION['connected']) { ?>
					<li class="nav-item">
						<a class="nav-link" href="login">Log in</a>
					</li>
				<?php } ?>
				<?php if($_SESSION['connected']) { ?>
					<li class="nav-item">
						<a class="nav-link" href="auth/logout">Log out</a>
					</li>
				<?php } ?>
      </ul>
    </div>
  </div>
</nav>
