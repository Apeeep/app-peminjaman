<!DOCTYPE html>
<html lang="en">

<<<<<<< HEAD
=======

>>>>>>> origin/backup
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Peminjaman</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/logogundar.png" type="image/x-icon" />

	<style>
		.wrapper.wrapper-login {
			background-image: url('assets/img/veloz.jpg');
			background-size: cover;
			background-repeat: no-repeat;
		}

		.copyright {
			position: absolute;
			bottom: 0;
			left: 50%;
			transform: translateX(-50%);
			color: #e5e3e3;
			font-size: 12px;
		}
	</style>
	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Open+Sans:300,400,600,700"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
				urls: ['assets/css/fonts.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/azzara.min.css">
</head>

<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Silahkan Login</h3>

			<div class="login-form">
				<form method="POST" action="cek_login.php">
					<div class="form-group form-floating-label">
						<input id="username" maxlength="15" name="username" type="text" class="form-control input-border-bottom" required>
						<label for="username" class="placeholder">Username</label>
					</div>
					<div class="form-group form-floating-label">
						<input id="password" maxlength="15" name="password" type="password" class="form-control input-border-bottom" required>
						<label for="password" class="placeholder">Password</label>
					</div>

					<div class="form-action mb-3">
						<button type="submit" class="btn btn-primary btn-rounded btn-login">Login</button>
					</div>
				</form>
				<div class="login-account">
					<span class="msg">Belum Punya Akun ?</span>
					<a href="#" id="show-signup" class="link">Daftar</a>
				</div>
			</div>
		</div>

		<div class="container container-signup animated fadeIn">
			<h3 class="text-center">Silahkan Daftar</h3>
			<div class="login-form">
<<<<<<< HEAD
				<form method="POST" action="">
					<div class="form-group form-floating-label">
						<input id="fullname" name="nama_lengkap" type="text" class="form-control input-border-bottom" required>
						<label for="fullname" class="placeholder">Nama Lengkap</label>
					</div>

					<div class="form-group form-floating-label">
						<input id="email" name="email" type="email" class="form-control input-border-bottom" required>
						<label for="email" class="placeholder">Email</label>
					</div>
					<div class="form-group form-floating-label">
						<input id="nohp" name="nohp" type="text" class="form-control input-border-bottom" required>
						<label for="nohp" class="placeholder">No Handphone</label>
					</div>
					<div class="form-group form-floating-label">
						<input id="username" maxlength="15" name="username" type="text" class="form-control input-border-bottom" required>
						<label for="username" class="placeholder">Username</label>
					</div>
					<div class="form-group form-floating-label">
						<input id="passwordsignin" maxlength="15" name="password" type="password" class="form-control input-border-bottom" required>
						<label for="passwordsignin" class="placeholder">Password</label>
					</div>
					<input type="hidden" name="level" value="user">
					<div class="form-action">
						<a href="#" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Cancel</a>
						<button name="simpan" type="submit" class="btn btn-primary btn-rounded btn-login">Daftar</button>>
=======
				<form method="POST" action="" class="row">
					<div class="form-group form-floating-label col-6">
						<input id="fullname" name="nama_lengkap" type="text" class="form-control input-border-bottom" required>
						<label for="fullname" class="placeholder">Nama Lengkap</label>
					</div>
					<div class="form-group form-floating-label col-6">
						<input id="nama_dosen" name="nama_dosen" type="text" class="form-control input-border-bottom" required>
						<label for="nama_dosen" class="placeholder">Nama Dosen</label>
					</div>
					<div class="form-group form-floating-label col-6">
						<input id="matkul" name="matkul" type="text" class="form-control input-border-bottom" required>
						<label for="matkul" class="placeholder">Nama Mata Kuliah</label>
					</div>
					<div class="form-group form-floating-label col-6 ">
						<select id="semester" name="semester" class="form-control input-border-bottom my-1 py-2" required>
							<option value=""></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="Donatur Kampus">Donatur Kampus</option>
						</select>
						<label for="semester" class="placeholder">Semester</label>
					</div>
					<div class="form-group form-floating-label col-6">
						<input id="email" name="email" type="email" class="form-control input-border-bottom" required>
						<label for="email" class="placeholder">Email</label>
					</div>
					<div class="form-group form-floating-label col-6">
						<input id="nohp" name="nohp" type="text" class="form-control input-border-bottom" required>
						<label for="nohp" class="placeholder">No Handphone</label>
					</div>
					<div class="form-group form-floating-label col-6">
						<input id="username" maxlength="15" name="username" type="text" class="form-control input-border-bottom" required>
						<label for="username" class="placeholder">Username</label>
					</div>
					<div class="form-group form-floating-label col-6">
						<input id="passwordsignin" maxlength="15" name="password" type="password" class="form-control input-border-bottom" required>
						<label for="passwordsignin" class="placeholder">Password</label>
					</div>
					<div class="form-group form-floating-label col-6">
						<input id="kelas" name="kelas" type="text" class="form-control input-border-bottom" required>
						<label for="kelas" class="placeholder">Kelas/Angkatan</label>
					</div>
					<div class="form-group form-floating-label col-6">
						<input id="perasat" name="perasat" type="text" class="form-control input-border-bottom" required>
						<label for="perasat" class="placeholder">Jenis Perasat</label>
					</div>
					<input type="hidden" name="level" value="user">
					<div class="form-action col-12">
						<a href="#" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Cancel</a>
						<button name="simpan" type="submit" class="btn btn-primary btn-rounded btn-login">Daftar</button>
>>>>>>> origin/backup
					</div>
				</form>
			</div>
		</div>
<<<<<<< HEAD

=======
>>>>>>> origin/backup
	</div>
	<center>
		<h6><b>&copy; Copyright@2023 Audi Rizky</b></h6>
	</center>
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/ready.js"></script>
</body>

</html>

<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
	$nama_lengkap = $_POST['nama_lengkap'];
<<<<<<< HEAD
=======
	$nama_dosen = $_POST['nama_dosen'];
	$matkul = $_POST['matkul'];
	$semester = $_POST['semester'];
>>>>>>> origin/backup
	$email = $_POST['email'];
	$nohp = $_POST['nohp'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
<<<<<<< HEAD

	mysqli_query($conn, "insert into user values('','$nama_lengkap','$email','$nohp','$username','$password','$level')");
=======
	$kelas = $_POST['kelas'];
	$perasat = $_POST['perasat'];

	mysqli_query($conn, "insert into user values('','$nama_lengkap','$nama_dosen','$matkul','$semester','$email','$nohp','$username','$password','$level','$kelas','$perasat')");
>>>>>>> origin/backup
	echo "<script>alert ('Data Berhasil Disimpan') </script>";
	echo "<meta http-equiv='refresh' content=0; URL=index.php>";
}
?>