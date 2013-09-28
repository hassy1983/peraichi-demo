<?php
Configure::write('debug', 0);
$this->layout = 'cafe'
?>
<?php
$this->Html->css('cafe', null, array('inline' => false)); 
?>
<?php echo $this->element('nav_bar');?>
	<div id="wrapper">
		<header>
			<div id ="h_contents">
				<h1><?php echo $this->Html->Image("/img/cafe/header_logo.png", array("class" => "logo_img"));?>　<span class="edit">Peraichi Cafe</span></h1>
				<ul id ="nav"> 
					<li id = "nav1"><a href="#content1"><span class="edit">無農薬野菜だから、安心。</span></a></li>
					<li id = "nav2"><a href="#content2"><span class="edit">メニュー</span></a></li>
					<li id = "nav3"><a href="#content3"><span class="edit">店舗情報</span></a></li>
				</ul>
			</div>
		</header>
		<div id="content_top" class="content">
			<div class="text_box">
				<h2 class="edit">Peraichi Cafe</h2>
				<p class="edit_area">「Peraichi Cafe」の野菜・コーヒー豆はすべて、<br>
					“産地直送の無農薬有機野菜”を使用しています。<br><br>
				あんしん・あんぜんの野菜を使った美味しい料理を<br>
					アットホームでやすらぎのある店内でお楽しみください。</p>
			</div>	
		</div>
		<div id="content1" class="content">
			<div class="text_box">
				<h2 class="edit">有機無農薬野菜だから、あんしん・あんぜん</h2>
				<h3 class="edit">自信があるからすべての生産元を実名公開しています。</h3>
				<p class="edit_area">★Peraichi Cafeで使用する野菜はすべて、生産元の実名・写真を公開<br>
				★お店のスタッフが直接農家を訪れ、自分たちの目で生産現場をチェック<br>
				★味・安全性ともに自信をもってご提供できる野菜だけをお召し上がりください</p>
			</div>
			<div class="images">
				<div id="c1_img1" class="image"><?php echo $this->Html->Image("/img/cafe/content1_img1.jpg");?></div>
				<div id="c1_img2" class="image"><?php echo $this->Html->Image("/img/cafe/content1_img2.jpg");?></div>
				<div id="c1_img3" class="image"><?php echo $this->Html->Image("/img/cafe/content1_img3.jpg");?></div>
			</div>
		</div>
		<div id="content2" class="content">
			<div class="text_box">
				<h2 class="edit">Peraichi Cafe メニュー</h2>
				<h3 id="menu_index1" class="edit">Foods & Drinks</h3>
				<ul id="image_menus1" class="image_menus">
					<li>
						<div class="img_menu_img">
							<?php echo $this->Html->Image("/img/cafe/content2_img1.jpg", array('width' => '95', 'height' => '95'));?>
						</div>
						<div class="img_menu_txt">
							<p class="edit_area">定番<br>
							Peraichiサラダ<br>
							¥450</p>
						</div>
					</li>
					<li>
						<div class="img_menu_img">
							<?php echo $this->Html->Image("/img/cafe/content2_img2.jpg", array('width' => '95', 'height' => '95'));?>
						</div>
						<div class="img_menu_txt">
							<p class="edit_area">深い味わい<br>
							Peraichiコーヒー<br>
							¥280</p>
						</div>
					</li>
				</ul>
				<ul id="image_menus2" class="image_menus">
					<li>
						<div class="img_menu_img">
							<?php echo $this->Html->Image("/img/cafe/content2_img3.jpg", array('width' => '95', 'height' => '95'));?>
						</div>
						<div class="img_menu_txt">
							<p class="edit_area">ボリューム満点<br>
							自然派サンド<br>
							¥500</p>
						</div>
					</li>
					<li>
						<div class="img_menu_img">
							<?php echo $this->Html->Image("/img/cafe/content2_img4.jpg", array('width' => '95', 'height' => '95'));?>
						</div>
						<div class="img_menu_txt">
							<p class="edit_area">女性人気No.1<br>
							抹茶・ラテ<br>
							¥350</p>
						</div>
					</li>
				</ul>
				<ul id="image_menus3" class="image_menus">
					<li>
						<div class="img_menu_img">
							<?php echo $this->Html->Image("/img/cafe/content2_img5.jpg", array('width' => '95', 'height' => '95'));?>
						</div>
						<div class="img_menu_txt">
							<p class="edit_area">甘〜い<br>
							パンプキンスープ<br>
							¥300</p>
						</div>
					</li>
					<li>
						<div class="img_menu_img">
							<?php echo $this->Html->Image("/img/cafe/content2_img6.jpg", array('width' => '95', 'height' => '95'));?>
						</div>
						<div class="img_menu_txt">
							<p class="edit_area">甘カワイイ<br>
							カプチーノ<br>
							¥350</p>
						</div>
					</li>
				</ul>

				<h3 id="menu_index2" class="edit">More</h3>
				<ul id="text_menus1" class="text_menus">
					<li class="edit">Pasta　¥680</li>
					<li class="edit">レモンティー　¥280</li>
					<li class="edit">ブラッドオレンジ　¥290</li>
				</ul>
				<ul id="text_menus2" class="text_menus">
					<li class="edit">Pizza　¥880</li>
					<li class="edit">カフェモカ　¥360</li>
					<li class="edit">グレープフルーツジュース　¥290</li>
				</ul>
				<ul id="text_menus3" class="text_menus">
					<li class="edit">オリジナルスイーツ　¥250</li>
					<li class="edit">塩キャラメルラテ　¥400</li>
					<li class="edit">赤ニンジンジュース　¥350</li>
				</ul>
			</div>
		</div>
		<div id="content3" class="content">
			<div class="text_box">
				<div class="float_left">
					<h2 class="edit">店舗情報</h2>
					<p id="address_txt" class="edit_area">
						【所在地】<br>
						〒104-0033　東京都中央区新川1-3-4<br>
						<br>
						【電話番号】<br>
						03-1234-5678<br>
						<br>
						【メールアドレス】<br>
						info@peraichi.com
					</p>
				</div>
				<div id="map_img">
					<?php echo $this->Html->Image("/img/cafe/content3_map.jpg", array('width' => '435', 'height' => '300'));?>
				</div>
			</div>
		</div>
		<footer>
			<p class="edit">Powered by Peraichi</p>
		</footer>		
	</div>
