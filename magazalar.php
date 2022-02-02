<?php 

include 'header.php';
		

$magazasor=$db->prepare("SELECT * FROM magazalar order by magaza_ad ASC");
$magazasor->execute();

?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">

             <?php 

               

                while($magazacek=$magazasor->fetch(PDO::FETCH_ASSOC)) { $say++?>
 
						<div class="col-md-4">
				<p class="page-content">
					<?php echo $magazacek['magaza_adres']; ?>
				</p>
				<ul class="contact-widget">
				 <li class="fphone"><?php echo $magazacek['magaza_il']; ?> <br> <?php echo $magazacek['magaza_ilce']; ?></li>
				</ul>
			</div><hr>
			<div class="col-md-3 col-md-offset-5">
				<button class="btn btn-default btn-red btn-lg"><?php echo $magazacek['magaza_ad']; ?></button>

			</div>

					<?php } ?>
					</div>



					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
		
			<div class="col-md-7 col-md-offset-1">
				<div class="loc">
					<div id="map_canvas"></div>
				</div>
			</div>
		</div>
		
		<div class="title-bg">
			<div class="title">Quick Contact</div>
		</div>
		<div class="qc">
			<!--
			<form role="form">
				<div class="form-group">
					<label for="name">Name<span>*</span></label>
					<input type="text" class="form-control" id="name">
				</div>
				<div class="form-group">
					<label for="email">Email<span>*</span></label>
					<input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="text">Messages<span>*</span></label>
					<textarea class="form-control" id="text"></textarea>
				</div>
				<button type="submit" class="btn btn-default btn-red btn-sm">Submit</button>
			</form>-->
		</div>
		<div class="spacer"></div>
		
	</div>
	
	<?php 

include 'footer.php';?>
