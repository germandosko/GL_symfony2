<?php $view->extend('::base.html.php') ?>
<?php $view['slots']->start('stylesheets') ?>
	<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/acmegraphic/css/galleriffic-3.css') ?>" type="text/css">
<?php $view['slots']->stop() ?>
<?php $view['slots']->start('javascripts') ?>
	<script type="text/javascript" src=" <?php echo $view['assets']->getUrl('bundles/acmegraphic/js/libs/jquery.galleriffic.js') ?>"></script> 
	<script type="text/javascript" src=" <?php echo $view['assets']->getUrl('bundles/acmegraphic/js/libs/jquery.opacityrollover.js') ?>"></script> 
	<script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/acmegraphic/js/libs/action_gallery.js') ?>"></script>
<?php $view['slots']->stop() ?>
<?php $view['slots']->start('change') ?>
	<div id="title_gallery"><span>Sample Designs</span></div>
	<!-- Start Advanced Gallery Html Containers -->
	<div id="gallery" class="content">
		<div id="controls" class="controls"></div>
		<div class="slideshow-container">
			<div id="loading" class="loader"></div>
			<div id="slideshow" class="slideshow"></div>
		</div>
		<div id="caption" class="caption-container"></div>
	</div>
	<div id="thumbs" class="navigation">
		<ul class="thumbs noscript">				
			<?php				
				for ($i = 1; $i <= $numFiles; $i++) {
					$html = '';				  
						$html .= '<li>';
							$html .= '<a class="thumb" href="' .$dir. '_m_' .$i. '.png" title="' .$nameCard. ' ' .$i. '">';
								$html .= '<img src="' .$dir. '_c_' .$i. '.png" alt="' .$nameCard. ' ' .$i. '" />';
							$html .= '</a>';
							$html .= '<div class="caption">';						
								$html .= '<div class="image-title">' .$nameCard. ' ' .$i. '</div>';							
							$html .= '</div>';
						$html .= '</li>';
					echo $html;
				}
			?>
		</ul>					
	</div>
	<!-- End Advanced Gallery Html Containers -->
	<div style="clear: both;"></div>
<?php $view['slots']->stop() ?>