<?php include 'header.php'; 


?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<p ><h3>Şifre Güncelleme İşlemi</p></h3>
						</div>
						
						<?php 

						if($_GET['durum']=="farklisifre") { ?>

						<div class="alert alert-danger">
							 <strong>Hata!</strong>Girdiğiniz Şifreler Eşleşmiyor.
						</div>



						<?php } elseif ($_GET['durum']=="eksiksifre") {?>
						<div class="alert alert-danger">
							 <strong>Hata!</strong>Şifreniz Minumum Altı Karekter uzunluğunda Olmalıdır.
						</div>



						<?php } elseif ($_GET['durum']=="mukererkayit") {?>
						<div class="alert alert-danger">
							 <strong>Hata!</strong>Bu Kullanıcı Daha Önce Kayıt Yapmıştır.
						</div>



						<?php } elseif ($_GET['durum']=="sifredegisti") {?>
						<div class="alert alert-success">
							 <strong>Hata!</strong>Şifreniz Başarıyla Değişti
						</div>

						<?php } ?>



						
					</div>
				</div>
			</div>
		</div>
	</div>

	<form action="nedmin/netting/islem.php" method="POST" class="form-horizontal checkout" role="form">
		<div class="row">
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">Şifre Güncelleme İşlemleri</div>
				</div>



				


				

			

			
				

				<div class="form-group">
					<div class="col-sm-12">
						<input type="password" class="form-control"  name="kullanici_eskipassword"  placeholder="Eski Şifrenizi Girin">
					</div>
				</div>

                <div class="form-group dob">
					<div class="col-sm-6">
						
						<input type="password" class="form-control"   name="kullanici_passwordone" placeholder="Yeni Şifreyi Girin">
					</div>
			
				</div>

                <div class="form-group dob">
					<div class="col-sm-6">
						
						<input type="password" class="form-control"   name="kullanici_passwordtwo" placeholder="Yeni Şifre Tekrar">
					</div>
			
				</div>


				
             <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>"> 



				<button type="submit" name="kullanicisifreguncelle" class="btn btn-default btn-red">Şifre Güncelle</button>
			</div>
		
		</div>
	
</form>

<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>