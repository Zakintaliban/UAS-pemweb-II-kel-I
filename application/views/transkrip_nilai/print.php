<html>

<head>
	<meta charset="UTF-8" />
	<title>Transkrip</title>
	<style type="text/css">
		@media print {
			@page {
				size: legal potrait;
				margin: 1cm;
				margin-top: 0;
        		margin-bottom: 0;
			}

			h1 {
				font-size: 16pt;
			}
		}

		@font-face {
			font-family: "Cambria";
			src: url("../../libraries/Cambria.ttf") format("truetype");
		}

		* {
			font-family: Cambria, Georgia, serif;
			margin: 0;
			padding: 0;
		}

		th {
			vertical-align: top;
		}

		th {
			text-align: center;
		}

		.font-normal th {
			font-weight: normal;
			vertical-align: middle;
		}

		.header td,
		.header th {
			font-size: 16px;
		}

		.mid td,
		.mid th {
			font-size: 14px;
		}

		.center td,
		.center th {
			text-align: center;
			vertical-align: middle;
		}

		table.border {
			border-collapse: collapse;
		}

		table.border td {
			border-right: solid 2px black;
			border-left: solid 2px black;
			border-top: 0;
			border-bottom: 0;
		}

		table.border td .ujian {
			border-top: 2px;
			border-bottom: 2px;
		}

		table.border th {
			border: 2px solid black;
		}

		tr.noborder td,
		tr.noborder th {
			border: none;
		}

		hr {
			margin: 10px auto;
			border: 1px solid black;
			border-width: 1px 0 0 0;
		}

		.text-center {
			text-align: center;
		}

		.btn-flat {
			-webkit-border-radius: 0;
			-moz-border-radius: 0;
			border-radius: 0;
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			box-shadow: none;
			border-width: 1px;
		}

		.btn.btn-primary {
			background-color: #0052a2;
			border-color: #008d4c;
		}

		.btn.btn-primary:hover,
		.btn.btn-primary:active,
		.btn.btn-primary.hover {
			background-color: #008d4c;
		}

		.bg-info {
			background-color: #d9edf7;
		}

		.bg-success {
			background-color: #dff0d8;
		}

		.title {
			font-size: 14px;
			font-weight: bold;
		}

		.padded th,
		.padded td {
			padding: 4px;
		}

		@media print {

			.col-md-1,
			.col-md-2,
			.col-md-3,
			.col-md-4,
			.col-md-5,
			.col-md-6,
			.col-md-7,
			.col-md-8,
			.col-md-9,
			.col-md-10,
			.col-md-11,
			.col-md-12 {
				float: left;
			}

			.col-md-12 {
				width: 100%;
			}

			.col-md-11 {
				width: 91.66666666666666%;
			}

			.col-md-10 {
				width: 83.33333333333334%;
			}

			.col-md-9 {
				width: 75%;
			}

			.col-md-8 {
				width: 66.66666666666666%;
			}

			.col-md-7 {
				width: 58.333333333333336%;
			}

			.col-md-6 {
				width: 50%;
			}

			.col-md-5 {
				width: 41.66666666666667%;
			}

			.col-md-4 {
				width: 33.33333333333333%;
			}

			.col-md-3 {
				width: 25%;
			}

			.col-md-2 {
				width: 16.666666666666664%;
			}

			.col-md-1 {
				width: 8.333333333333332%;
			}
		}
	</style>
</head>

