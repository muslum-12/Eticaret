
<?php include 'header.php'?>
<?php include '../netting/baglan.php'?>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Genel Ayarlar</h3>
              </div>

          
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>iletişim Ayarları <small>İşlem Durumu</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />


                    <form action="../netting/islem.php" method="POST"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required"value="<?php echo $ayarcek['ayar_facebook']?>" name=" ayar_facebook"class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                 
                  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">twitter<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"required="required"  value="<?php echo $ayarcek['ayar_twitter']?>" name="ayar_twitter"class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>



                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="Mail" id="first-name" required="required" value="<?php echo $ayarcek['ayar_google']?>"name="ayar_google"class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Youtube <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?php echo $ayarcek['ayar_youtube']?>"name="ayar_youtube"class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                    


                      
                   
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button  type="submit" name="sosyalmedyaayarkaydet"class="btn btn-success">Güncelle</button>
                        </div>
                      </div>

                    </form>


                    
                  </div>
                </div>
              </div>
            </div>

        
          </div>
        </div>
        <!-- /page content -->

    <?php include 'footer.php'?>