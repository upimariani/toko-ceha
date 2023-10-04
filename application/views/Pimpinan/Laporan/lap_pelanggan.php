<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Pelanggan</h4>
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
		<?php
		$pelanggan_clasic = $this->db->query("SELECT COUNT(id_konsumen) as jml_clasic FROM `konsumen` WHERE member='1'")->row();
		$pelanggan_silver = $this->db->query("SELECT COUNT(id_konsumen) as jml_silver FROM `konsumen` WHERE member='2'")->row();
		$pelanggan_gold = $this->db->query("SELECT COUNT(id_konsumen) as jml_gold FROM `konsumen` WHERE member='3'")->row();
		?>
		<!-- Basic Bootstrap Table -->
		<div class="row">
			<div class="col-lg-12 col-md-4 order-1">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-6 mb-4">
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-start justify-content-between">
									<div class="avatar flex-shrink-0">
										<img src="<?= base_url('asset/sneat/') ?>assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
									</div>

								</div>
								<span class="fw-semibold d-block mb-1">Pelanggan Clasic</span>
								<h3 class="card-title mb-2"><?= $pelanggan_clasic->jml_clasic ?></h3>

							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-6 mb-4">
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-start justify-content-between">
									<div class="avatar flex-shrink-0">
										<img src="<?= base_url('asset/sneat/') ?>assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
									</div>

								</div>
								<span class="fw-semibold d-block mb-1">Pelanggan Silver</span>
								<h3 class="card-title text-nowrap mb-1"><?= $pelanggan_silver->jml_silver ?></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-6 mb-4">
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-start justify-content-between">
									<div class="avatar flex-shrink-0">
										<img src="<?= base_url('asset/sneat/') ?>assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
									</div>

								</div>
								<span class="fw-semibold d-block mb-1">Pelanggan Gold</span>
								<h3 class="card-title text-nowrap mb-1"><?= $pelanggan_gold->jml_gold ?></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">

			<div class="col-lg-12">
				<div class="card">
					<h5 class="card-header">Informasi Pelanggan</h5>
					<a href="<?= base_url('Pimpinan/cLaporan_analisis/cetak') ?>" class="btn btn-success">Cetak Laporan</a>
					<div class="table-responsive text-nowrap">
						<table id="myTable" class="table ">
							<thead>
								<tr>
									<th>Nama Pelanggan </th>
									<th>No Telepon</th>
									<th>Level Member</th>
								</tr>
							</thead>
							<tbody class="table-border-bottom-0">
								<?php
								foreach ($lap as $key => $value) {
								?>
									<tr>
										<td><?= $value->nama_konsumen ?></td>
										<td><?= $value->no_hp_konsumen ?></td>
										<td><?php
											if ($value->member == '3') {
												echo ' <span class="badge bg-success">Gold</span>';
											} else if ($value->member == '2') {
												echo '<span class="badge bg-warning">Silver</span>';
											} else {
												echo '<span class="badge bg-info">Clasic</span>';
											}
											?></td>

									</tr>
									<!-- Modal -->


								<?php
								}
								?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>


		<!--/ Basic Bootstrap Table -->
	</div>
	<!-- / Content -->