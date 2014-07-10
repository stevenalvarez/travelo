<?php
/**
 *
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

$cakeDescription = __d('cake_dev', 'Travelo -  admin');
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        var BASE_URL = '<?php echo $this->webroot; ?>';
    </script>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
        echo $this->Html->css(array('cake.generic','bootstrap.min.css','style_admin','uploadify.css','flick/jquery-ui-1.8.16.custom.css'));
        echo $this->fetch('css');
        echo $this->fetch('meta');
	?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript">
        var BASE_URL = '<?php echo $this->webroot; ?>';
    </script>
    <?php
        echo $this->Html->script(array('bootstrap.min.js','jquery.uploadify.min.js','jquery-ui-1.8.16.custom.min'));
        echo $this->fetch('script');    
    ?>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>            
</head>
<body>
    <?php echo $this->element('admin/navbar')?>
	<div id="container" class="container" style="padding-top: 52px;">
		<div id="content" class="row">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>                
		<div id="footer">
            <div class="container">
                <p class="pull-right"><a href="#">Back to top</a></p>
            </div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
