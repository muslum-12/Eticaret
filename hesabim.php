<?php include 'header.php'; 


?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<p ><h3>Bilgilerinizi aşağıdan düzenleyebilirsiniz...</p></h3>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<form action="nedmin/netting/islem.php" method="POST" class="form-horizontal checkout" role="form">
		<div class="row">
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">Hesap Bilgileri</div>
				</div>



				


				<div class="form-group dob">
					<div class="col-sm-12">
						
						<input type="text" class="form-control"  value="<?php echo $kullanicicek['kullanici_ad']?>" name="kullanici_ad" placeholder="Adınızı Girin">
					</div>
			
				</div>

				<div class="form-group dob">
					<div class="col-sm-12">
						
					<input type="text" class="form-control"  value="<?php echo $kullanicicek['kullanici_soyad']?>"name="kullanici_soyad" placeholder="Soydınızı Girin">
					</div>
			
				</div>

				<div class="form-group dob">
					<div class="col-sm-12">
						
						<input type="email" class="form-control" value="<?php echo $kullanicicek['kullanici_mail']?>"  name="kullanici_mail" placeholder="Mail Adresini Girin">
					</div>
			
				</div>
				

				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" value="<?php echo $kullanicicek['kullanici_gsm']?>" name="kullanici_gsm"  placeholder="GSM">
					</div>
				</div>

                <div class="form-group dob">
					<div class="col-sm-12">
						
						<input type="text" class="form-control" value="<?php echo $kullanicicek['kullanici_adres']?>"  name="kullanici_adres" placeholder="Adresinizi Girin">
					</div>
			
				</div>



				<div class="form-group dob">
					   <div class="col-sm-6">
						
						<input type="text" class="form-control"value="<?php echo $kullanicicek['kullanici_il']?>"  name="kullanici_il" placeholder="İl">

					  </div>
					<div class="col-sm-6">
						
						<input type="text" class="form-control" value="<?php echo $kullanicicek['kullanici_ilce']?>" name="kullanici_ilce" placeholder="İlçe">

					</div>
				</div>
				
             <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>"> 



				<button type="submit" name="kullanicibilgiguncelle" class="btn btn-default btn-red">Bilgilerimi Güncelle</button>
			</div>
			<div class="col-sm-6">
			 <div class="title-bg">
			 	<div class="title"> Şifremi Unuttum</div>
			 </div>	
		<center><a href="sifre-guncelle"> <img width="400"src="../dimg/sifremi-unuttum.png"></a></center>    
		     </div>
	</div>
  </div>
</form>
	


<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>