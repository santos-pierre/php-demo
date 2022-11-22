<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<main class="py-12">
	<div class="sm:mx-auto sm:w-full sm:max-w-md">
		<img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
		<h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Create your account</h2>
	</div>
	<div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
		<div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
			<form class="space-y-6" action="#" method="POST">
				<div>
					<label for="username" class="block text-sm font-medium text-gray-700">Username</label>
					<div class="mt-1">
						<input id="username" name="username" type="text" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
					</div>
				</div>
				<div>
					<label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
					<div class="mt-1">
						<input id="email" name="email" type="email" autocomplete="email" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
					</div>
				</div>

				<div>
					<label for="password" class="block text-sm font-medium text-gray-700">Password</label>
					<div class="mt-1">
						<input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
					</div>
				</div>

				<div>
					<button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Register</button>
				</div>
			</form>
		</div>
</main>

<?php require('partials/footer.php') ?>
