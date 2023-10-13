<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data User</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Data</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">User</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Data User</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#modalAddUser">
											<i class="fa fa-plus"></i>
											Tambah User
										</button>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Lengkap</th>
													<th>Email</th>
													<th>Username</th>
													<th>Level</th>
													<th>Action</th>
												</tr>
											</thead>
											
											<tbody>
												<?php
													$no = 1;
													$query = mysqli_query($conn,'SELECT * from user');
													while ($user = mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php echo $user['nama_lengkap'] ?></td>
													<td><?php echo $user['email'] ?></td>
													<td><?php echo $user['username'] ?></td>
													<td><?php echo $user['level'] ?></td>
													<td>
														<a href="#modalDetailUser<?php echo $user['id'] ?>" data-toggle="modal" title="Detail" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
														<a href="#modalEditUser<?php echo $user['id'] ?>" data-toggle="modal" title="Edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
														<a href="#modalHapusUser<?php echo $user['id'] ?>" data-toggle="modal" title="Hapus" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
													</td>
												</tr>
											<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<center><h6><b>&copy; Copyright@2020|GPIB CINERE|</b></h6></center>
		</div>

		<div class="modal fade" id="modalAddUser" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														New</span> 
														<span class="fw-light">
															User
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form method="POST" enctype="multipart/form-data" action="">
												<div class="modal-body">
													<div class="form-group">
														<label>Nama Lengkap</label>
														<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap ..." required="">
													</div>
													<div class="form-group">
														<label>Email</label>
														<input type="email" name="email" class="form-control" placeholder="Email ..." required="">
													</div>
													<div class="form-group">
														<label>Nomor HP</label>
														<input type="number" name="nohp" class="form-control" placeholder="Nomor HP ..." required="">
													</div>
													<div class="form-group">
														<label>Username</label>
														<input type="text" name="username" class="form-control" placeholder="Username ..." required="">
													</div>
													<div class="form-group">
														<label>Password</label>
														<input type="password" name="password" class="form-control" placeholder="Password ..." required="">
													</div>
													<div class="form-group">
														<label>Level</label>
                                                        <select name="level" class="form-control" required="">
                                                            <option value="admin">Admin</option>
                                                            <option value="user" selected>User</option>
                                                        </select>
													</div>
												</div>
												<div class="modal-footer no-bd">
													<button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Save Changes</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
												</div>
												</form>
											</div>
										</div>
									</div>

									<?php 
										$p = mysqli_query($conn,'SELECT * from user');
										while($d = mysqli_fetch_array($p)) {
									?>

									<div class="modal fade" id="modalEditUser<?php echo $d['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Edit</span> 
														<span class="fw-light">
															User
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form method="POST" enctype="multipart/form-data" action="">
												<div class="modal-body">
													<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                                    <div class="form-group">
														<label>Nama Lengkap</label>
														<input value="<?php echo $d['nama_lengkap'] ?>" type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap ..." required="">
													</div>
													<div class="form-group">
														<label>Email</label>
														<input value="<?php echo $d['email'] ?>" type="email" name="email" class="form-control" placeholder="Email ..." required="">
													</div>
													<div class="form-group">
														<label>Nomor HP</label>
														<input value="<?php echo $d['nohp'] ?>" type="number" name="nohp" class="form-control" placeholder="Nomor HP ..." required="">
													</div>
													<div class="form-group">
														<label>Username</label>
														<input value="<?php echo $d['username'] ?>" type="text" name="username" class="form-control" placeholder="Username ..." required="">
													</div>
													<div class="form-group">
														<label>Password</label>
														<input value="<?php echo $d['password'] ?>" type="password" name="password" class="form-control" placeholder="Password ..." required="">
													</div>
													<div class="form-group">
														<label>Level</label>
                                                        <select name="level" class="form-control" required="">
                                                            <option value="admin">Admin</option>
                                                            <option value="user" selected>User</option>
                                                        </select>
													</div>
												</div>
												<div class="modal-footer no-bd">
													<button type="submit" name="ubah" class="btn btn-primary"><i class="fa fa-save"></i> Save Changes</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
												</div>
												</form>
											</div>
										</div>
									</div>

									<?php } ?>

									<?php 
										$c = mysqli_query($conn,'SELECT * from user');
										while($row = mysqli_fetch_array($c)) {
									?>

									<div class="modal fade" id="modalHapusUser<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Hapus</span> 
														<span class="fw-light">
															User
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form method="POST" enctype="multipart/form-data" action="">
												<div class="modal-body">
													<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
													<h4>Apakah Anda Ingin Menghapus User Ini ?</h4>
												</div>
												<div class="modal-footer no-bd">
													<button type="submit" name="hapus" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
													<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
												</div>
												</form>
											</div>
										</div>
									</div>

									<?php } ?>

									<?php 
										$q = mysqli_query($conn,'SELECT * from user');
										while($k = mysqli_fetch_array($q)) {
									?>

									<div class="modal fade" id="modalDetailUser<?php echo $k['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Detail</span> 
														<span class="fw-light">
															User
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form method="POST" enctype="multipart/form-data" action="">
												<div class="modal-body">
													<input type="hidden" name="id" value="<?php echo $k['id'] ?>">
                                                    <div class="form-group">
														<label>Nama Lengkap</label>
														<input readonly value="<?php echo $k['nama_lengkap'] ?>" type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap ..." required="">
													</div>
													<div class="form-group">
														<label>Email</label>
														<input readonly value="<?php echo $k['email'] ?>" type="email" name="email" class="form-control" placeholder="Email ..." required="">
													</div>
													<div class="form-group">
														<label>Nomor HP</label>
														<input readonly value="<?php echo $k['nohp'] ?>" type="number" name="nohp" class="form-control" placeholder="Nomor HP ..." required="">
													</div>
													<div class="form-group">
														<label>Username</label>
														<input readonly value="<?php echo $k['username'] ?>" type="text" name="username" class="form-control" placeholder="Username ..." required="">
													</div>
													<div class="form-group">
														<label>Password</label>
														<input readonly value="<?php echo $k['password'] ?>" type="password" name="password" class="form-control" placeholder="Password ..." required="">
													</div>
													<div class="form-group">
														<label>Level</label>
                                                        <input readonly value="<?php echo $k['level'] ?>" type="text" name="nama_barang" class="form-control" placeholder="Nama Barang ..." required="">
													</div>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
												</div>
												</form>
											</div>
										</div>
									</div>

								<?php } ?>
		<?php
            if(isset($_POST['simpan']))
                {
                    $nama_lengkap = $_POST['nama_lengkap'];
                    $email = $_POST['email'];
                    $nohp = $_POST['nohp'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $level = $_POST['level'];
                        
                    mysqli_query($conn,"INSERT into user values ('','$nama_lengkap', '$email', '$nohp', '$username', '$password', '$level')");
                    echo "<script>alert ('User Berhasil Disimpan') </script>";
                    echo"<meta http-equiv='refresh' content=0; URL=?view=datauser>";
                }

                elseif(isset($_POST['ubah']))
                {
                	$id = $_POST['id'];
                	$nama_lengkap = $_POST['nama_lengkap'];
                    $email = $_POST['email'];
                    $nohp = $_POST['nohp'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $level = $_POST['level'];
                        
                    mysqli_query($conn,"UPDATE user set id='$id', nama_lengkap='$nama_lengkap', email='$email', nohp='$nohp', username='$username', password='$password' where id='$id'");
                    echo "<script>alert ('User Berhasil Diubah') </script>";
                    echo"<meta http-equiv='refresh' content=0; URL=?view=datauser>";
                }

                elseif(isset($_POST['hapus']))
                {
                	$id = $_POST['id'];
                	mysqli_query($conn,"DELETE from user where id='$id'");
                    echo "<script>alert ('User Berhasil Dihapus') </script>";
                    echo"<meta http-equiv='refresh' content=0; URL=?view=datauser>";
                }
                ?>