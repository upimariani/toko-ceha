<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Analisis /</span> Pelanggan</h4>
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
			<div class="col-lg-12">
				<div class="card">
					<h5 class="card-header">Variabel RFM</h5>
					<div class="table-responsive text-nowrap">
						<table class="myTable table ">
							<thead>
								<tr>
									<th>Id Konsumen </th>
									<th>Recency </th>
									<th>Frequency</th>
									<th>Monetary</th>
								</tr>
							</thead>
							<tbody class="table-border-bottom-0">
								<?php
								$var_recency = array();
								$var_frequency = array();
								$var_monetary = array();
								$date_in = date('Y-m-d');
								$no = 1;
								$variabel = $this->mAnalisis->variabel($date_in);
								foreach ($variabel['all'] as $key => $value) {
									$var_recency[] = $value->recency;
									$var_frequency[] = $value->frequency;
									$var_monetary[] = $value->monetary;
								?>
									<tr>
										<td><?= $value->id_konsumen ?></td>
										<td><?= $value->recency ?></td>
										<td><?= $value->frequency ?></td>
										<td>Rp. <?= number_format($value->monetary)  ?></td>
									</tr>

								<?php
									// echo '<br>' . $value->id_konsumen;
									// echo '<br>' . $no++ . 'Recency: ' . $value->recency;
									// echo '<br>Frequency: ' . $value->frequency;
									// echo '<br>Monetary: ' . $value->monetary;
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php

			//menentukan rumus euclidean Distance
			$e_recency = array();
			$e_frequecy = array();
			$e_monetary = array();
			foreach ($variabel['centroid'] as $key => $value) {
				$e_recency[] = $value->recency;
				$e_frequecy[] = $value->frequency;
				$e_monetary[] = $value->monetary;
			}

			echo '<br>';

			$i1_recency = 0;
			$i2_recency = 0;
			$i3_recency = 0;
			$i1_frequency = 0;
			$i2_frequency = 0;
			$i3_frequency = 0;
			$i1_monetary = 0;
			$i2_monetary = 0;
			$i3_monetary = 0;

			$jml_1 = 0;
			$jml_2 = 0;
			$jml_3 = 0;
			?>
			<div class="col-lg-12 mt-5">
				<div class="card">
					<h5 class="card-header">Informasi Clustering</h5>
					<div class="table-responsive text-nowrap">
						<table class="myTable table">
							<thead>
								<tr>
									<th>Centroid 1 </th>
									<th>Centorid 2 </th>
									<th>Centroid 3</th>
									<th>Nilai Min</th>
									<th>Cluster</th>
								</tr>
							</thead>
							<tbody class="table-border-bottom-0">
								<?php
								foreach ($variabel['all'] as $key => $value) {
									$centroid_next1 = round(sqrt((pow(($value->recency - $e_recency[0]), 2)) + (pow($value->frequency - $e_frequecy[0], 2)) + (pow($value->monetary - $e_monetary[0], 2))), 3);
									$centroid_next2 = round(sqrt((pow(($value->recency - $e_recency[1]), 2)) + (pow($value->frequency - $e_frequecy[1], 2)) + (pow($value->monetary - $e_monetary[1], 2))), 3);
									$centroid_next3 = round(sqrt((pow(($value->recency - $e_recency[2]), 2)) + (pow($value->frequency - $e_frequecy[2], 2)) + (pow($value->monetary - $e_monetary[2], 2))), 3);

									$min = min($centroid_next1, $centroid_next2, $centroid_next3);
									$nilai_terdekat[] = $min;
									// echo $min;
									// echo '<br>';
									if ($min == $centroid_next1) {
										$status = '1';
										$i1_recency += $value->recency;
										$i1_frequency += $value->frequency;
										$i1_monetary += $value->monetary;

										$jml_1 += 1;

										// echo $n++ . '|' . $value->recency;
										// echo $value->id_konsumen;
										// echo '<br>';
									} else if ($min == $centroid_next2) {
										$status = '2';
										$i2_recency += $value->recency;
										$i2_frequency += $value->frequency;
										$i2_monetary += $value->monetary;

										$jml_2 += 1;
										// echo $o++ . '|' . $value->recency;
										// echo $value->id_konsumen;
										// echo '<br>';
									} else if ($min == $centroid_next3) {
										$status = '3';
										$i3_recency += $value->recency;
										$i3_frequency += $value->frequency;
										$i3_monetary += $value->monetary;

										$jml_3 += 1;
										// echo $n++ . '|' . $value->recency;
										// echo $value->id_konsumen;
										// echo '<br>';
									}
								?>
									<tr>
										<td><?= $centroid_next1 ?></td>
										<td><?= $centroid_next2 ?></td>
										<td><?= $centroid_next3 ?></td>
										<td><?= $min ?></td>
										<td><?= $status ?></td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php

			//variabel baruu -----------------------------------------------------
			$var_bar_recency1 = round($i1_recency / $jml_1, 2);
			$var_bar_recency2 = round($i1_frequency / $jml_1, 2);
			$var_bar_recency3 = round($i1_monetary / $jml_1, 2);

			$var_bar_frequency1 = round($i2_recency / $jml_2, 2);
			$var_bar_frequency2 = round($i2_frequency / $jml_2, 2);
			$var_bar_frequency3 = round($i2_monetary / $jml_2, 2);

			$var_bar_monetary1 = round($i3_recency / $jml_3, 2);;
			$var_bar_monetary2 = round($i3_frequency / $jml_3, 2);;
			$var_bar_monetary3 = round($i3_monetary / $jml_3, 2);;



			// echo '---------------------------------------<br>';
			//nilai bcv
			for ($bcv = 0; $bcv < sizeof($e_recency); $bcv++) {
				// echo $e_recency[$bcv];
				// echo $e_frequecy[$bcv];
				// echo $e_monetary[$bcv];
				// echo '<br>';
			}
			$d1 = sqrt((pow($e_recency[0] - $e_recency[1], 2)) + (pow($e_frequecy[0] - $e_frequecy[1], 2)) + (pow($e_monetary[0] - $e_monetary[1], 2)));
			$d2 = sqrt((pow($e_recency[0] - $e_recency[2], 2)) + (pow($e_frequecy[0] - $e_frequecy[2], 2)) + (pow($e_monetary[0] - $e_monetary[2], 2)));
			$d3 = sqrt((pow($e_recency[1] - $e_recency[2], 2)) + (pow($e_frequecy[1] - $e_frequecy[2], 2)) + (pow($e_monetary[1] - $e_monetary[2], 2)));

			$bcv = round($d1 + $d2 + $d3);
			// echo 'Nilai Bcv: ' . $bcv;
			// echo '<br>';

			$nilai_wcv = 0;
			for ($kuadrat = 0; $kuadrat < sizeof($nilai_terdekat); $kuadrat++) {
				$nilai_wcv += round((pow($nilai_terdekat[$kuadrat], 2)));
			}
			// echo 'Nilai WCV ' . $nilai_wcv;
			echo '<br>';

			$ratio = round($bcv / $nilai_wcv);
			// echo 'Nilai Ratio:' . $ratio;

			//iterasi --------------------------------------------------------------

			foreach ($variabel['all'] as $key => $value) {
				$centroid_iterasi11 = round(sqrt((pow(($value->recency - $var_bar_recency1), 2)) + (pow($value->frequency - $var_bar_frequency1, 2)) + (pow($value->monetary - 	$var_bar_monetary1, 2))), 3);
				$centroid_iterasi12 = round(sqrt((pow(($value->recency - $var_bar_recency2), 2)) + (pow($value->frequency - $var_bar_frequency2, 2)) + (pow($value->monetary - 	$var_bar_monetary2, 2))), 3);
				$centroid_iterasi13 = round(sqrt((pow(($value->recency - $var_bar_recency3), 2)) + (pow($value->frequency - $var_bar_frequency3, 2)) + (pow($value->monetary - 	$var_bar_monetary3, 2))), 3);


				$min1 = min($centroid_iterasi11, $centroid_iterasi12, $centroid_iterasi13);
				$nilai_terdekat1[] = $min1;
				// echo $min;
				// echo '<br>';
				if ($min1 == $centroid_iterasi11) {
					$status1 = '1';
				} else if ($min1 == $centroid_iterasi12) {
					$status1 = '2';
				} else if ($min1 == $centroid_iterasi13) {
					$status1 = '3';
				}

				// echo  $status1;
			}
			?>


		</div>
	</div>
</div>
</div>


<!--/ Basic Bootstrap Table -->
</div>
<!-- / Content -->