<body>
	<div align="center">
		<div style="width: 900px">
			<style>
				@media print {
					table {
						break-after: auto;
					}

					tr {
						break-inside: avoid;
						break-after: auto;
					}

					td {
						break-inside: avoid;
						break-after: auto;
					}

					thead {
						display: table-header-group;
					}

					tfoot {
						display: table-footer-group;
					}
				}
			</style>

			<?php
			$transkrip_data = array();

			foreach ($nilai as $nilai_item) {
				$matakuliahId = $nilai_item->Matakuliah;

				$matching_matakuliah = null;
				foreach ($matakuliah as $matakuliah_item) {
					if ($matakuliah_item->ID === $matakuliahId) {
						$matching_matakuliah = $matakuliah_item;
						break;
					}
				}

				if ($matching_matakuliah) {
					$combined_object = (object) [
						"Kode" => $matching_matakuliah->Kode,
						"Matakuliah" => $matching_matakuliah->Matakuliah,
						"SKS" => $matching_matakuliah->SKS,
						"Nilai_Angka" => $nilai_item->Nilai_Angka,
						"Nilai_Huruf" => $nilai_item->Nilai_Huruf,
						"Semester" => $matching_matakuliah->Semester
					];
					$transkrip_data[] = $combined_object;
				}
			}


			$nilai_transkrip = array();

			foreach ($transkrip_data as $item) {
				$semester = $item->Semester;

				if (!array_key_exists($semester, $nilai_transkrip)) {
					$nilai_transkrip[$semester] = array();
				}

				$nilai_transkrip[$semester][] = $item;
			}

			?>
			<div>
				<table class="data" style="margin-bottom: 2rem" align="left">
					<tbody>
						<tr>
							<td>Laporan Ijazah Nomor</td>
							<td>:</td>
							<td>&nbsp; <?php echo $ijazah->Nomor_Ijazah; ?></td>
						</tr>
					</tbody>
				</table>
				<br /><br /><br />
				<b style="
							font-size: 20pt;
							text-decoration: underline;
							font-weight: bold;
						">TRANSKRIP NILAI AKADEMIK</b><br />
				<br /><br />
				<table class="data" width="70%" align="left" style="margin-bottom: 1rem;">
					<tbody>
						<tr>
							<td>NAMA</td>
							<td>:</td>
							<td>&nbsp;<?php echo $taruna->Nama; ?></td>
						</tr>
						<tr>
							<td>NOMOR TARUNA</td>
							<td>:</td>
							<td>&nbsp;<?php echo $taruna->Nomor_Taruna; ?></td>
						</tr>
						<tr>
							<td>TEMPAT / TANGGAL LAHIR</td>
							<td>:</td>
							<td>&nbsp;<?php echo $kota->Nama; ?>, <?php echo convert_date(date($taruna->Tanggal_Lahir)); ?> </td>
						</tr>
						<tr>
							<td>JURUSAN / PROGRAM STUDI</td>
							<td>:</td>
							<td>&nbsp;<?php echo $program_studi->Program_Pendidikan; ?>, <?php echo $program_studi->Nama; ?></td>
						</tr>
						<tr>
							<td>STATUS</td>
							<td>:</td>
							<td>&nbsp;TERAKREDITASI "<?php echo strtoupper($program_studi->Akreditasi); ?>"</td>
						</tr>
						<tr>
							<td>TANGGAL YUDISIUM</td>
							<td>:</td>
							<td>&nbsp;<?php echo convert_date(date($ijazah->Tanggal_Yudisium)); ?></td>
						</tr>
					</tbody>
				</table>

				<table class="tb_data border" border="2" width="100%" style="column-span: all;border-top: 6px double black;border-bottom: 6px double black;">
					<thead>
						<tr>
							<th width="30">NO</th>
							<th width="70">KODE</th>
							<th>MATA KULIAH</th>
							<th width="40">SKS</th>
							<th width="60">NILAI</th>
						</tr>
					</thead>
					<tbody>

						<?php
						$sks = 0;
						$ipk = 0;
						$total_matkul = 0;
						$counter = 1;
						$ujian_akhir = [];
						?>

						<?php foreach ($nilai_transkrip as $nilai_data => $value_all) : ?>

							<?php if ($nilai_data === 'UJIAN AKHIR PROGRAM STUDI') {
								$ujian_akhir = $value_all;
								continue;
							}  ?>

							<tr>
								<td align="center"></td>
								<td align="center"></td>
								<td align="center"><b><?php echo $nilai_data ?></b></td>
								<td align="center"></td>
								<td align="center"></td>
							</tr>
							<?php foreach ($value_all as $value) : ?>
								<?php $sks = $sks + $value->SKS;
								$ipk = $ipk + $value->Nilai_Angka; ?>
								<tr>
									<td align="center"><?php echo $counter ?></td>
									<td align="center"><?php echo $value->Kode ?></td>
									<td style=" white-space: nowrap; padding: 2px;"><?php echo $value->Matakuliah ?></td>
									<td align="center"><?php echo $value->SKS ?></td>
									<td align="center"><?php echo $value->Nilai_Huruf ?></td>
								</tr>
							<?php $counter++;
								$total_matkul++;
							endforeach; ?>
						<?php endforeach; ?>

						<?php foreach ($ujian_akhir as $item) : ?>
							<tr>
								<td align="center"><?php echo $counter ?></td>
								<td style="
										border-bottom: solid 2px black;
										border-top: solid 2px black;
										white-space: nowrap; padding: 2px;
									" align="left" colspan="3">
									<b>UJIAN AKHIR PROGRAM STUDI:</b><br><br> <?php echo $item->Matakuliah ?><br><br>
								</td>
								<td align="center" style="
										border-top: solid 2px black;
										white-space: nowrap; padding: 2px;"><?php echo $item->Nilai_Huruf ?></td>
							</tr>
						<?php endforeach; ?>
						<tr>
							<td align="center"><?php echo $counter + 1 ?></td>
							<td style="
										border-bottom: solid 2px black;
										border-top: solid 2px black;
										white-space: nowrap; padding: 2px;" colspan="4">
								<b>JUDUL KERTAS KERJA WAJIB</b><br><br>
								<center><i>
										<?php echo $ijazah->Judul_KKW; ?><br><br>
									</i></center>
							</td>
						</tr>
						<tr>
							<td align="center"><?php echo $counter + 2 ?></td>
							<td style="
										border-bottom: solid 2px black;
										border-top: solid 2px black;
										white-space: nowrap; padding: 2px;
									" align="left" colspan="4">
								<br>
								JUMLAH SKS : <?php echo $sks; ?> <br><br>
								IP KUMULATIF : <?php $ipk_final = $ipk / $total_matkul;
												echo $ipk_final; ?> <br><br>
								PREDIKAT : <?php
											if ($ipk_final >= 3.5) {
												echo "DENGAN PUJIAN";
											} else if ($ipk_final >= 3.0 && $ipk_final <= 3.49) {
												echo "SANGAT MEMUASKAN";
											} else if ($ipk_final >= 2.5 && $ipk_final <= 2.99) {
												echo "MEMUASKAN";
											} else {
												echo "CUKUP";
											}
											?><br><br>
							</td>
						</tr>
					</tbody>
				</table>
				<br />
				<p align="left">KETERANGAN : A=4;AB=3,50;B=3;BC=2,50;C=2;D=1;E=0</p>

				<br />
				<table width="100%">
					<tbody>
						<tr>
							<td align="center">
								<table align="left" border="0">
									<tbody>
										<tr>
											<td style="text-align: center">&nbsp;</td>
											<td style="text-align: center">&nbsp;</td>
											<td style="text-align: center">&nbsp;</td>
											<td style="text-align: center">&nbsp;</td>
										</tr>
										<tr>
											<td align="left" style="padding-left: 5px" width="">
												<br />
											</td>
											<td align="left" style="padding-left: 5px" width="">
												<br />
											</td>
											<td align="left" style="padding-left: 5px" width="">
												<br />
											</td>
											<td align="center" style="padding-left: 5px" width="">
												<br /><br />WAKIL DIREKTUR I<br />Politeknik Merdeka<br />
												<div style="width: 3cm; height: 1.5cm"></div>
												<br /><?php echo $direktur->Nama; ?><br /><?php echo $direktur->NIP; ?>
												<br />
												<br />
											</td>
										</tr>
										<tr></tr>
									</tbody>
								</table>

								<img style="height: 6cm; width: 4cm; position:relative; margin-top: 1cm; border: 3px solid #000000;" src="<?php echo $foto ?>">

								<table align="right" border="0">
									<tbody>
										<tr>
											<td style="text-align: center">&nbsp;</td>
											<td style="text-align: center">&nbsp;</td>
											<td style="text-align: center">&nbsp;</td>
											<td style="text-align: center">&nbsp;</td>
										</tr>
										<tr>
											<td align="left" style="padding-left: 5px" width="">
												<br />
											</td>
											<td align="left" style="padding-left: 5px" width="">
												<br />
											</td>
											<td align="left" style="padding-left: 5px" width="">
												<br />
											</td>
											<td align="center" style="padding-left: 5px" width="">
												Jakarta, <?php echo convert_date(date("Y-m-d")); ?><br /><br />DIREKTUR<br />Politeknik Merdeka<br />
												<div style="width: 3cm; height: 1.5cm"></div>
												<br /><?php echo $wakil_direktur->Nama; ?><br /><?php echo $wakil_direktur->NIP; ?>
												<br />
												<br />
											</td>
										</tr>
										<tr></tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
<script>
	window.onload = function() {
		window.print();
	};
</script>

</html>
