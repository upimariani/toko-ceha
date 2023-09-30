<body class="js">

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->


	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">


				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> 0821-2026-6161 </li>
								<li><i class="ti-email"></i> tokoceha@gmail.com</li>

							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">


								<li><i class="ti-user"></i> <a href="#"><?= $this->session->userdata('nm_pel'); ?></a></li>
								<?php
								if ($this->session->userdata('id') == '') {
									echo '<li><i class="ti-power-off"></i><a href="' . base_url('Pelanggan/cLogin') . '">Login</a></li>';
								} else {



									echo '<li><i class="ti-power-off"></i><a href="' . base_url('Pelanggan/cLogin/logout') . '">Logout</a></li>';
								}
								?>

							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<!-- <a href="index.html"><img style="width: 400px;" src="<?= base_url() ?>asset/logo.png" alt="logo"></a> -->
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">

						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<?php
							if ($this->session->userdata('id') != '') {
							?>
								<?php
								$qty = 0;
								foreach ($this->cart->contents() as $key => $value) {
									$qty += $value['qty'];
								}
								?>
								<div class="sinlge-bar shopping">
									<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count"><?= $qty ?></span></a>
									<!-- Shopping Item -->
									<div class="shopping-item">
										<div class="dropdown-cart-header">
											<span><?= $qty ?> Items</span>
											<a href="<?= base_url('Pelanggan/cCart') ?>">View Cart</a>
										</div>
										<ul class="shopping-list">
											<?php
											foreach ($this->cart->contents() as $key => $value) {
											?>
												<li>
													<a href="<?= base_url('Pelanggan/cCart/delete/' . $value['rowid']) ?>" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
													<a class="cart-img" href="#"><img src="<?= base_url('asset/foto-produk/' . $value['picture']) ?>" alt="#"></a>
													<h4><a href="#"><?= $value['name'] ?></a></h4>
													<p class="quantity"><?= $value['qty'] ?>x - <span class="amount">Rp. <?= number_format($value['price']) ?></span></p>
												</li>
											<?php
											}
											?>

										</ul>
										<div class="bottom">
											<div class="total">
												<span>Total</span>
												<span class="total-amount">Rp. <?= number_format($this->cart->total()) ?></span>
											</div>
											<a href="<?= base_url('Pelanggan/cCheckout') ?>" class="btn animate">Checkout</a>
										</div>
									</div>
									<!--/ End Shopping Item -->
								</div>
							<?php
							}
							?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">
										<div class="nav-inner">
											<ul class="nav main-menu menu navbar-nav">
												<li class="<?php if ($this->uri->segment(1) == 'Pelanggan' && $this->uri->segment(2) == 'cKatalog') {
																echo 'active';
															}  ?>"><a href="<?= base_url('Pelanggan/cKatalog') ?>">Home</a></li>

												<li class="<?php if ($this->uri->segment(1) == 'Pelanggan' && $this->uri->segment(2) == 'cProfil') {
																echo 'active';
															}  ?>"><a href="<?= base_url('Pelanggan/cProfil') ?>">My Account</a></li>
												<li class="<?php if ($this->uri->segment(1) == 'Pelanggan' && $this->uri->segment(2) == 'cStatusOrder') {
																echo 'active';
															}  ?>"><a href="<?= base_url('Pelanggan/cStatusOrder') ?>">My Order</a></li>
											</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->