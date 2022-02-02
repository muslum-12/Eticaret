<?php  include 'header.php ';
	
$_GET['durum']='no'; 
$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id");
$urunsor->execute(array(
	'urun_id'=>$_GET['urun_id']));

$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);

    //burda urun id sini kullanıcı değişirip olmayan id olursa bildirecegimiz mesaj
     $say=$urunsor->rowCount();
         if ($say==0)
		  {
		  	header("location:index.php?durum=urunyok");
		  	exit;
		  }

		  ?>





	
	<head>
       <link rel="stylesheet" type="text/css" href="js\product\jquery.fancybox.css?v=2.1.5" media="screen">
   </head>
	     <?php 
	     if ($_GET['durum']=="ok") {?>
	   	<script type="text/javascript">
	   		
	   		alert("Yorum Başarıyla Eklendi");
	   	</script>
	 
	   <?php } ?>
   

  



	<?php $_GET['durum']='ok';  ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bread"><a href="index.php">Anasayfa</a> </div>
							<div class="bigtitle"></div>
						</div>
						<div class="col-md-3 col-md-offset-5">
							<button class="btn btn-default btn-red btn-lg">Purchase Theme</button>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title"><?php echo $uruncek['urun_ad']?></div>
				</div>
			
				<div class="row">
					<div class="col-md-6">
						<!-- Çoklu resim işlemleirni burya döktük -->

						<?php 

						$urun_id=$uruncek['urun_id'];
						$urunfotosor=$db->prepare("SELECT * FROM urunfoto where urun_id=:urun_id order by urunfoto_sira ASC limit 1");
						$urunfotosor->execute(array(
						   'urun_id'=>$urun_id
						));

						$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);


			           ?>
						<div class="dt-img">
							<div class="detpricetag"><div class="inner"><?php echo $uruncek['urun_fiyat']?> TL</div></div>
							<a class="fancybox" href="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt="" class="img-responsive"></a>
						</div>
				      <?php 

								$urun_id=$uruncek['urun_id'];
								$urunfotosor=$db->prepare("SELECT * FROM urunfoto where urun_id=:urun_id order by urunfoto_sira ASC limit 1,3");
								$urunfotosor->execute(array(
								   'urun_id'=>$urun_id
								));

								while($urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC)){


					      ?>
					<div class="thumb-img">
							<a class="fancybox" href="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt="" class="img-responsive"></a>
						</div>
					<?php }?>
					<!-- Çoklu resim işlemi son -->
				</div>
					<div class="col-md-6 det-desc">
						<div class="productdata">
							<div class="infospan"> Ürün Kodu:<span><?php echo $uruncek['urun_id']?></span></div>
							<div class="infospan">Yayın Tarihi<span><?php echo $uruncek['urun_zaman']?></span></div>
							<div class="infospan">Ürün Fiyatı<span><?php echo $uruncek['urun_fiyat']?></span></div>

						
							<hr>
							<form action="nedmin/netting/islem.php" method="POST">
										<div class="form-group">
											<label for="qty"class="col-sm-2 control-label">Adet:</label>
											<div class="col-md-4">
											   <input type="text"class="form-control"value="1" name="urun_adet">	
											</div>
										</div>
										
							<div class="sharing">
								
								<div class="avatock"><span>
									<?php if ($uruncek['urun_stok']>=1){
		                                  echo "Stok Adeti:".$uruncek['urun_stok'];
		                              } else {
		                              	echo "Stokta Ürünümüz Kalmadı";
		                              } ?>



									

								</span>
							  </div>

							</div>

							<input type="hidden" name="kullanici_id" value=" <?php echo $kullanicicek['kullanici_id']?>">
						     <input type="hidden" name="urun_id" value=" <?php echo $uruncek['urun_id']?>">

										<?php if (isset($_SESSION['userkullanici_mail'])) {?>

										<button type="submit" name="sepetekle" class="btn btn-default btn-red btn-sm"><span class="addchart">Sepete Ekle</span></button>


										<?php  } else { ?>

									<a href="index.php">	<button type="submit" name="sepetekle" disabled class="btn btn-default btn-red btn-sm"><span class="addchart">Giriş Yapın</span></button> </a>

										<?php } ?>

							
						</div>
					</form>
					</div>
				</div>

				<div class="tab-review">
					<ul id="myTab" class="nav nav-tabs shop-tab">

						<li	<?php if ($_GET['durum']!="ok") { ?>class="active"
					
						 <?php  } ?>><a href="#desc" data-toggle="tab">Ürün Açıklaması</a></li>
						

						<li class=""><a href="#video" data-toggle="tab">Ürün Video</a></li>

		

						<li <?php if ($_GET['durum']=="ok") { ?> class="active"

						   <?php } ?>

							<?php 

							$kullanici_id=$kullanicicek['kullanici_id'];
							$urun_id=$uruncek['urun_id'];

							$yorumsor=$db->prepare("SELECT * FROM yorumlar where  urun_id=:urun_id and yorum_onay=:yorum_onay");
							$yorumsor->execute(array(						
							'urun_id'=>$urun_id,
							'yorum_onay'=>1
							 ));

							?>
						     >

						<a href="#rev" data-toggle="tab">Yorumlar (<?php echo $yorumsor->rowCount();?>)</a></li>

					</ul>
					<div id="myTabContent" class="tab-content shop-tab-ct">
						<div class="tab-pane fade <?php if ($_GET['durum']!="ok") { ?>
						     active in
						 <?php  } ?>" id="desc">
							<p>
					      <?php  echo $uruncek['urun_detay']?>
							</p>
						</div>








						 <div class="tab-pane <?php if ($_GET['durum']=="ok") { ?>
						  active in>
						 <?php } ?>" id="rev">

					<?php 


					while ($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)) {

					$ykullanici_id=$yorumcek['kullanici_id'];
					$ykullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
					$ykullanicisor->execute(array(

					'id'=>$ykullanici_id

					));
					$ykullanicicek=$ykullanicisor->fetch(PDO::FETCH_ASSOC);


                    ?>








							<p class="dash">
							<span><?php echo $ykullanicicek['kullanici_ad'] ?>//<?php echo $ykullanicicek['kullanici_soyad'] ?></span><br><span>	<?php  echo $yorumcek['yorum_zaman']?></span><br><br>
		             	<?php  echo $yorumcek['yorum_detay']?>
							</p>


						<?php } ?>

							<h4>Yorum Yazın</h4>

                        <?php if (isset($_SESSION['userkullanici_mail'])) {?>


                        			<form action="nedmin/netting/islem.php" method="POST" role="form">
							
							<div class="form-group">
								<textarea name="yorum_detay" class="form-control" placeholder="Yorum Yazma Alanıdır.
								" id="text"></textarea>
							</div>	
									
								
							
							<input type="hidden" name="kullanici_id" value=" <?php echo $kullanicicek['kullanici_id']?>">
                            <input type="hidden"  name="gelen_url"value="<?php echo "http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."";?>">
							<input type="hidden" name="urun_id" value=" <?php echo $uruncek['urun_id']?>">

							<button type="submit" name="yorumkaydet" class="btn btn-default btn-red btn-sm">Gönder</button>
						</form>



                         <?php } else { ?>

                         	          Yorum yapmak için<a style="color:red" href="register.php"> Kayıt</a> yapmalısınız.<br>
                         	          Üyemizseniz  <a style="color:red" href="index.php">Giriş </a>Yapmanız Gerekir.

                                      <?php } ?>
                             
                        






					
							
						</div>
						<div class="tab-pane fade " id="video">
							<p>
								<?php

								$say=strlen($uruncek['urun_video']);
 
								 if ($say>0) { ?>

								 <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php  echo $uruncek['urun_video']?>
					             " frameborder="0" allowfullscreen></iframe>

								 <?php } else {

								 	echo "Bu ürün Hakkında Video  Bulunmamıştır";
								 }



								 ?>



					        </p>
						</div>
					</div>
				</div>




				
				<div id="title-bg">
					<div class="title">Benzer Ürünler</div>
				</div>
				<div class="row prdct">
               <!--Products-->


					<?php
					$kategori_id=$uruncek['kategori_id'];

					$urunaltsor=$db->prepare("SELECT * FROM urun  where kategori_id=:kategori_id order by rand() limit 3");
					$urunaltsor->execute(array(

					'kategori_id' => $kategori_id

					));
					   while($urunaltcek=$urunaltsor->fetch(PDO::FETCH_ASSOC)) {


					?>
				
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<div class="hot"></div>
								<a href="urun-<?=seo($urunaltcek['urun_ad']).'-'.$urunaltcek['urun_id'] ?>"><img src="images\sample-3.jpg" alt="" class="img-responsive"></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice"><?php echo $urunaltcek['urun_fiyat']*1,50?>TL</span><?php echo $urunaltcek['urun_fiyat']?>TL</span></div></div>
							</div>
							<span class="smalltitle"><a href="product.htm"><?php echo $urunaltcek['urun_ad']?></a></span>
							<span class="smalldesc">Stokta:<?php echo $urunaltcek['urun_stok']?></span>
						</div>
					</div>
					<?php } ?>
				</div><!--Products-->
				<div class="spacer"></div>
			</div><!--Main content-->
   <?php  include 'sidebar.php '?>
		</div>
	</div>
	
<?php  include 'footer.php '?>
