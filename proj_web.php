<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="CSS/sty.css">
	<link rel="stylesheet" type="text/css" href="CSS/cart/style.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



	<link rel="shortcut icon" type="png" href="favicon.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>Jewellery Mgmt System</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- <script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script> -->
	<script>
   //add black shadow when user scrolls
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>

</head>
<body style="background-color:  #fafac8  ; ">
<!-- Navigation Bar -->
	<header id="header">
	
		<nav>
			<div class="logo"><img src="https://www.laxmijewel.net/assets/images/logo.png" alt="logo" height="45px"></div>
			<ul class="nav justify-content-end">
				<li><a class="active" href="" style="background-color:#f0b449 ">Home</a></li>
				<li><a href="about.php"  >About us</a></li>
			</ul>

    
			 <div class="box"> 
    <div class="cart-count">0</div>
       <ion-icon name="cart"  id="cart-icon" ></ion-icon>
      </div> 

      <div class="cart">
        <div class="cart-title">Cart Items</div>
        <div class="cart-content">
        </div>
              <div class="total">
        <div class="total-title">Total</div>
        <div class="total-price">Rs.0</div>
      </div>

      <a href="checkout.php  " class="btn-buy">

      Place Order</a>

      <ion-icon name="close" id="cart-close"></ion-icon>

      </div>
    </div>



			<a class="get-started" href="login.php" >LOGIN NOW</a>
			<img src="menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>

		<br><br><br>
		<div class="row" style="background-color: #a9801c   ;height: 60px">
			<div class="container-fluid">
				<div class="center">
				<a style="color: #fff; margin-top: 10px;
	border-radius: 7px;" href="gold.php">Gold</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a style="color: #fff;margin-top: 10px;
	border-radius: 7px;" href="silver.php">Silver</a>
			</div>
			
			</div>	
		</div>

			
		<!-- caraousel -->
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image4.jpg" class="d-block w-100" alt="..." height="500px">
   
    </div>
    <div class="carousel-item">
      <img src="image5.jpg" class="d-block w-100" alt="..." height="500px">
    
    </div>
    <div class="carousel-item">
      <img src="image6.jpg" class="d-block w-100" alt="..." height="500px">
  
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</header>

 <br> <br> 



<div class="container-fluid">
    <div class="shop-content">

<div class="row" style="padding-left: 40px">
	<div class="col-md-3">
      <div class="food-box">
        <div class="pic">
          <img src="https://cspl-images.s3.amazonaws.com/images/cspljewels/pss1166179m" class="food-img">
        </div>
        <h2 class="food-title">Lucia Silver Chain Pendant</h2>
        <span class="food-price">Rs.34500</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
</div>
	<div class="col-md-3">
      <div class="food-box">
        <div class="pic"><img src="https://cspl-images.s3.amazonaws.com/images/cspljewels/tfb22841267m" class="food-img"></div>
        <h2 class="food-title">Delight Gold Earrings</h2>
        <span class="food-price">Rs.46340</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  </div>
  <div class="col-md-3">
      <div class="food-box">
        <div class="pic"><img src="https://cspl-images.s3.amazonaws.com/images/cspljewels/ang10763886m" class="food-img"></div>
        <h2 class="food-title">Trendy Silver Ring</h2>
        <span class="food-price">Rs.40780</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  </div>
  <div class="col-md-3">
      <div class="food-box">
        <div class="pic"><img src="https://staticimg.titan.co.in/Tanishq/Catalog/500629FJAAA00_1.jpg?impolicy=pqmed&imwidth=640" class="food-img"></div>
        <h2 class="food-title">Chic Eclectic Gold Ring</h2>
        <span class="food-price">Rs.12999</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  </div>

  </div>
  <br><br>
     <div class="row" style="padding-left: 40px">
	<div class="col-md-3">
      <div class="food-box">
        <div class="pic">
          <img src="https://cspl-images.s3.amazonaws.com/images/cspljewels/cms8835577cms8835587m" class="food-img">
        </div>
        <h2 class="food-title">Alice Gold Earrings</h2>
        <span class="food-price">Rs.25000</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
