<?php 
include 'header.php'; 

if (isset($_GET['arama'])) {
	



	


$urunsor=$db->prepare("SELECT * FROM urun  where urun_ad=:urun_ad ");
$urunsor->execute(array(

'kategori_id' => $kategori_id

));
$say=$urunsor->rowCount();


} else{


header("location:index.php?durum=bos");

}

?>



	<div class="container">
		<div class="row">
			<div class="col-md-12">
			
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title">Kategoriler Ve Ürünler</div>
					<div class="title-nav">
						<!--<a href="category.htm"><i class="fa fa-th-large"></i>grid</a>
						<a href="category-list.htm"><i class="fa fa-bars"></i>List</a>-->

					    <a href="javascripti:void(0);"><i class="fa fa-th-large"></i>grid</a>
						<a href="javascripti:void(0);"><i class="fa fa-bars"></i>List</a>
					</div>
				</div>
				<div class="row prdct"><!--Products-->

					   <?php  


					 if($say==0){
					 	echo "Bu Adreste  Mevcut Ürünler Bulunmadı..<br>
					 	   En Kısa Zamanda Hizmetinize Sunacaz..<br>
					 	   Bır-So EMLAK";
					 }// burda seo url ile baglantı kuruldu ve kategoride ürün bulunmadımı kullanıcıya verilen mesaj

					   while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) { ?>


					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<div class="hot"></div>
								<a href="urun-<?=seo($uruncek['urun_ad']).'-'.$uruncek['urun_id'] ?>"><img src="images\sample-3.jpg" alt="" class="img-responsive"></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice"><?php echo $uruncek['urun_fiyat']*1,50?>TL</span><?php echo $uruncek['urun_fiyat']?>TL</span></div></div>
							</div>
							<span class="smalltitle"><a href="product.htm"><?php echo $uruncek['urun_ad']?></a></span>
							<span class="smalldesc">Satok:<?php echo $uruncek['urun_stok']?></span>
						</div>
					</div>
					<?php } ?>
				</div><!--Products-->


				<!--
				<ul class="pagination shop-pag"><!--pagination--><!--
					<li><a href="#"><i class="fa fa-caret-left"></i></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
				</ul>  --><!--pagination-->
             
			</div>
			
                   <?php   include 'sidebar.php';  ?>
    
		</div>
		<div class="spacer"></div>
	</div>
	
<?php 
include 'footer.php'; 
?>