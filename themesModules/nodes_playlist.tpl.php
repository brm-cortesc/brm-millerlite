<?php
	//var_dump($variables['idnodeActual']);
	//var_dump($variables['filesMp3']);

?>
Reproduciendo
<div class="cont-module-playlist">
	<?php $aux = 1;
	foreach ($variables['idnodeActual'] as $value) { 
		if($aux==1){ ?>
			<div class="cont-principal_block_playlist">
				<?php
				if(isset($value->field_fecha['und'][0]['value'])){
					$date = date_create($value->field_fecha['und'][0]['value']); 
				} ?>
				<?php if(isset($value->field_video_url_playlist['und'][0]['video_id'])){ ?>
				<div class="cont-prin-video_playlist" idvideo="<?php print $value->field_video_url_playlist['und'][0]['video_id']; ?>" title="<?php print $value->title; ?>" body="<?php print $value->body['und'][0]['value'];?> ">
					<iframe id='ytplayer' type='text/html' width='500' height='390' src='http://www.youtube.com/embed/<?php print $value->field_video_url_playlist['und'][0]['video_id']; ?>?autoplay=0' frameborder='0' ></iframe>
				</div>
				<?php } ?>
				<div class="cont-prin-resto-playlist">
					<h2 class="titulo-prin-playlist"><?php print $value->title; ?></h2>
					<p class="body-prin-playlist"><?php print $value->body['und'][0]['value']; ?></p>
				</div>
			</div>
	<?php } $aux++; }  ?>
	<div>Recomendados</div>
	<?php
	$aux = 1; 
	foreach ($variables['idnodeActual'] as $value) {
		if($aux==1){

		}else{ 

			if(isset($value->field_fecha['und'][0]['value'])){
					$date = date_create($value->field_fecha['und'][0]['value']); 
				} ?>
			<div class="cont-item-playlist">
			<div class="cont-video-playlist" idvideo="<?php print $value->field_video_url_playlist['und'][0]['video_id']; ?>" title="<?php print $value->title; ?>" body="<?php print $value->body['und'][0]['value'];?> ">
				<img alt="<?php print $value->title; ?>" width="100px" height="100px" src="http://img.youtube.com/vi/<?php print $value->field_video_url_playlist['und'][0]['video_id']; ?>/0.jpg" />
				<div class="cont-title-playlist">
				<?php print $value->title; ?>
				</div>
				<?php 
				foreach ($variables['filesMp3'] as $values) {
					foreach ($values as $key => $valueMp3) {
						$idNodes = substr($key, -2);
						if($idNodes == $value->nid){?>
							<div class="cont-playlist-mp3s">
								<?php print file_create_url($valueMp3['uri']); ?>
							</div>
						<?php }
					}
				}	
			?>
			</div>
		</div>
		<?php } $aux++;
	}

	?>
<div class="repro">
	
	<?php $aux = 1;
		foreach ($variables['idnodeActual'] as $value) { 
			if($aux==1){ 
					foreach ($variables['filesMp3'] as $values) {
						foreach ($values as $key => $valueMp3) {
							$idNodes = $rest = substr($key, -2);
							if($idNodes == $value->nid){ 
								//$etiqueta = id3_get_tag(file_create_url($valueMp3['uri']));
								//print_r($etiqueta);?>
							  	<audio controls>
							  		<source src="<?php print file_create_url($valueMp3['uri']); ?>" type="audio/mpeg">
							  		Your browser does not support the audio element.
								</audio>
							<?php }
						}
					}
			} 
		$aux++; 
		}  
	?>
	
</div>
</div>