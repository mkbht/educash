	<div class="col-md-9">
	<h3> Add Manpower</h3>
	<hr>

		<?=validation_errors('<div class="alert alert-danger">', '</div>');?>
		<?=form_open(base_url('admin/addmanpower'))?>
		<label>Manpower Name</label>
		<input class="form-control" name="name" type="text">
		<label>Address</label>
		<input type="text" name="address" class="form-control">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
		<label>Website</label>
		<input type="text" name="website" class="form-control">
		<label>Phone No.</label>
		<input type="tel" name="phone" class="form-control">
		<label>Description</label>
		<textarea name="description" class="form-control" rows=10></textarea>
		<label>Thumbnail Url</label>
		<input type="text" name="thumb" class="form-control">
		<br>
		<button name="submit" type="submit" class="btn btn-primary">Add Manpower</button>
	</div>
</div>
</body>
