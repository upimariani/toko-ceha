<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span>Update Data Ongkos Kirim per Kecamatan</h4>
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
				<div class="card mb-4">
					<h5 class="card-header">Data Kecamatan</h5>
					<div class="card-body demo-vertical-spacing demo-only-element">
						<form action="<?= base_url('Admin/cOngkir/update/' . $kecamatan->id_kecamatan) ?>" method="POST">
							<div class="form-password-toggle">
								<label class="form-label" for="basic-default-password12">Nama Kecamatan</label>
								<div class="input-group">
									<input type="text" value="<?= $kecamatan->nama_kecamatan ?>" name="nama" class="form-control" />
								</div>
								<?= form_error('nama', '<div id="defaultFormControlHelp" class="form-text">', '</div>') ?>
							</div>
							<div class="form-password-toggle">
								<label class="form-label" for="basic-default-password12">Biaya Ongkos Kirim</label>
								<div class="input-group">
									<input type="text" value="<?= $kecamatan->ongkir ?>" name="ongkir" class="form-control" />
								</div>
								<?= form_error('ongkir', '<div id="defaultFormControlHelp" class="form-text">', '</div>') ?>
							</div>
							<button type="submit" class="btn btn-success mt-3"><i class='bx bx-save'></i>Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>


		<!--/ Basic Bootstrap Table -->
	</div>
	<!-- / Content -->