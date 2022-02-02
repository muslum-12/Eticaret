<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$menusor=$db->prepare("SELECT * FROM menu order by menu_sira ASC");
$menusor->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Menü Listeleme <small>,

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="menu-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

            </div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Menü Ad</th>
                  <th>Menü Url</th>
                  <th>Menü Sira</th>
                  <th>Menü Durum</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

              <?php 

$siparissor=$db->prepare("SELECT siparis.*,siparis_detay.*,kullanici.*,urun.* FROM siparis INNER JOIN siparis_detay ON siparis.siparis_id=siparis_detay.siparis_id INNER JOIN kullanici ON kullanici.kullanici_id=siparis_detay.kullanici_id INNER JOIN urun ON urun.urun_id=siparis_detay.urun_id where siparis.kullanici_id=:kullanici_id and siparis_detay.siparis_detay=:siparis_detay  DESC");
$siparissor->execute(array(
'kullanici_id'=>$_SESSION['kullanici_id'],


));
$say=0;

while($sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC)) { $say++?>

  
                <tr>
                 <td width="20"><?php echo $say ?></td>
                 <td><?php echo $sipariscek['urun_ad'] ?></td>
                 <td><?php echo $menucek['menu_url'] ?></td>
                 <td><?php echo $menucek['menu_sira'] ?></td>

                 <td><center><?php 

                  if ($menucek['menu_durum']==1) {?>

                  <button class="btn btn-success btn-xs">Aktif</button>

                  <!--

                  success -> yeşil
                  warning -> turuncu
                  danger -> kırmızı
                  default -> beyaz
                  primary -> mavi buton

                  btn-xs -> ufak buton 

                -->

                <?php } else {?>

                <button class="btn btn-danger btn-xs">Pasif</button>


                <?php } ?>
              </center>


            </td>


            <td><center><a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
            <td><center><a href="../netting/islem.php?menu_id=<?php echo $menucek['menu_id']; ?>&menusil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
          </tr>



          <?php  }

          ?>


        </tbody>
      </table>

      <!-- Div İçerik Bitişi -->


    </div>
  </div>
</div>
</div>




</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
