<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" href="./css/lite.css">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./ckeditor/contents.css" type="text/css"/>
	<script type="text/javascript" src="./ckeditor/ckeditor.js"></script>


	<title>Contact Form Email</title>
</head>
<body>
	<h1 class="form__head"><u>Contact Form Email</u></h1>
	
	<form action="kirim.php" method="post">
		<h2 class="form__head">Email Valid</h2>
		<p><input type="email" name="email" placeholder="Email valid" size="30" class="field" required /></p>
		<h2 class="form__head">Nama Projek</h2>
		<p><input type="text" name="judul" placeholder="Nama Projek" size="50" class="field"required /></p>
		<h2 class="form__head">Pesan</h2>
		<p><textarea name="pesan" placeholder="Pesan anda" rows="6" class="field" required></textarea></p>
							<script>CKEDITOR.replace('pesan');</script>
			<h2 class="form__head">Image</h2>
						<p class="mb2">
							<div class="label">Foto<span class="inline-block ml2 small">Image harus 800px x 600px</span></div>
							<div class="js-field field-area--large clearfix">
								<label for="upload_image" name="image"class="btn btn-cancel right">Browse</label>
								<div class="overflow-hidden">
									<input type="hidden" name="id_image" value="<?=@$edit['id_image']?>">
									<input type="text" id="upload_image_link" class="field col-12" readonly value="<?php echo @$edit['image'];?>" <?php echo @$edit['id'] != "" ? "" : "required"?>>
								</p>
		<p><input type="submit" name="kirim" value="Kirim Pesan" class="btn btn-large btn-add mr2"/><button class="btn btn-large btn-add mr2">Batal</button></p>
<a href="tambah.php" name="tambah" value="Tambah Projek" class="btn btn-cancel btn-large">	
	</form>
	<script src="./js/jquery.min.js"></script>
	<script src="./js/script.js"></script>
	<script src="./js/jquery.min.js"></script>
	<script src="./js/script.js"></script>

</body>
</html>