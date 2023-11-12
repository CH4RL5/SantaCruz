<?php require_once "./app/views/inc/navbar-admin.php"; ?>

<div class="container is-fluid mb-6">
	<h1 class="title">Products</h1>
	<h2 class="subtitle">New Product</h2>
</div>

<div class="container pb-6 pt-6">

	<form class="FormAjax" action="<?php echo APP_URL; ?>app/ajax/productAjax.php" method="POST" autocomplete="off" enctype="multipart/form-data">

		<input type="hidden" name="module_product" value="register">

		<div class="columns">
			<div class="column">
				<div class="control">
					<label>Name</label>
					<input class="input" type="text" name="name_product" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
				</div>
			</div>
			<div class="column">
				<div class="control">
					<label>Type</label>
					<input class="input" type="text" name="type_product" pattern="[a-zA-Z]{3,40}" maxlength="40" required>
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<div class="control">
					<label>Price</label>
					<input class="input" type="text" name="price_product" pattern="[0-9]{4,20}" maxlength="20" required>
				</div>
			</div>
			<div class="column">
				<div class="control">
					<label>Stock</label>
					<input class="input" type="text" name="stock_product" pattern="[0-9]{4,20}" maxlength="70" required>
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<div class="control">
					<label>Code</label>
					<input class="input" type="text" name="code_product" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
				</div>
			</div>
			<div class="column">
				<div class="control">
					<label>Brand</label>
					<input class="input" type="text" name="brand_product" pattern="[a-zA-Z]{7,100}" maxlength="100" required>
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<div class="file has-name is-boxed">
					<label class="file-label">
						<input class="file-input" type="file" name="photo_product" accept=".jpg, .png, .jpeg">
						<span class="file-cta">
							<span class="file-label">
								Select a picture
							</span>
						</span>
						<span class="file-name">JPG, JPEG, PNG. (MAX 5MB)</span>
					</label>
				</div>
			</div>
		</div>
		<p class="has-text-centered">
			<button type="reset" class="button is-link is-light is-rounded">Clean</button>
			<button type="submit" class="button is-info is-rounded">Save</button>
		</p>
	</form>
</div>