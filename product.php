<?php
session_start();
include_once ("header.php");
include_once ("navbar.php");
include_once ("sidebar.php");
?>

<!-- #Produk -->
<div class="card mb-3">
	<div class="card-header" style="font-weight: bold; font-size: 25px ;text-align: center;background-color: beige">
		TENDA KERUCUT MINI LEGO
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-xl-4 col-sm-6 mb-3" style="align-items: center;">
				<img id="gbr" src="la.jpg" alt="Norway" style="width:100%; border-color: burlywood">
				<div class="row" style="margin: auto;">
					<div class="col-xl-3 col-sm-6 mb-3" style="padding-left: 0px; padding-right: 0px;padding-top: 0px;padding-bottom: 0px; border-style: solid; border-color: burlywood; cursor: pointer;">
						<img id="gbr" src="la.jpg" alt="Norway" style="width:100%; margin: auto;">
					</div>
					<div class="col-xl-3 col-sm-6 mb-3" style="padding-left: 0px; padding-right: 0px;padding-top: 0px;padding-bottom: 0px; border-style: solid; border-color: burlywood; cursor: pointer;">
						<img id="gbr" src="ny.jpg" alt="Norway" style="width:100%; margin: auto;">
					</div>
					<div class="col-xl-3 col-sm-6 mb-3" style="padding-left: 0px; padding-right: 0px;padding-top: 0px;padding-bottom: 0px; border-style: solid; border-color: burlywood; cursor: pointer;">
						<img id="gbr" src="chicago.jpg" alt="Norway" style="width:100%; margin: auto;">
					</div>
					<div class="col-xl-3 col-sm-6 mb-3" style="padding-left: 0px; padding-right: 0px;padding-top: 0px;padding-bottom: 0px; border-style: solid; border-color: burlywood; cursor: pointer;">
						<img id="gbr" src="ny.jpg" alt="Norway" style="width:100%; margin: auto;">
					</div>
					<div class="col-xl-3 col-sm-6 mb-3" style="padding-left: 0px; padding-right: 0px;padding-top: 0px;padding-bottom: 0px; border-style: solid; border-color: burlywood; cursor: pointer;">
						<img id="gbr" src="chicago.jpg" alt="Norway" style="width:100%; margin: auto;">
					</div>
				</div>
			</div>
			<div class="col-xl-8 col-sm-6 mb-3" style="align-items: center;">
				<div class="card mb-3">
					<div class="card-header" style="font-weight: bold; font-size: 25px ;text-align: center;background-color: violet">
						Rp.150.000,00.
					</div>
					<div class="card-body">
						<form action="#" method="post">
							<div class="form-group">
								<div class="form-label-group">
									<input type="number" min="1" max="100" step="1" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah" required="required" value="1" >
									<label for="jumlah">Jumlah</label>
								</div>
							</div>
							<div class="form-group">
								<div class="form-label-group">
									<input type="text" id="catatan" name="catatan" class="form-control" placeholder="Catatan" required="required">
									<label for="catatan">Catatan</label>
								</div>
							</div>
							<input type="submit" id="submit" name="pesan" class="btn btn-primary btn-block" value="Tambah Ke Keranjang">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="card mb-3">
			<header class="card mb-3">
				<h3>Deskripsi Barang:</h3>
			</header>
			<p>Tenda cantik di lengkapi dengan rangka elastis bermotif lego. Membuat liburan anda menjadi lebih menyenangkan. Loreaowoeakeakeae oawkeoakwe aowkeoakeaka aokwokakwkao aowkoeawkekawka aw okekaw oekowk ao wo ekaw koak o oawoke </p>
		</div>

		<div class="card mb-3">
			<header class="card mb-3">
				<h3>Spesifikasi Barang:</h3>
			</header>
			<p>Ukuran : 10mx5m</p>
			<p>Warna : Putih, Hitam, Coklat</p>
			<p>Bahan : Nilon</p>
		</div>

		<footer class="w3-container w3-blue">
			<h5>Footer</h5>
		</footer>

	</div>
	<!-- /#card body -->
</div>
<!-- /#Produk -->
<?php 
include_once ("footer.php");
include_once ("defaultfunction.php");
?>