
<!-- CONTENT -->

<section>

	<h1>Upload</h1>

	<pre><code> 

 	</code></pre>

	<?= form_open('UploadFiles/uploads','class="email" id="uploadf"');?>
		<?= form_upload('userfile', 'usuario'); ?>
		<?= form_submit('uploadf', 'Submit');
// Would produce:  <input type="submit" name="uploadf" value="Submit Post!" /> ?>
		<input type="file" name="userfile" />
		<input type="file" name="images[]" multiple />
	<?= form_close(); ?>

</section>

<div class="further">

	<section>

		<h1>Go further</h1>

		<h2>
			
		</h2>

	

	</section>

</div>