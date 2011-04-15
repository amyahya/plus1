<div id="fbpage-options">

	<h4>Facebook App Details</h4>
	<dl>
	<dt><label for="_myfbapp[app_id]"><?php echo  __("Fb App ID", 'myfbpage_textdomain' ); ?> </label> </dt>
		 <dd><input type="text" id="_myfbapp[app_id]" name="_myfbapp[app_id]" value="<?php if(!empty($myfbapp['app_id'])) echo $myfbapp['app_id']; ?>" size="64" /></dd>
				
	<dt><label for="_myfbapp[api_key]"><?php echo  __("Fb App Api Key", 'myfbpage_textdomain' ); ?> </label> </dt>
			<dd><input type="text" id="_myfbapp[api_key]" name="_myfbapp[api_key]" value="<?php if(!empty($myfbapp['api_key'])) echo $myfbapp['api_key']; ?>" size="64" /></dd>
				
	<dt><label for="_myfbapp[app_secret]"><?php echo  __("Fb App Secret", 'myfbpage_textdomain' ); ?> </label> </dt>
			<dd><input type="text" id="_myfbapp[app_secret]" name="_myfbapp[app_secret]" value="<?php if(!empty($myfbapp['app_secret'])) echo $myfbapp['app_secret']; ?>" size="64" /></dd>	
	
	</dl>
	<hr class="clear" />
	<h4>Facebook Page Options</h4>
	
	<dl>
   <dt><label for="_myfbapp[app_secret]"><?php echo  __("Fb Show Title", 'myfbpage_textdomain' ); ?> </label> </dt>
			<dd><input  type="checkbox" <?php if ( $myfbapp['showtitle'] !== 'showtitle' ){ echo ''; } else {echo 'checked="checked"';} ?>" id="_myfbapp[showtitle]" name="_myfbapp[showtitle]" value="showtitle" /></dd>
	</dl>	
	
	
	<hr class="clear" />		
	</div>