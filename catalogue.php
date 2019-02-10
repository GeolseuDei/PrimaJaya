<?php
session_start();
include_once ("header.php");
include_once ("navbar.php");
include_once ("sidebar.php");
?>
<!-- #Category 1 -->
<div class="card mb-3">
	<div class="card-header" style="font-weight: bold; font-size: 25px ;background-color: beige">
		TENDA
	</div>
	<div class="card-body">
		<div class="row">			
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="w3-container">
					<form onclick="formSubmit(this.id)" id="1" action="product.php" method="GET">
						<h6 style="font-weight: bolder">Tenda Kerucut Mini Lego</h6>
						<div class="w3-card-4">
							<img src="la.jpg" alt="Norway" style="width:100%">
							<div class="w3-container w3-center">
								<p>Tenda Berbentuk Kerucut untuk Promosi</p>
							</div>
							<footer class="w3-container w3-red">
								<h5>Rp.150.000</h5>
							</footer>
						</div>
						<input type="hidden" name="idBarang" value="1">
					</form>
				</div>
			</div>
			
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="w3-container">
					<form onclick="formSubmit(this.id)" id="2" action="product.php" method="GET">
						<h6 style="font-weight: bolder">Tenda Kerucut Mini Lego</h6>
						<div class="w3-card-4">
							<img src="la.jpg" alt="Norway" style="width:100%">
							<div class="w3-container w3-center">
								<p>Tenda Berbentuk Kerucut untuk Promosi</p>
							</div>
							<footer class="w3-container w3-red">
								<h5>Rp.150.000</h5>
							</footer>
						</div>
						<input type="hidden" name="idBarang" value="2">
					</form>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="w3-container">
					<h6 style="font-weight: bolder">Tenda Kerucut Mini Lego</h6>
					<div class="w3-card-4">
						<img src="la.jpg" alt="Norway" style="width:100%">
						<div class="w3-container w3-center">
							<p>Tenda Berbentuk Kerucut untuk Promosi</p>
						</div>
						<footer class="w3-container w3-red">
							<h5>Rp.150.000</h5>
						</footer>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="w3-container">
					<h6 style="font-weight: bolder">Tenda Kerucut Mini Lego</h6>
					<div class="w3-card-4">
						<img src="la.jpg" alt="Norway" style="width:100%">
						<div class="w3-container w3-center">
							<p>Tenda Berbentuk Kerucut untuk Promosi</p>
						</div>
						<footer class="w3-container w3-red">
							<h5>Rp.150.000</h5>
						</footer>
					</div>
				</div>
			</div>
		</div>
		<!-- /#row -->
	</div>
	<!-- /#card body -->
</div>
<!-- /#card -->
<!-- /#Category 1 -->

<!-- #Category 2 -->
<div class="card mb-3">
	<div class="card-header" style="font-weight: bold; font-size: 25px ;background-color: lightcyan">
		NEON
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="w3-container">
					<h2>Photo Card</h2>
					<div class="w3-card-4">
						<img src="la.jpg" alt="Norway" style="width:100%">
						<div class="w3-container w3-center">
							<p>The Italian / Austrian Alps</p>
						</div>
						<footer class="w3-container w3-red">
							<h5>Footer</h5>
						</footer>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="w3-container">
					<h2>Photo Card</h2>

					<div class="w3-card-4">
						<img src="la.jpg" alt="Norway" style="width:100%">
						<div class="w3-container w3-center">
							<p>The Italian / Austrian Alps</p>
						</div>
						<footer class="w3-container w3-red">
							<h5>Footer</h5>
						</footer>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="w3-container">
					<h2>Photo Card</h2>

					<div class="w3-card-4">
						<img src="la.jpg" alt="Norway" style="width:100%">
						<div class="w3-container w3-center">
							<p>The Italian / Austrian Alps</p>
						</div>
						<footer class="w3-container w3-red">
							<h5>Footer</h5>
						</footer>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="w3-container">
					<h2>Photo Card</h2>

					<div class="w3-card-4">
						<img src="la.jpg" alt="Norway" style="width:100%">
						<div class="w3-container w3-center">
							<p>The Italian / Austrian Alps</p>
						</div>
						<footer class="w3-container w3-red">
							<h5>Footer</h5>
						</footer>
					</div>
				</div>
			</div>
		</div>
		<!-- /#row -->
	</div>
	<!-- /#card body -->
</div>
<!-- /#card -->
<!-- /#Category 2 -->
<?php 
include_once ("footer.php");
?>
<script type="text/javascript">
	function formSubmit(clicked_id){
		var x=clicked_id;
		document.getElementById(x).submit();// Form submission
	}
	
</script>
<?php
include_once ("defaultfunction.php");
?>