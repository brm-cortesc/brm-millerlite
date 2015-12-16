Reproduciendo
<div class="cont-module-related-conciertos">
	<?php $aux = 1;
	foreach ($variables['idnodeActual'] as $value) { 
		if($aux==1){ ?>
			<div class="cont-principal_block">
				<?php
							$date = date_create($value->field_fecha['und'][0]['value']); ?>
				<div class="cont-prin-video" idvideo="<?php print $value->field_url_video['und'][0]['video_id']; ?>" title="<?php print $value->title; ?>" fechaA="<?php print date_format($date, 'F j'); ?>" fechaB="<?php print date_format($date, 'gA'); ?>" ciudad="<?php print $value->field_ciudad['und'][0]['value']; ?>" body="<?php print $value->body['und'][0]['value'];?> ">
					<iframe id='ytplayer' type='text/html' width='500' height='390' src='http://www.youtube.com/embed/<?php print $value->field_url_video['und'][0]['video_id']; ?>?autoplay=0' frameborder='0' ></iframe>
				</div>
				<div class="cont-prin-resto">
					<h2 class="titulo-prin"><?php print $value->title; ?></h2>
					<span class="ciudad"><?php print $value->field_ciudad['und'][0]['value']; ?></span>
					<div class="cont-fechas">
							<span class="fechaA"><?php print date_format($date, 'F j'); ?></span>
							<span class="fechaB"><?php print date_format($date, 'gA'); ?></span>
					</div>
					<p class="body-prin-conciertos">
						<?php print $value->body['und'][0]['value']; ?>
					</p>
				</div>
			</div>
	<?php } $aux++; }  ?>
	<div>Recomendados</div>
	<?php
	$aux = 1; 
	foreach ($variables['idnodeActual'] as $value) {
		if($aux==1){

		}else{ $date = date_create($value->field_fecha['und'][0]['value']); ?>
			<div class="cont-item">
			<div class="cont-video" idvideo="<?php print $value->field_url_video['und'][0]['video_id']; ?>" title="<?php print $value->title; ?>" fechaA="<?php print date_format($date, 'F j'); ?>" fechaB="<?php print date_format($date, 'gA'); ?>" ciudad="<?php print $value->field_ciudad['und'][0]['value']; ?>" body="<?php print $value->body['und'][0]['value'];?> ">
				<img alt="<?php print $value->title; ?>" title="<?php print $value->title; ?>" width="100px" height="100px" src="http://img.youtube.com/vi/<?php print $value->field_url_video['und'][0]['video_id']; ?>/0.jpg" />
				<div class="cont-title">
				<?php print $value->title; ?>
				</div>
			</div>
			
		</div>
		<?php } $aux++;
	}

	?>
</div>