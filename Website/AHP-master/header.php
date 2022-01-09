<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Analitycal Hierarchy Process</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
</head>

<body>
	<header>
		<h1>SISTEM PENDUKUNG KEPUTUSAN DALAM MEMILIH HANDPHONE DENGAN METODE AHP
		</h1>
	</header>
	<div class="wrapper">
		<nav id="navigation" role="navigation">
			<img src="img/logo.png" style="width:240px;height:200px;">
			<ul>
				<li><a class="item" href="index.php">Home</a></li>
				<li>
					<a class="item" href="kriteria.php">Kriteria
						<div class="ui blue tiny label" style="float: right;"><?php echo getJumlahKriteria(); ?></div>
					</a>
				</li>
				<li>
					<a class="item" href="alternatif.php">Alternatif
						<div class="ui blue tiny label" style="float: right;"><?php echo getJumlahAlternatif(); ?></div>
					</a>
				</li>
				<li><a class="item" href="bobot_kriteria.php">Perbandingan Kriteria</a></li>
				<li><a class="item" href="bobot.php?c=1">Perbandingan Alternatif</a></li>
				<ul>
					<?php

					if (getJumlahKriteria() > 0) {
						for ($i = 0; $i <= (getJumlahKriteria() - 1); $i++) {
							echo "<li><a class='item' href='bobot.php?c=" . ($i + 1) . "'>" . getKriteriaNama($i) . "</a></li>";
						}
					}

					?>
				</ul>
				<li><a class="item" href="hasil.php">Hasil</a></li>
			</ul>
		</nav>