<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<main>
	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<div class="mt-10 sm:mt-0">
			<div class="md:grid md:grid-cols-3 md:gap-6">
				<div class="md:col-span-1">
					<div class="px-4 sm:px-0">
						<h3 class="text-lg font-medium leading-6 text-gray-900">Book Creation</h3>
					</div>
				</div>
				<div class="mt-5 md:col-span-2 md:mt-0">
					<form action="#" method="POST">
						<div class="overflow-hidden shadow sm:rounded-md">
							<div class="bg-white px-4 py-5 sm:p-6">
								<div class="grid grid-cols-6 gap-6">
									<div class="col-span-6 sm:col-span-3">
										<label for="title" class="block text-sm font-medium text-gray-700">Title</label>
										<div class="mt-1">
											<input id="title" name="title" type="text" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
										</div>
									</div>
									<div class="col-span-6 sm:col-span-3">
										<label for="author" class="block text-sm font-medium text-gray-700">Author</label>
										<div class="mt-1">
											<input id="author" name="author" type="text" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
										</div>
									</div>
									<div class="col-span-6 sm:col-span-3">
										<label for="rating" class="block text-sm font-medium text-gray-700">Rating</label>
										<div class="mt-1">
											<input id="rating" name="rating" type="text" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
										</div>
									</div>
								</div>
							</div>
							<div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
								<button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Create</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>

<?php require('partials/footer.php') ?>
