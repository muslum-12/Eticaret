
<div class="f-widget"><!--footer Widget-->
		<div class="container">
			<div class="row">
				<div class="col-md-4"><!--footer twitter widget-->
					<div class="title-widget-bg">
						<div class="title-widget">Kurumsal</div>
					</div>
									<ul class="tweets">
					   
     <li><a href="index.php" class="active">Anasayfa</a><div class="curve"></div></li>


     <?php 

     $menusor=$db->prepare("SELECT * FROM menu where menu_durum=:durum order by menu_sira ASC limit 5");
     $menusor->execute(array(
      'durum' => 1
      ));

     while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {
       ?>


       <li><a href="

        <?php 

        if (!empty($menucek['menu_url'])) {

          echo $menucek['menu_url'];

        } else {


          echo "sayfa-".seo($menucek['menu_ad']);

        }
        ?>


        "><?php echo $menucek['menu_ad'] ?></a></li>

        <?php } ?>

      </ul>
					<div class="clearfix"></div>
					<a href="#" class="btn btn-default btn-follow"><i class="fa fa-twitter fa-2x"></i><div>Follow us on twitter</div></a>
				</div><!--footer twitter widget-->
				<div class="col-md-4"><!--footer newsletter widget-->
					<div class="title-widget-bg">
						<div class="title-widget">Şubeler</div>
					</div>
					<div class="newsletter">
						<p>
						Mağzalarımızı Ziyaret  Edin
						</p>
					
							<div class="form-group">
								
						<a href="magazalar.php"><button class="btn btn-primary btn-xs" type="submit">Mağazalarımız</button></a>
							</div>
			
					</div>
				</div><!--footer newsletter widget-->
				<div class="col-md-4"><!--footer contact widget-->
					<div class="title-widget-bg">
						<div class="title-widget-cursive">İletişim</div>
					</div>
					<ul class="contact-widget">
						<li class="fphone"><?php echo $ayarcek['ayar_tel']; ?> <br> <?php echo $ayarcek['ayar_faks']; ?></li>
						<li class="fmobile"><?php echo $ayarcek['ayar_gsm']; ?><br><?php echo $ayarcek['ayar_gsm']; ?></li>
						<li class="fmail lastone"><?php echo $ayarcek['ayar_mail']; ?></li>
					</ul>
				</div><!--footer contact widget-->
			</div>
			<div class="spacer"></div>
		</div>
	</div><!--footer Widget-->
	<div class="footer"><!--footer-->
		<div class="container">
			<div class="row">
				<div class="col-md-9">
				<ul class="footermenu"><!--footer nav-->
						<li><a href="index-1.htm">Home</a></li>
						<li><a href="cart.htm">My Cart</a></li>
						<li><a href="checkout.htm">Checkout</a></li>
						<li><a href="order.htm">Completed Orders</a></li>
						<li><a href="contact.htm">Contact us</a></li>
					</ul><!--footer nav-->
						<div class="f-credit">&copy;<?php echo $ayarcek['ayar_author'] ?> <a href="http://222.joyakademi.com">www.Bır-So.com</a></div>
					<a href=""><div class="payment visa"></div></a>
					<a href=""><div class="payment paypal"></div></a>
					<a href=""><div class="payment mc"></div></a>
					<a href=""><div class="payment nh"></div></a>
				</div>

				</div>
				<div class="col-md-3"><!--footer Share-->
					<div class="followon">Sosyal Medyadan Ulaş</div>
					<div class="fsoc">
						
						<a href="http://<?php echo $ayarcek['ayar_twitter']; ?>" class="ftwitter">twitter</a>
						
						<a href="http://<?php echo $ayarcek['ayar_facebook']; ?>" class="ffacebook">facebook</a>
						
						<a href="http://<?php echo $ayarcek['ayar_youtube']; ?>" class="fflickr">Youtube</a>
						
						<a href="http://<?php echo $ayarcek['ayar_google']; ?>" class="ffeed">Google</a>

						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div><!--footer Share-->
			</div>
		</div>
	</div><!--footer-->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap\js\bootstrap.min.js"></script>
	
	<!-- map -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
	<script type="text/javascript" src="js\jquery.ui.map.js"></script>
	<script type="text/javascript" src="js\demo.js"></script>
	
	<!-- owl carousel -->
    <script src="js\owl.carousel.min.js"></script>
	
	<!-- rating -->
	<script src="js\rate\jquery.raty.js"></script>
	<script src="js\labs.js" type="text/javascript"></script>
	
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="js\product\lib\jquery.mousewheel-3.0.6.pack.js"></script>
	
	<!-- fancybox -->
    <script type="text/javascript" src="js\product\jquery.fancybox.js?v=2.1.5"></script>
	
	<!-- custom js -->
    <script src="js\shop.js"></script>
	</div>
  </body>
</html>