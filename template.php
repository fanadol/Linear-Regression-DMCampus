<?php include('./config/db.php');
function ptop(){
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="assets/img/logo.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Dinomuz</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="assets/css/linearicons.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/nice-select.css">
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/main.css">
		<style>
			hr {
				width: 100%;
		    border-style: dashed;
				color: white;
				border-color: white;
			}
		</style>
	</head>
	<body>
		<div class="">
			<header>
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="index.php"><h3 class="text-white">Regresi Linear</h3></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="index.php">Home</a>
									<a href="input_data.php">Input Data</a>
									<a href="generate.php">Generate</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
      <section class="service-area">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
<?php } ?>

<?php function pbottom() { ?>
            </div>
          </div>
        </div>
      </section>



<footer>
<div class="container">
<div class="footer-content d-flex justify-content-between align-items-center flex-wrap">
<div class="logo">
  <img src="img/logo.png" alt="">
</div>
<div class="copy-right-text">Copyright &copy; 2017  |  template by Dinomuz inc. This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></div>
<div class="footer-social">
  <a href="#"><i class="fa fa-facebook"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-behance"></i></a>
</div>
</div>
</div>
</footer>
<!-- End footer Area -->
</div>




<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/main.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/popper.min.js"></script>


<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>

<script type="text/javascript">
  function cekHapus(){
    if(confirm("Yakin Menghapus Data Ini ?")){
      return true;
    } else {
      return false;
    }
  }
</script>
</body>
</html>
<?php } ?>
