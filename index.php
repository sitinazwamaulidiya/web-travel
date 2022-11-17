<?php 
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
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="index.php">Traveling</a></h1>
			<ul>
				<li><a href="produk.php">Tourist Attraction</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				
			</ul>
		</div>
	</header>

	<!--home-->
	<div class="layar-penuh">
    <header id="home">
      <div class="overlay">
        <img src="img/foto.jpg" alt="">
	  <div class="intro">
        <h3>Visit the side of the world</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. sequi,officiis?
        </p>
        <p>
          <a href="" class="tombol">MORE INFO </a>
        </p>
      </div>
    </header>
    <main>
	<br>
	<br>
	
</section>
	<!-- search -->
	<div class="search">
		<div class="container">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari">
				<input type="submit" name="cari" value="Cari">
			</form>
		</div>
	</div>

	<!-- category -->
	<div class="section">
		<div class="container">
			<h3>Selection Area</h3>
			<div class="box">
				<?php 
					$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
					if(mysqli_num_rows($kategori) > 0){
						while($k = mysqli_fetch_array($kategori)){
				?>
					<a href="produk.php?kat=<?php echo $k['category_id'] ?>">
						<div class="col-5">
							<img src="img/icon-kategori.png" width="50px" style="margin-bottom:5px;">
							<p><?php echo $k['category_name'] ?></p>
						</div>
					</a>
				<?php }}else{ ?>
					<p>Kategori tidak ada</p>
				<?php } ?>
			</div>
		</div>
	</div>

	<!-- new product -->
	<div class="section">
		<div class="container">
			<h3>Wisata-wisata Terbaru</h3>
			<div class="box">
				<?php 
					$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8");
					if(mysqli_num_rows($produk) > 0){
						while($p = mysqli_fetch_array($produk)){
				?>	
					<a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
						<div class="col-4">
							<img src="produk/<?php echo $p['product_image'] ?>">
							<p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
							<p class="harga">Tiket masuk : <?php echo number_format($p['product_price']) ?></p>
						</div>
					</a>
				<?php }}else{ ?>
					<p>Produk tidak ada</p>
				<?php } ?>
			</div>
		</div>
	</div>


	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p><?php echo $a->admin_address ?></p>

			<h4>Email</h4>
			<p><?php echo $a->admin_email ?></p>

			<h4>No. Hp</h4>
			<p><?php echo $a->admin_telp ?></p>
			<small>Copyright &copy; 2020 - Travel_id</small>
		</div>
	</div>
</body>
</html>


<style>
	#aboutus{
	text-align: center;
}
header .intro{
    z-index: 100;
    color: #fff;
    text-align: center;
    position: relative;
    top: 50%;
}
header .intro h3{
    font-size: 40px;
    margin: 0;
    padding: 0;
}
    #package{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap: 2rem;
}
.home-packages .box-container .box{
	border:var(--border);
   box-shadow: var(--box-shadow);
   background: var(--white);
}
.home-packages .box-container .box:hover .img img{
   transform: scale(1.1);
}
.home-packages .box-container .box .img{
   height: 25rem;
   overflow: hidden;
}
.home-packages .box-container .box .img img{
   height: 100%;
   width: 100%;
   object-fit: cover;
   transition: .2s linear;
}
.home-packages .box-container .box .content{
   padding:2rem;
   text-align: center;
}
.home-packages .box-container .box .content h3{
   font-size: 2.5rem;
   color:var(--black);
}
.home-packages .box-container .box .content p{
   font-size: 1.5rem;
   color:var(--light-black);
   line-height: 2;
   padding:1rem 0;
}
.home-packages .load-more{
   text-align: center;
   margin-top: 2rem;
}




.home-packages{
   background: var(--light-bg);
}

.home-packages .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap: 2rem;
}

.home-packages .box-container .box{
   border:var(--border);
   box-shadow: var(--box-shadow);
   background: var(--white);
}

.home-packages .box-container .box:hover .image img{
   transform: scale(1.1);
}

.home-packages .box-container .box .image{
   height: 25rem;
   overflow: hidden;
}

.home-packages .box-container .box .image img{
   height: 100%;
   width: 100%;
   object-fit: cover;
   transition: .2s linear;
}

.home-packages .box-container .box .content{
   padding:2rem;
   text-align: center;
}

.home-packages .box-container .box .content h3{
   font-size: 2.5rem;
   color:var(--black);
}

.home-packages .box-container .box .content p{
   font-size: 1.5rem;
   color:var(--light-black);
   line-height: 2;
   padding:1rem 0;
}

.home-packages .load-more{
   text-align: center;
   margin-top: 2rem;
}

</style>