<!-- Breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<ul class="bread-list">
						<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
						<li class="active"><a href="blog-single.html">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Contact -->
<section id="contact-us" class="contact-us section">
	<div class="container">
		<div class="contact-head">
			<div class="row">
				<div class="col-lg-8 col-12">
					<div class="form-main">
						<div class="title">
							<h4>Profil Pelanggan</h4>
							<h3>Perbaharui Data Pelanggan</h3>
						</div>
						<form class="form" method="post" action="<?= base_url() ?>/pelanggan/cprofil/update_profil">
							<div class="row">
								<div class="col-lg-6 col-12">
									<div class="form-group">
										<label>Nama Pelanggan<span>*</span></label>
										<input name="nama" value="<?= $pelanggan->nama_konsumen ?>" type="text" placeholder="">
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="form-group">
										<label>No Telepon<span>*</span></label>
										<input name="no_hp" value="<?= $pelanggan->no_hp_konsumen ?>" type="number" placeholder="">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group message">
										<label>Alamat<span>*</span></label>
										<textarea name="alamat" placeholder=""><?= $pelanggan->alamat_konsumen ?></textarea>
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="form-group">
										<label>Username<span>*</span></label>
										<input name="username" value="<?= $pelanggan->username ?>" type="text" placeholder="">
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="form-group">
										<label>Password<span>*</span></label>
										<input name="password" value="<?= $pelanggan->password ?>" type="text" placeholder="">
									</div>
								</div>

								<div class="col-12">
									<div class="form-group button">
										<button type="submit" class="btn ">Update Profil</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="single-head">
						<div class="single-info">
							<i class="fa fa-user"></i>
							<h4 class="title">Member</h4>
							<ul>
								<li class="mt-5">
									<h5>Level Member <br><strong class="badge badge-warning">
											<?php
											if ($pelanggan->member == '1') {
												echo 'Clasic';
											} else if ($pelanggan->member == '2') {
												echo 'Silver';
											} else {
												echo 'Gold';
											}
											?>
										</strong></h5>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Contact -->

<!-- Map Section -->
<div class="map-section">
	<div id="myMap"></div>
</div>
<!--/ End Map Section -->

<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
	<div class="container">
		<div class="inner-top">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
					<!-- Start Newsletter Inner -->
					<div class="inner">
						<h4>Newsletter</h4>
						<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
						<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
							<input name="EMAIL" placeholder="Your email address" required="" type="email">
							<button class="btn">Subscribe</button>
						</form>
					</div>
					<!-- End Newsletter Inner -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Shop Newsletter -->