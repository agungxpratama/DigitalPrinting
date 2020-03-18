<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url('assets/assets3/') ?>images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="<?= base_url('index.php/auth/register'); ?>" method="post" enctype="multipart/form-data">
					<span class="login100-form-title p-b-49">
						Daftar
					</span>
					<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="nama" placeholder="Nama">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
						<span class="label-input100">Alamat</span>
						<input class="input100" type="text" name="alamat" placeholder="Alamat">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
						<span class="label-input100">No Hp</span>
						<input class="input100" type="text" name="nohp" placeholder="No Hp">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Type your Email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div><br>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
						<span class="label-input100">Gambar</span>
						<input class="input100" type="file" name="gambar">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Daftar
							</button>
						</div>
						<div class="txt1 text-center p-t-54 p-b-20">
							<span>
								<a href="<?= base_url('auth') ?>">Sudah Punya Akun?</a></li>

							</span>
						</div>
					</div>




					<!--
					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="#" class="txt2">
							Sign Up
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>



</body>

</html>
