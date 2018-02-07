
<?php echo validation_errors(); ?>

<?php echo form_open('blog/newarticle'); ?>
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" id="title-input" name="title">
	</div>

	<div class="form-group">
		<label for="content">Content</label>
		<textarea type="text" class="form-control" id="content-input" name="content"></textarea>
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>

</form>