</div>
	<div class="col-md-3">
      <div class="food-box">
        <div class="pic"><img src="https://cspl-images.s3.amazonaws.com/images/cspljewels/tps8144057m" class="food-img"></div>
        <h2 class="food-title">Erisha Silver Earrings</h2>
        <span class="food-price">Rs.65000</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  </div>
  <div class="col-md-3">
      <div class="food-box">
        <div class="pic"><img src="https://cspl-images.s3.amazonaws.com/images/cspljewels/nth8521398m" class="food-img"></div>
        <h2 class="food-title">Priyam Gold Nose Pin</h2>
        <span class="food-price">Rs.8900</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  </div>
  <div class="col-md-3">
      <div class="food-box">
        <div class="pic"><img src="https://cspl-images.s3.amazonaws.com/images/cspljewels/pss1166196m" class="food-img"></div>
        <h2 class="food-title">Elena Silver Chain Pendant</h2>
        <span class="food-price">Rs.55000</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  </div>

  </div>
<br><br>
     <div class="row" style="padding-left: 40px">
	<div class="col-md-3">
      <div class="food-box">
        <div class="pic">
          <img src="https://cspl-images.s3.amazonaws.com/images/cspljewels/tps8143814m" class="food-img">
        </div>
        <h2 class="food-title">Aarvi Silver Earrings</h2>
        <span class="food-price">Rs.40000</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
</div>
	<div class="col-md-3">
      <div class="food-box">
        <div class="pic"><img src="https://cspl-images.s3.amazonaws.com/images/cspljewels/ang10763884m" class="food-img"></div>
        <h2 class="food-title">Silvia Silver Ring</h2>
        <span class="food-price">Rs.65000</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  </div>
  <div class="col-md-3">
      <div class="food-box">
        <div class="pic"><img src="https://staticimg.titan.co.in/Tanishq/Catalog/51D2A1PXJAAA00_1.jpg?impolicy=pqmed&imwidth=640" class="food-img"></div>
        <h2 class="food-title">Fancy Gold Chain Pendant</h2>
        <span class="food-price">Rs.80000</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  </div>
  <div class="col-md-3">
      <div class="food-box">
        <div class="pic"><img src="https://staticimg.titan.co.in/Tanishq/Catalog/500429FFAAA00_1.jpg?impolicy=pqmed&imwidth=640" class="food-img"></div>
        <h2 class="food-title">Elena Silver Chain Pendant</h2>
        <span class="food-price">Rs.55000</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  </div>

  </div>


    </div>
  </div>
  <script src="CSS/cart/script.js"></script>


<br><br>

<div class="center">
	<a class="btn btn-primary" style="background-color: #a9801c    " href="#" role="button">See More Products</a>
			
</div>

<br><br>




	<br>
	<img src="https://cspl-images.s3.amazonaws.com/images/cspljewels/12reasonsbanner_1.jpg" width="100%" height="100%"> <!--  #f0b449  -->

<!-- Sliding Information -->
	<marquee style="background: linear-gradient(to right,   #fff560  ,  #a9801c  ); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">One of a kind Earrings upto 20% off. Offer valid till 31st March only.</div></marquee>

<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="https://www.laxmijewel.net/assets/images/logo.png" style="width: 200px;">
				<div class="logo"></div>
			
				<br><p><img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/address-1484089-1255908.png?f=avif&w=128" height="25px"> Lovely Professional University<br>Phagwara, Punjab-144401</p>
				<p><img src="https://cdn.iconscout.com/icon/free/png-256/call-418-435823.png?f=avif&w=128" height="20px"> +91-1234-567-890<br>
          <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/email-2030737-1713377.png?f=avif&w=128" height="25px">&nbsp; learnedonline9419@gmail.com</p>
			</div>
			<div class="right-col">
				<h1 style="color:  #a9801c ">Our Newsletter</h1>
				<div class="border"></div><br>
				<p>Enter Your Email to get our News and updates.</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Enter Your Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>