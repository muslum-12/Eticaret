<?php include'header.php'?>

	<div class="container">

		<div class="clearfix"></div>
		<div class="lines"></div>
	</div>
	
	<div class="container">
		
		<div class="title-bg">
			<div class="title">Satın Aldıkların</div>
		</div>
		
		<div class="table-responsive">
			<table class="table table-bordered chart">
				<thead>
					<tr>
						<th>Seç</th>
						<th>Ürün Resmi</th>
						<th>İsim</th>
						<th>Ürün No</th>
						<th>Ürün Fiyat</th>
						<th>Adet S</th>
					    <th>İşlem</th>



					
					</tr>
				</thead>
				<tbody>

				<?php 

				$kullanici_id=$kullanicicek['kullanici_id']; 
				$sepetsor=$db->prepare("SELECT * FROM sepet where kullanici_id=:id");
				$sepetsor->execute(array(
				  'id' => $kullanici_id
				  ));

				 while($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) { 

				    $urun_id=$sepetcek['urun_id'];
				 	$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id");
				    $urunsor->execute(array(
					   'urun_id'=>$urun_id
				    ));
				    $uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);  
				   // $toplam_fiyat+=$uruncek['urun_fiyat']*$sepetcek['urun_adet'];
				    ?>


					<tr>
						<td><form><input type="checkbox"></form></td>
						<td><img src="images\demo-img.jpg" width="100" alt=""></td>
						<td><?php echo $uruncek['urun_ad']; ?></td>
						<td><?php echo $uruncek['urun_id']; ?></td>
					    <td><?php echo $uruncek['urun_fiyat'] ?></td>
                        <td><form><input type="text" class="form-control quantity" value="<?php echo $sepetcek['urun_adet']; ?>"></form></td>
						<td><a href="nedmin/netting/islem.php?sepet_id=<?php echo $sepetcek['sepet_id']; ?>&sepetsil=ok"class="btn btn-default btn-red btn-sm">Sil</a></td>				
					</tr>
				
			  <?php } ?> 
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-md-6">
			
			
			</div>
			<div class="col-md-3 col-md-offset-3">
			<div class="subtotal-wrap">
				<div class="subtotal">
				
				</div>
				<div class="total">Toplam: <span class="bigprice"><?php echo $toplam_fiyat?>TL</span></div>
				<div class="clearfix"></div>
				<a href="odeme" class="btn btn-default btn-yellow">Ödeme Sayfası</a>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
		<div class="spacer"></div>
	</div>
	
	<?php include 'footer.php' ?>