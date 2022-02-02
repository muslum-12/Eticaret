<?php include 'header.php'; ?>


<div class="container">


	<form action="nedmin/netting/kullanici.php" method="POST" class="form-horizontal checkout" role="form">
		<div class="row">
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">Kayıt Bilgileri</div>
				</div>




			<?php 

			if ($_GET['durum']=="farklısifre") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Güncelleme Gerçkleşmedi
				</div>
			<?php } 


			?>

			




				<div class="form-group dob">
					<div class="col-sm-12">
						
						<input type="text" class="form-control"  required="" name="kullanici_ad" placeholder="Adınızı Giriniz...">
					</div>
					
				</div>





			  <div class="form-group dob">
					<div class="col-sm-12">
						
						<input type="text" class="form-control"  required="" name="kullanici_soyad" placeholder="Soyadınızı Giriniz...">
					</div>
					
				</div>

				<div class="form-group">
					<div class="col-sm-12">
						<input type="email" class="form-control" required="" name="kullanici_mail"  placeholder="Dikkat! Mail adresiniz kullanıcı adınız olacaktır.">
					</div>
				</div>
				<div class="form-group dob">
					<div class="col-sm-6">
						<input type="password" class="form-control" name="kullanici_passwordone"    placeholder="Şifrenizi Giriniz...">
					</div>
					<div class="col-sm-6">
						<input type="password" class="form-control" name="kullanici_passwordtwo"   placeholder="Şifrenizi Tekrar Giriniz...">
					</div>
				</div>



				<button type="submit" name="kullanicikaydet" class="btn btn-default btn-red">Kayıt Ol</button>
			</div>
		
		</div>
	</div>
</form>
</div>
</form>
</div>
<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>