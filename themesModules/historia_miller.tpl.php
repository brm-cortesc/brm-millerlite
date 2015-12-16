<?php
foreach ($variables['nodeHistory'] as $value) {
	var_dump($value->title);
	var_dump($value->body['und'][0]['value']);
	var_dump($value->field_image['und'][0]['uri']);
}

?>