<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<div class="row">
			<div class="col-lg-12 mb-4 order-0">
				<div class="card">
					<div class="d-flex align-items-end row">
						<div class="col-sm-7">
							<div class="card-body">
								<h5 class="card-title text-primary">Selamat Datang Admin! 🎉</h5>
								<p class="mb-4">

								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
				<div class="row">

					<!-- </div>
    <div class="row"> -->

				</div>
			</div>
		</div>
		<div class="row">
			<!-- Order Statistics -->
			<div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
				<div class="card h-100">
					<div class="card-header d-flex align-items-center justify-content-between pb-0">
						<div class="card-title mb-0">
							<h5 class="m-0 me-2">Informasi Stok Produk</h5>
						</div>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center mb-3">
						</div>
						<ul class="p-0 m-0">
							<?php
							foreach ($stok as $key => $value) {
							?>
								<li class="d-flex mb-4 pb-1">
									<div class="avatar flex-shrink-0 me-3">
										<span class="avatar-initial rounded bg-label-<?php if ($value->stok < 5) {
																							echo 'danger';
																						} else {
																							echo 'primary';
																						} ?>"></span>
									</div>
									<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
										<div class="me-2">
											<h6 class="mb-0"><?= $value->nama_produk ?></h6>
											<small class="text-muted">Rp. <?= number_format($value->harga) ?></small>
										</div>
										<div class="user-progress">
											<small class="fw-semibold <?php if ($value->stok < 5) {
																			echo 'text-danger';
																		} else {
																			echo 'text-primary';
																		} ?>"><?= $value->stok ?> <?= $value->keterangan ?></small>
										</div>
									</div>
								</li>
							<?php
							}
							?>
						</ul>
					</div>
				</div>
			</div>
			<!--/ Order Statistics -->
			<div class="col-md-6 col-lg-8 col-xl-8 order-0 mb-4">
				<div class="card h-100">
					<div class="card-header d-flex align-items-center justify-content-between pb-0">
						<div class="card-title mb-0">
							<h5 class="m-0 me-2">Grafik Transaksi</h5>
						</div>
					</div>
					<div class="card-body">
						<canvas id="transaksi" height="100"></canvas>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- / Content -->