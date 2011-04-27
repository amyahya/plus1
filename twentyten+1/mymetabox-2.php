<!-- custom fields for fb appearance -->

<div id="fbpage-options">

	<!-- <h4>Show title ?</h4> -->
	
	<dl>
   <dt><label for="_myfbapp[app_secret]"><?php echo  __("Fb Show Title", 'myfbpage_textdomain' ); ?> </label> </dt>
			<dd><input  type="checkbox" <?php if ( $myfbapp['showtitle'] !== 'showtitle' ){ echo ''; } else {echo 'checked="checked"';} ?>" id="_myfbapp[showtitle]" name="_myfbapp[showtitle]" value="showtitle" /></dd>
	</dl>	
	
	
	<hr class="clear" />		
	</div>