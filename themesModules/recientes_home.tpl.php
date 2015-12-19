<h4 class="rec-m">RECIENTES </h4>
                    <?php
          	foreach ($variables['nodes_slider'] as $key => $value) { ?>
          		
          		<div class="recents-w">
		            <div class="rec-box">
		              <div class="pic-ct"></div>
		              <div class="txt-ct">
		                <h3 class="name-t-3"><?php print_r($value->title);?></h3>
		              </div>
		            </div>
		          </div>

          	<?php }
          ?>