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

        // jQuery CDN
        echo $this->Html->script('//code.jquery.com/jquery-1.10.2.min.js');

        // Twitter Bootstrap 3.0 CDN
        echo $this->Html->css('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css');
        echo $this->Html->css('jumbotron-narrow.css');
        echo $this->Html->css('bootstrap_additional.css');
        echo $this->Html->script('//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js');

        echo $this->Html->script('//codeorigin.jquery.com/jquery-1.10.2.min.js');
        echo $this->Html->script('//codeorigin.jquery.com/ui/1.10.3/jquery-ui.min.js');
        echo $this->Html->css('//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css');

        echo $this->Js->writeBuffer( array( 'inline' => 'true'));

/*
		echo $this->Html->css('bootstrap.css');
		echo $this->Html->css('portfolio.css');
		echo $this->Html->css('font-awesome.css');
		echo $this->Html->css('font-awesome-ie7.css');
		echo $this->Html->css('../js/shadowbox/shadowbox.css');
		echo $this->Html->css('jquery.jscrollpane.css');
        echo $this->Html->css('style.css');
        echo $this->Html->css('common.css');

		echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
		echo $this->Html->script('bootstrap.js');
		echo $this->Html->script('shadowbox/shadowbox.js');
		echo $this->Html->script('jquery.easing.1.3.js');
		echo $this->Html->script('jquery.mousewheel.js');
		echo $this->Html->script('jquery.contentcarousel.js');
*/
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<div class="header">
		<?php //echo $this->element('nav_bar'); ?>
            <ul class="nav nav-pills pull-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <h3 class="text-muted">Project name</h3>
		</div>
        <?php echo $this->fetch('content'); ?>
		<div class="footer">
        </div>
	</div>

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
