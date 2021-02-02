<?php
	include_once 'header.php';
?>
	
		<section>
			<h2>Upload image</h2>
			<form action="upload.php" method="POST" enctype="multipart/form-data">
				<input type="file" name="file">
				<button type="submit" name="submit">UPLOAD</button>
			</form>
		</section>
		<hr>
		<section>
			<h2>Upload sounds</h2>
			<p>Note: you can only upload .wav files at this time<p>
			<p>You might also need to refresh the home page for the new sounds to work properly<p>
			<form action="uploadsounds.php" method="POST" enctype="multipart/form-data">
				<select id="sounds" name="soundvalue">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="dot">dot</option>
					<option value="enter">enter</option>
					<option value="minus">minus</option>
					<option value="multi">multi</option>
					<option value="plus">plus</option>
				</select>
				<input type="file" name="file">
				<button type="submit" name="submit">UPLOAD</button>
			</form>
		</section>
		
<?php
	include_once 'footer.php';
?>	