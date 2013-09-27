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
									<li><a href="pages/cafe">このテンプレートでサイトを作る</a></li>
								</ul>
							</div>
						</div>
					</div>
					<?php endforeach;?>
				</div>
            </div><!-- ca-wrapper -->
        </div><!-- ca-container -->


        <div class="page-about" id="about">
            <div class="container">
                <div class="page-heading">
                    <h1><span>//</span> 特徴</h1>
                </div>
                <div class="row">
                    <div class="span4 content">
                        <h2>説明1</h2>
                        <h3><p>WEBページを15秒で作成できます。</p></h3>
                    </div>
                    <div class="span4 content">
                        <h2>説明2</h2>
                        <h3><p>本サービスは無料でお使い頂けます。</p></h3>
                    </div>
                    <div class="span4 content">
                        <h2>説明3</h2>
                        <h3><p>目的に最適なテンプレートをお選び頂けます。</p></h3>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="page-services" id="contact">
            <div class="container">
                <div class="page-heading">
                    <h1><span>//</span> 活用事例</h1>
                </div>
                <ul class="thumbnails">
                    <li class="span4">
                        <a href="http://d1daqzcwh0982r.cloudfront.net/img/post/member/biz_photo/10000128/1000012879_lrg.jpg"  class="thumbnail">
                            <img src="http://d1daqzcwh0982r.cloudfront.net/img/post/member/biz_photo/10000128/1000012877_sml_sq.jpg" alt="">
                            <span class="caption"><i class="icon-plus-sign"></i></span>
                        </a>
                    </li>
                    <li class="span4">
                        <a href="http://ecx.images-amazon.com/images/I/51pX55SGkFL.jpg" class="thumbnail">
                            <img src="http://ecx.images-amazon.com/images/I/51pX55SGkFL._SL500_SS100_.jpg" alt="">
                            <span class="caption"><i class="icon-plus-sign"></i></span>
                        </a>
                    </li>
                    <li class="span4">
                        <a href="http://kokusai-implant.jp/event2011.html" target="_blank">
                            <img src="http://kokusai-implant.jp/event/image/event-016.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="page-contact" id="contact">
            <div class="container">
                <div class="page-heading">
                    <h1><span>//</span> 連絡先</h1>
                </div>
                <div class="row">
                    <div class="span6 content">
                        <h2>コンタクト</h2>
                        <p>ご意見ご感想をお願いします！</p>
                        <br/>
                        <?php echo $this->element('google_form'); ?>
                    </div>
                    <br/>
                    <div class="span6 content">
                        <h3>paraichi株式会社</h3>
                        <p>〒123-4567<br>東京都中央区<br>茅場町<br>1丁目-2-3<br></p>
                        <p>
                            <strong>Tel:</strong> 0123-456-789<br>
                            <strong>Email:</strong> <a href="">info@website.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <br/>
