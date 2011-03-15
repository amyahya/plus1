<div id="fbpage-options">
	<label for="_myfbapp[app_id]"><?php echo  __("Fb App ID", 'myfbpage_textdomain' ); ?> </label> 
				<input type="text" id="_myfbapp[app_id]" name="_myfbapp[app_id]" value="<?php if(!empty($myfbapp['app_id'])) echo $myfbapp['app_id']; ?>" size="128" />
				
	<br/><label for="_myfbapp[api_key]"><?php echo  __("Fb App Api Key", 'myfbpage_textdomain' ); ?> </label> 
				<input type="text" id="_myfbapp[api_key]" name="_myfbapp[api_key]" value="<?php if(!empty($myfbapp['api_key'])) echo $myfbapp['api_key']; ?>" size="128" />
				
	<br/><label for="_myfbapp[app_secret]"><?php echo  __("Fb App Secret", 'myfbpage_textdomain' ); ?> </label> 
				<input type="text" id="_myfbapp[app_secret]" name="_myfbapp[app_secret]" value="<?php if(!empty($myfbapp['app_secret'])) echo $myfbapp['app_secret']; ?>" size="128" />
				
		</div>