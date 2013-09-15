<script style="text/javascript">
$(document).ready(function(){
    $('#ca-container').contentcarousel({
        // speed for the sliding animation
        sliderSpeed     : 500,
        // easing for the sliding animation
        sliderEasing    : 'easeOutExpo',
        // speed for the item animation (open / close)
        itemSpeed       : 500,
        // easing for the item animation (open / close)
        itemEasing      : 'easeOutExpo',
        // number of items to scroll at a time
        scroll          : 1
    });
	Shadowbox.init({
	    // skip the automatic setup again, we do this later manually
	    skipSetup: true
	});
	
	window.onload = function() {
	
	    // set up all anchor elements with a "thumbnail" class to work with Shadowbox
	    Shadowbox.setup("a.thumbnail");
	
	};
});
</script>
<?php 
$templates = array(
    array(
        'Template' => array(
            'title' => 'FRONT ROW',
            'url' => '/img/templates/simple_landing_page/front_row.png',
            'description' => 'FRONT ROW is a simple landing page theme.<br />FRONT ROW はシンプルなランディングページテーマです。サービスの紹介に適しています。'
        )
    ),
    array(
        'Template' => array(
            'title' => 'Lando',
            'url' => '/img/templates/simple_landing_page/Lando.png',
            'description' => 'Lando is a simple landing page theme.<br />Lando はシンプルなランディングページテーマです。サービスの紹介に適しています。'
        ),
    ),
    array(
        'Template' => array(
            'title' => 'clean canbas',
            'url' => '/img/templates/simple_landing_page/clean_canbas.png',
            'description' => 'clean canbas is a simple landing page theme.<br />clean canbas はシンプルなランディングページテーマです。サービスの紹介に適しています。'
        ),
    ),
    array(
        'Template' => array(
            'title' => 'Sunrise.png',
            'url' => '/img/templates/app_landing_page/Sunrise.png',
            'description' => 'Sunrise is a simple landing page theme.<br />Sunrise はシンプルなランディングページテーマです。サービスの紹介に適しています。'
        ),
    ),
)
?>
		<div class="container">
			<div id="ca-container" class="ca-container">
				<div class="ca-wrapper thumbnails">
					<?php foreach($templates as $template):?>
					<div class="ca-item ca-item-1">
						<div class="ca-item-main">
							<?php
							echo $this->Html->link(
							    $this->Html->image($template['Template']['url'], array('alt' => 'front_row'))
							    . $this->Html->tag('span', $this->Html->tag('i', '', array('class' => 'icon-plus-sign')), array('class' => 'caption')),
							    $template['Template']['url'],
							    array('escape' => false, 'class' => 'thumbnail')
							);
							echo $this->Html->link('説明を見る', array('#'), array('class' => 'ca-more'));
							?>
						</div>
						<div class="ca-content-wrapper">
							<div class="ca-content">
								<h6><?php echo $template['Template']['title']?></h6>
								<a href="#" class="ca-close">close</a>
								<div class="ca-content-text"><?php echo $template['Template']['description']?></div>
								<ul>
									<li><a href="#">このテンプレートでサイトを作る</a></li>
								</ul>
							</div>
						</div>
					</div>
					<?php endforeach;?>
				</div>
            </div><!-- ca-wrapper -->
        </div><!-- ca-container -->