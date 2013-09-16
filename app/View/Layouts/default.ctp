<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.css');
		echo $this->Html->css('portfolio.css');
		echo $this->Html->css('font-awesome.css');
		echo $this->Html->css('font-awesome-ie7.css');
		echo $this->Html->css('../js/shadowbox/shadowbox.css');
		echo $this->Html->css('jquery.jscrollpane.css');
		echo $this->Html->css('style.css');
		
		echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
		echo $this->Html->script('bootstrap.js');
		echo $this->Html->script('shadowbox/shadowbox.js');
		echo $this->Html->script('jquery.easing.1.3.js');
		echo $this->Html->script('jquery.mousewheel.js');
		echo $this->Html->script('jquery.contentcarousel.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div id="container">
		<div id="header">
		<?php echo $this->element('nav_bar'); ?>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
	<br/>
	<br/>
	<br/>
	
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
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
