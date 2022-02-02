<?php 

include 'header.php'; 


$magazasor=$db->prepare("SELECT * FROM magazalar where magaza_id=:id");
$magazasor->execute(array(
  'id' => $_GET['magaza_id']
  ));

$magazacek=$magazasor->fetch(PDO::FETCH_ASSOC);


?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Magaza Düzenleme <small>,

            </small></h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


          

           


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mağaza Adı: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="magaza_ad"  required="required" value="<?php echo $magazacek['magaza_ad'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              

      <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mağaza Adresi: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="magaza_adres"  required="required" value="<?php echo $magazacek['magaza_adres'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
         

             
      <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İl:<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="magaza_il"  required="required" value="<?php echo $magazacek['magaza_il'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>



      <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İlçe:<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="magaza_ilce"  required="required" value="<?php echo $magazacek['magaza_ilce'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
         



      <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mağaza Konum<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="magaza_konum"  required="required" value="<?php echo $magazacek['magaza_konum'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


            <input type="hidden" name="magaza_id" value="<?php echo $magazacek['magaza_id'] ?>">


            <div class="ln_solid"></div>
            <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="magazaduzenle" class="btn btn-success">Güncelle</button>
              </div>
            </div>

          </form>



        </div>
      </div>
    </div>
  </div>



  <hr>
  <hr>
  <hr>



</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
