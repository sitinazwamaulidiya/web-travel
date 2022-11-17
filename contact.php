<?php 
	error_reporting(0);
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Traveling</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
<!--Contact-->
      <section id="contact" class="container my-5 py-5">
        <div class="container text-center mt-5">
            <h3>Contact Us</h3>
            <hr class="mx-auto">
            <p class="w-50 mx-auto">
                Phone number: <span>+6282217604816</span>
            </p>
            <p class="w-50 mx-auto">
                Email address: <span>Travel_id@email.com</span>
            </p>
            <p class="w-50 mx-auto">
             Alamat: Jl.Petojo VIJ VI, Cideng, Gambir, Jakarta Pusat 10150
            </p>
        </div>
      </section>
      <br>
      <footer class="mt-5 py-5">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <p>"JOBS FILL YOUR POCKET, ADVENTURES FILL YOUR SOUL."</p>
            </div>
            <div class="col-sm">
              <h5 class="pb-2">Kategori</h5>
              <ul class="text-uppercase">
                <li><a href="#">Sumtra barat</a></li>
                <li><a href="#">Bali</a></li>
                <li><a href="#">Batam</a></li>
                <li><a href="#">Singapura</a></li>
                <li><a href="#">Pulau Jawa</a></li>
                <li><a href="#">Malaysia</a></li>
              </ul>
            </div>
            <div class="col-sm">
              <h5 class="pb-2">Contact Us</h5>
              <div>
                <h6 class="text-uppercase">Address</h6>
                <p>007 Streetnama, City, Country</p>
              </div>
              <div>
                <h6 class="text-uppercase">Phone</h6>
                <p>82217604816</p>
              </div>
              <div>
                <h6 class="text-uppercase">Email</h6>
                <p>Travel_id@gmail.com</p>
              </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
              <h5 class="pb-2">Instagram</h5>
              <div class="row">
                <img src="assets/imgs/footer2.jpg" class="img-fluid w-25 h-100 m-2" alt="">
                <img src="assets/imgs/footer2.jpg" class="img-fluid w-25 h-100 m-2" alt="">
                <img src="assets/imgs/footer2.jpg" class="img-fluid w-25 h-100 m-2" alt="">
                <img src="assets/imgs/footer2.jpg" class="img-fluid w-25 h-100 m-2" alt="">
                <img src="assets/imgs/footer2.jpg" class="img-fluid w-25 h-100 m-2" alt="">
              </div>
            </div>
              <div class="copyright mt-5">
                <div class="row container mx-auto">
                  <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <img src="assets/imgs/payment1.jpg" alt="">
                  </div>
                  <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <p>Travel_id@gmail 2025 All Right Reversed</p>
                  </div>
                  <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <a href="#"><i class="fab fa-facebook" class="position:relative; top9px;"></i></a>
                    <a href="#"><i class="fab fa-instagram" class="position:relative; top9px;"></i></a>
                    <a href="#"><i class="fab fa-twitter" class="position:relative; top9px;"></i></a>
                  </div>
                </div>
 </body>
</html>

<style>
    footer h5{
    background-color:#1d1d1d;
}

footer {
    background-color: #222222;
}

footer h5{
    color: #d8d8d8;
    font-weight: 700;
    font-size: 1.2rem;
}

footer li{
    padding-bottom: 4px;
}

footer li a{
    font-size: 0.8rem;
    color: #999;
    text-decoration: none;
}

footer li a:hover{
    color: #d8d8d8;
}

footer .copyright a{
    color: #000;
    height: 40px;
    width: 40px;
    background-color: #fff;
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    transition: 0.3s ease;
    margin: 0 5px;
}

footer .copyright a:hover{
    color: #fff;
    background-color: #fb774b;
}

footer p{
    color: #fff;
}

footer .copyright img{
    width: 20%;
}
</style>