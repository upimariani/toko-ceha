<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Data Ongkos Kirim per Kecamatan</h4>
		<?php
		if ($this->session->userdata('success')) {
		?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<?= $this->session->userdata('success') ?>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		<?php
		}
		?>
		<!-- Basic Bootstrap Table -->

		<div class="row">
			<div class="col-lg-6">
				<div class="card">
					<h5 class="card-header">Informasi Produk</h5>
					<div class="table-responsive text-nowrap">
						<table id="myTable" class="table ">
							<thead>
								<tr>
									<th>No </th>
									<th>Nama Kecamatan</th>
									<th>Ongkir</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody class="table-border-bottom-0">
								<?php
								$no = 1;
								foreach ($kecamatan as $key => $value) {
								?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $value->nama_kecamatan ?></td>
										<td>Rp. <?= number_format($value->ongkir)  ?></td>
										<td> <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
												<i class="bx bx-dots-vertical-rounded"></i>
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="<?= base_url('Admin/cOngkir/update/' . $value->id_kecamatan) ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
												<a class="dropdown-item" href="<?= base_url('Admin/cOngkir/delete/' . $value->id_kecamatan) ?>"><i class="bx bx-trash me-1"></i> Delete</a>
											</div>
										</td>
									</tr>
								<?php
								}
								?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card mb-4">
					<h5 class="card-header">Data Kecamatan</h5>
					<div class="card-body demo-vertical-spacing demo-only-element">
						<form action="<?= base_url('Admin/cOngkir') ?>" method="POST">
							<div class="form-password-toggle">
								<label class="form-label" for="basic-default-password12">Nama Kecamatan</label>
								<div class="input-group">
									<input type="text" name="nama" class="form-control" />
								</div>
								<?= form_error('nama', '<div id="defaultFormControlHelp" class="form-text">', '</div>') ?>
							</div>
							<div class="form-password-toggle">
								<label class="form-label" for="basic-default-password12">Biaya Ongkos Kirim</label>
								<div class="input-group">
									<input type="number" name="ongkir" class="form-control" />
								</div>
								<?= form_error('ongkir', '<div id="defaultFormControlHelp" class="form-text">', '</div>') ?>
							</div>
							<button type="submit" class="btn btn-success mt-3"><i class='bx bx-save'></i>Save</button>
						</form>
					</div>
				</div>
			</div>
		</div>


		<!--/ Basic Bootstrap Table -->
	</div>
	<!-- / Content -->