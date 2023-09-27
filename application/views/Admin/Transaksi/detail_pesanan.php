<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">

		<h1 class="h3 mb-3">Invoice</h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body m-sm-3 m-md-5">


						<div class="row">
							<div class="col-md-6">
								<div class="text-muted">Payment No.</div>
								<strong><?= $detail['transaksi']->id_transaksi ?></strong>
							</div>
							<div class="col-md-6 text-md-right">
								<div class="text-muted">Payment Date</div>
								<strong><?= $detail['transaksi']->tgl_transaksi ?></strong>
							</div>
						</div>

						<hr class="my-4" />

						<div class="row mb-4">
							<div class="col-md-6">
								<div class="text-muted">Client</div>
								<strong>
									<?= $detail['transaksi']->nama_konsumen ?>
								</strong>
								<p>
									Level Member <?php
													if ($detail['transaksi']->member == '0') {
														echo '<span class="badge bg-warning">Non Member</span>';
													} else if ($detail['transaksi']->member == '1') {
														echo '<span class="badge bg-success">Member</span>';
													}
													?>

								</p>
							</div>
							<div class="col-md-6 text-md-right">
								<div class="text-muted">Alamat Pengiriman</div>
								<strong>
									<?= $detail['transaksi']->alamat_konsumen ?> Kec. <?= $detail['transaksi']->nama_kecamatan ?>
								</strong>

							</div>
						</div>

						<table class="table table-sm">
							<thead>
								<tr>
									<th>Quantity</th>
									<th>Nama Produk</th>
									<th>Harga</th>
									<th>Diskon</th>
									<th class="text-right">Amount</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($detail['pesanan'] as $key => $value) {
								?>
									<tr>
										<td><?= $value->quantity ?></td>
										<td><?= $value->nama_produk ?></td>
										<td>Rp. <?= number_format($value->harga, 0)  ?></td>
										<td><?php if ($value->besar_diskon == null) {
												echo '0';
											} else {
												echo $value->besar_diskon;
											}  ?>%</td>
										<td class="text-right">Rp.<?= number_format(($value->harga - (($value->besar_diskon / 100) * $value->harga)) *  $value->quantity) ?></td>
									</tr>
								<?php
								}
								?>

								<tr>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Subtotal </th>
									<th class="text-right">Rp. <?= number_format($detail['transaksi']->total_bayar)  ?></th>
								</tr>
								<tr>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Shipping </th>
									<th class="text-right">Rp. <?= number_format($detail['transaksi']->ongkir)  ?></th>
								</tr>
								<tr>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Total </th>
									<th class="text-right">Rp. <?= number_format($detail['transaksi']->total_bayar + $detail['transaksi']->ongkir)  ?></th>
								</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>

	</div>