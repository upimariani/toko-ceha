<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Update New Diskon</h4>

		<div class="row">
			<!-- Basic -->
			<form action="<?= base_url('Admin/cDiskon/update/' . $diskon->id_diskon) ?>" method="POST">
				<div class="col-md-6">
					<div class="card mb-4">
						<h5 class="card-header">Data Diskon</h5>
						<div class="card-body demo-vertical-spacing demo-only-element">
							<div class="input-group">
								<select id="produk-diskon" name="produk" class="form-control">
									<option value="">Choose this product...</option>
									<?php
									foreach ($produk as $key => $value) {
									?>
										<option data-harga="<?= number_format($value->harga, 0) ?>" value="<?= $value->id_produk ?>" <?php if ($diskon->id_produk == $value->id_produk) {
																																			echo 'selected';
																																		} ?>><?= $value->nama_produk ?></option>
									<?php
									}
									?>
								</select>
							</div>
							<?= form_error('produk', '<div id="defaultFormControlHelp" class="form-text">', '</div>') ?>
							<div class="input-group">
								<span class="input-group-text">Rp.</span>
								<input type="text" value="<?= number_format($diskon->harga)  ?>" name="harga" class="harga form-control" readonly />
								<span class="input-group-text">.00</span>
							</div>
							<?= form_error('harga', '<div id="defaultFormControlHelp" class="form-text">', '</div>') ?>
							<hr>
							<div class="form-password-toggle">
								<label class="form-label" for="basic-default-password12">Nama Diskon</label>
								<div class="input-group">
									<input type="text" value="<?= $diskon->nama_diskon ?>" name="nama_diskon" class="form-control" />
								</div>
								<?= form_error('nama_diskon', '<div id="defaultFormControlHelp" class="form-text">', '</div>') ?>
							</div>
							<div class="input-group">
								<input type="number" value="<?= $diskon->besar_diskon ?>" name="diskon" class="form-control" placeholder="Besar Diskon" aria-label="Amount (to the nearest dollar)" />
								<span class="input-group-text">%</span>

							</div>
							<?= form_error('diskon', '<div id="defaultFormControlHelp" class="form-text">', '</div>') ?>
							<div class="form-password-toggle">
								<label class="form-label" for="basic-default-password12">Tanggal Selesai</label>
								<div class="input-group">
									<input type="date" value="<?= $diskon->tgl_selesai ?>" name="tgl" class="form-control" />
								</div>
								<?= form_error('tgl', '<div id="defaultFormControlHelp" class="form-text">', '</div>') ?>
							</div>
							<hr>
							<div class="input-group">
								<select name="level_member" class="form-control">
									<option value="">Choose level member...</option>
									<option value="1" <?php if ($diskon->member == '1') {
															echo 'selected';
														} ?>>Clasic</option>
									<option value="2" <?php if ($diskon->member == '2') {
															echo 'selected';
														} ?>>Silver</option>
									<option value="3" <?php if ($diskon->member == '3') {
															echo 'selected';
														} ?>>Gold</option>
								</select>
							</div>
							<?= form_error('level_member', '<div id="defaultFormControlHelp" class="form-text">', '</div>') ?>

							<button type="submit" class="btn btn-success mb-3"><i class='bx bx-save'></i>Update</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>