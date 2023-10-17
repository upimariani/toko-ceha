<!-- Slider Area -->
<!-- Slider Area -->
<section class="hero-slider">
	<!-- Single Slider -->
	<div class="single">
		<img src="<?= base_url('asset/CEHA.png') ?>" ;>

	</div>
	</div>
	<!--/ End Single Slider -->
</section>
<!--/ End Slider Area -->



<!-- Start Product Area -->
<div class="product-area section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Produk</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="product-info">

					<!-- Start Single Tab -->
					<div class="tab-pane fade show active" id="man" role="tabpanel">
						<div class="tab-single">
							<div class="row">
								<?php
								foreach ($menu as $key => $value) {
								?>

									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<form action="<?= base_url('Pelanggan/cCart/add_cart') ?>" method="POST">
											<input type="hidden" name="name" value="<?= $value->nama_produk ?>">
											<input type="hidden" name="id" value="<?= $value->id_produk ?>">

											<input type="hidden" name="stok" value="<?= $value->stok ?>">
											<input type="hidden" name="picture" value="<?= $value->gambar ?>">
											<input type="hidden" name="qty" value="1">
											<input type="hidden" name="diskon" value="<?= $value->besar_diskon ?>">
											<div class="single-product">
												<div class="product-img">
													<a>
														<img class="default-img" style="width: 350px; height: 350px;" src="<?= base_url('asset/foto-produk/' . $value->gambar) ?>" alt="#">
													</a>
												</div>
												<div class="product-content">
													<h3><a href="#"><?= $value->nama_produk ?></a></h3>
													<div class="product-price">
														<?php
														if ($this->session->userdata('member_pelanggan') == $value->member) {
														?>
															<span>Rp. <?= number_format($value->harga - ($value->harga * $value->besar_diskon / 100)) ?></span>
															<del>Rp. <?= number_format($value->harga) ?></del>
															<input type="hidden" name="price" value="<?= $value->harga - ($value->harga * $value->besar_diskon / 100) ?>">
														<?php
														} else {
														?>
															<span>Rp. <?= number_format($value->harga) ?></span>
															<input type="hidden" name="price" value="<?= $value->harga ?>">
														<?php
														}
														?>

													</div>
													<button type="submit" class="btn mt-3">Add To Cart</button>
												</div>
											</div>
										</form>
									</div>
								<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Product Area -->