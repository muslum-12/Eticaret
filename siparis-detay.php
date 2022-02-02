<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bigtitle">Sipariş Bilgilerim</div>
							<p >Vermiş olduğunuz siparişlerinizi listeliyorsunuz</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

		<div class="row">
			<div class="col-md-12">
				<div class="title-bg">
					<div class="title">Sipariş Bilgileri</div>
				</div>
	       
				<div class="table-responsive">
					<table class="table table-bordered chart">
						<thead>
						
							<tr>
								<
								<th>Sipariş No</th>
								<th>Ürün No</th>
								<th>Ürün Fiyat</th>
								<th>Ürün Adeti</th>
								
							</tr>
						</thead>
						<tbody>

							<?php 

$siparisdetaysor=$db->prepare("SELECT * FROM siparis_detay where siparisdetay_id  =:siparis_id");
$siparisdetaysor->execute(array(
  'siparis_id' =>$_POST('siparis_id') 
  ));
$siparisdetaycek=$siparisdetaysor->fetch(PDO::FETCH_ASSOC);

?>
							<tr>

								<td><?php echo $siparisdetaycek['siparis_id'] ?></td>
								<td><?php echo $siparisdetaycek['urun_id'] ?></td>
								<td><?php echo $siparisdetaycek['urun_fiyat'] ?></td>
								<td><?php echo $siparisdetaycek['urun_adet'] ?></td>



								
								<td><a href="#">  <button class="btn btn-primary btn-xs" type="submit" name="siparisdetay">Detay</button>






							</tr>
						</tbody>
					</table>
				</div>

	

				


				


				
			</div>
			
		</div>
	</div>
</form>
<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>