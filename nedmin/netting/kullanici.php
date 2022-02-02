<?php
ob_start();
session_start();

include 'baglan.php';
include '../production/fonksiyon.php';





if (isset($_POST['kullanicikaydet'])) {

	
	echo $kullanici_ad=htmlspecialchars($_POST['kullanici_ad']); echo "<br>";
    echo $kullanici_soyad=htmlspecialchars($_POST['kullanici_soyad']); echo "<br>";

	echo $kullanici_mail=htmlspecialchars($_POST['kullanici_mail']); echo "<br>";

	echo $kullanici_passwordone=trim($_POST['kullanici_passwordone']); echo "<br>";
	echo $kullanici_passwordtwo=trim($_POST['kullanici_passwordtwo']); echo "<br>";



	if ($kullanici_passwordone==$kullanici_passwordtwo) {


		if (strlen($kullanici_passwordone)>=6) {


			

			


// Başlangıç

			$kullanicisor=$db->prepare("select * from kullanici where kullanici_mail=:mail");
			$kullanicisor->execute(array(
				'mail' => $kullanici_mail
			));

			//dönen satır sayısını belirtir
			$say=$kullanicisor->rowCount();



			if ($say==0) {

				//md5 fonksiyonu şifreyi md5 şifreli hale getirir.
				$password=md5($kullanici_passwordone);

				$kullanici_yetki=1;

		 
				$kullanicikaydet=$db->prepare("INSERT INTO kullanici SET
					 kullanici_ad=:kullanici_ad,
				     kullanici_soyad=:kullanici_soyad,
      				 kullanici_mail=:kullanici_mail,
					 kullanici_password=:kullanici_password,
					 kullanici_yetki=:kullanici_yetki
					");
				$insert=$kullanicikaydet->execute(array(
					'kullanici_ad' => $kullanici_ad,
					'kullanici_soyad' => $kullanici_soyad,
  				    'kullanici_mail' => $kullanici_mail,
					'kullanici_password' => $password,
					'kullanici_yetki' => $kullanici_yetki
				));

				if ($insert) {


					header("Location:../../index.php?durum=loginbasarili");


				//Header("Location:../production/genel-ayarlar.php?durum=ok");

				} else {


					header("Location:../../register.php?durum=basarisiz");
				}

			} else {

				header("Location:../../register.php?durum=mukerrerkayit");



			}

		// Bitiş

   	} else {


			header("Location:../../register.php?durum=eksiksifre");


		}



	} else {



		header("Location:../../register.php?durum=farklisifre");
	}
	


}



if (isset($_POST['kullanicigiris'])) {

	
	echo $kullanici_mail=htmlspecialchars($_POST['kullanici_mail']); 
	echo $kullanici_password=md5($_POST['kullanici_password']); 



	$kullanicisor=$db->prepare("select * from kullanici where kullanici_mail=:mail and kullanici_yetki=:yetki and kullanici_password=:password and kullanici_durum=:durum");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'yetki' => 1,
		'password' => $kullanici_password,
		'durum' => 1
	));


	$say=$kullanicisor->rowCount();



	if ($say==1) {

		echo $_SESSION['userkullanici_mail']=$kullanici_mail;

		header("Location:../../");
		exit;
		




	} else {


		header("Location:../../?durum=basarisizgiris");

	}


}










if (isset($_POST['hesabimguncelle'])){


	$kullaniciguncelle=$db->prepare("UPDATE kullanici SET 
	  kullanici_ad=:kullanici_ad,
	  kullanici_soyad=:kullanici_soyad,
	  kullanici_tc=:kullanici_tc,
	  kullanici_gsm=:kullanici_gsm,
	  kullanici_adres=:kullanici_adres,
	  kullanici_il=:kullanici_il,
	  kullanici_ilce=:kullanici_ilce
WHERE kullanici_id={$_SESSION['userkullanici_id']}");

  $update=$kullaniciguncelle->execute(array(
     'kullanici_ad'=>htmlspecialchars($_POST['kullanici_ad']),
     'kullanici_soyad'=>htmlspecialchars($_POST['kullanici_soyad']),
     'kullanici_tc'=>htmlspecialchars($_POST['kullanici_tc']),
     'kullanici_gsm'=>htmlspecialchars($_POST['kullanici_gsm']),
     'kullanici_adres'=>htmlspecialchars($_POST['kullanici_adres']),
     'kullanici_il'=>htmlspecialchars($_POST['kullanici_il']),
     'kullanici_ilce'=>htmlspecialchars($_POST['kullanici_ilce'])


     ));
    
    if ($update)
          {
	      Header("location:../../hesabim?durum=ok");
          } else { 
	  	  Header("location:../../hesabim?durum=hata");          
          }
      }



















?>