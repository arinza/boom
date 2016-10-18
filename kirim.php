<?php
if($_POST['kirim']){
	$admin = 'arinzafarhan100@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$email	= htmlentities($_POST['email']);
	$judul	= htmlentities($_POST['judul']);
	$pesan	= htmlentities($_POST['pesan']);
	$namaFile = "";
			if (!empty($_FILES)){
			$namaFile = $_FILES['image']['name'];
			$path = "./upload/";
			move_uploaded_file($_FILES['image']['tmp_name'], $path.$namaFile);
		}
	
	$pengirim	= 'Dari:  <'.$email.'>';
	
	if(mail($admin, $judul, $pesan, $pengirim)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.php">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.php">Kembali</a>';
	}
}else{
	header("Location: index.php");
}
?>