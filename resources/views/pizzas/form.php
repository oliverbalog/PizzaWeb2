<div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
	<div>
		<label  for="name">Pizza neve</label>
		<input id="name" class="text-black" name="name" type="text" required value="<?php echo isset($pizza) ? $pizza['name'] : null ?>" <?php echo isset($disabled) ? 'disabled' : '' ?>>
	</div>
    <div>
        <label for="category_name">Kategória</label>
        <input id="category_name" class="text-black" name="category_name" type="text" required value="<?php echo isset($pizza) ? $pizza['category_name'] : null ?>" <?php echo isset($disabled) ? 'disabled' : '' ?>>
    </div>
    <div>
        <label for="is_vegetarian">Vegetáriánus?</label>
        <input id="is_vegetarian" class="text-black" name="is_vegetarian" type="checkbox" required value="<?php echo isset($pizza) ? $pizza['is_vegetarian'] : null ?>" <?php echo isset($disabled) ? 'disabled' : '' ?>>
    </div>
</div>
