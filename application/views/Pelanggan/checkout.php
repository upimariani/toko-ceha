<!-- Breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<ul class="bread-list">
						<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
						<li class="active"><a href="blog-single.html">Checkout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Checkout -->
<section class="shop checkout section">
	<form action="<?= base_url('Pelanggan/cCheckout/pesan') ?>" method="POST">
		<input type="hidden" name="total" class="total">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-12">
					<div class="checkout-form">
						<h2 class="mb-3">Make Your Checkout Here</h2>
						<!-- Form -->
						<div class="row">
							<div class="col-lg-12 col-md-6 col-12">
								<div class="form-group">
									<label>Alamat Detail<span>*</span></label>
									<input type="text" class="form-control" name="alamat" placeholder="" value="<?= $this->session->userdata('alamat'); ?>" required="required">
								</div>
							</div>
							<div class="col-lg-12 col-md-6 col-12">
								<div class="form-group">
									<label>Kecamatan<span>*</span></label>
									<select name="kecamatan" class="form-control" id="kecamatan">
										<option>---Pilih Kecamatan---</option>
										<?php
										foreach ($kecamatan as $key => $value) {
										?>
											<option data-vongkir="Rp. <?= number_format($value->ongkir) ?>" data-vtotal="Rp. <?= number_format($this->cart->total() + $value->ongkir)  ?>" data-total="<?= $this->cart->total() + $value->ongkir ?>" data-ongkir="<?= $value->ongkir ?>" value="<?= $value->id_kecamatan ?>"><?= $value->nama_kecamatan ?></option>
										<?php
										}
										?>

									</select>
								</div>
							</div>


						</div>
						<!--/ End Form -->
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="order-details">
						<!-- Order Widget -->
						<div class="single-widget">
							<h2>CART TOTALS</h2>
							<div class="content">
								<ul>
									<li>Sub Total<span>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></span></li>
									<li>(+) Shipping<span class="vongkir"></span></li>
									<li class="last">Total<span class="vtotal"></span></li>
								</ul>
							</div>
						</div>
						<!--/ End Order Widget -->
						<!-- Order Widget -->

						<!--/ End Payment Method Widget -->
						<!-- Button Widget -->

						<div class="single-widget get-button">
							<div class="content">
								<div class="button">
									<button type="submit" class="btn">proceed to checkout</button>
								</div>
							</div>
						</div>


						<!--/ End Button Widget -->
					</div>
				</div>
			</div>
		</div>
	</form>
</section>
<!--/ End Checkout -->

<!-- Start Shop Services Area  -->
<section class="shop-services section home">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-rocket"></i>
					<h4>Free shiping</h4>
					<p></p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-reload"></i>
					<h4>Free Return</h4>
					<p></p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-lock"></i>
					<h4>Sucure Payment</h4>
					<p></p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-tag"></i>
					<h4>Best Peice</h4>
					<p></p>
				</div>
				<!-- End Single Service -->
			</div>
		</div>
	</div>
</section>
<!-- End Shop Services -->

<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
	<div class="container">
		<div class="inner-top">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Shop Newsletter -->
<!-- Start Footer Area -->