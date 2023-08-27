<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Create New Product</h4>
		<a href="<?= base_url('Admin/cProduk') ?>" class="btn btn-danger mb-3"><i class='bx bx-arrow-back'></i> Kembali</a>
		<div class="row">
			<!-- Basic -->
			<?php echo form_open_multipart('Admin/cProduk/update/' . $produk->id_produk); ?>
			<div class="col-md-6">
				<div class="card mb-4">
					<h5 class="card-header">Data Produk</h5>
					<div class="card-body demo-vertical-spacing demo-only-element">
						<div class="form-password-toggle">
							<label class="form-label" for="basic-default-password12">Nama Produk</label>
							<div class="input-group">
								<input type="text" name="nama" value="<?= $produk->nama_produk ?>" class="form-control" />
							</div>
							<?= form_error('nama', '<div id="defaultFormControlHelp" class="form-text">', '</div>') ?>
						</div>

						<div class="input-group">
							<span class="input-group-text">Deskripsi</span>
							<textarea class="form-control" name="deskripsi" aria-label="With textarea" placeholder="Write..."><?= $produk->deskripsi ?></textarea>
						</div>
						<?= form_error('deskripsi', '<div id="defaultFormControlHelp" class="form-text">', '</div>') ?>
						<div class="form-password-toggle">
							<label class="form-label" for="basic-default-password12">Keterangan</label>
							<div class="input-group">
								<input value="<?= $produk->keterangan ?>" type="text" name="keterangan" class="form-control" />

							</div>
							<?= form_error('keterangan', '<div id="defaultFormControlHelp" class="form-text">', '</div>') ?>
						</div>

						<div class="input-group">
							<span class="input-group-text">$</span>
							<input type="number" name="harga" value="<?= $produk->harga ?>" class="form-control" placeholder="Harga" />
							<span class="input-group-text">.00</span>
						</div>
						<?= form_error('harga', '<div id="defaultFormControlHelp" class="form-text">', '</div>') ?>
						<div class="form-password-toggle">
							<label class="form-label" for="basic-default-password12">Stok Produk</label>
							<div class="input-group">
								<input type="text" name="stok" value="<?= $produk->stok ?>" class="form-control" />

							</div>
							<?= form_error('stok', '<div id="defaultFormControlHelp" class="form-text">', '</div>') ?>
						</div>
						<div class="form-password-toggle">

							<label class="form-label" for="basic-default-password12">Gambar Produk</label><br>
							<img style="width: 150px;" src="<?= base_url('asset/foto-produk/' . $produk->gambar) ?>">
							<div class="input-group">
								<input type="file" name="gambar" class="form-control" />
							</div>
						</div>
						<button type="submit" class="btn btn-success mb-3"><i class='bx bx-save'></i>Save</button>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>