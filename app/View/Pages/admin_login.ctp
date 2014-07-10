<?php $this->loadHelper('Session'); ?>
<div id="pagewrap">
    <div id="contents">
		<div id="content_login">
            <a href="<?php echo $this->webroot;?>">
                <?php echo $this->Html->image('logo.png', array('alt' => '', 'border' => '0', 'width' => 'auto', 'height' => 'auto')) ?>
            </a>
        	<form id="form_login" action="<?php echo $this->webroot."usuarios/login"?>" method="post">
                <table id="login">
        	    	<tr>
                        <td><?php echo __("Username"); ?></td>
                        <td>
                            <input name="data[Usuario][email]" type="text" size="40"/>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo __("Password"); ?></td>
                        <td>
                            <input name="data[Usuario][password]" type="password" size="40" onKeyDown="if (event.keyCode==13) this.form.submit();"/>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input style="cursor: pointer; float: left;" id="submit" type="submit" value="<?php echo __("Entrar"); ?>" /><?php echo $this->Session->flash(); ?>
                        </td>
                    </tr>
                </table>
          	</form>
      	</div>
	</div>
</div>