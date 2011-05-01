<!-- custom fields for fb appearance -->

<div id="fbpage-options-2">

	<!-- <h4>Show title ?</h4> -->
	
	<dl>
   <dt><label for="_myfbapp[showtitle]"><?php echo  __("Show Title", 'myfbpage_textdomain' ); ?> </label> </dt>
			<dd><input  type="checkbox" <?php if ( $myfbapp['showtitle'] !== 'showtitle' ){ echo ''; } else {echo 'checked="checked"';} ?>" id="_myfbapp[showtitle]" name="_myfbapp[showtitle]" value="showtitle" /></dd>
	
	<dt><?php echo  __("Select Skin", 'myfbpage_textdomain' ); ?> </dt>
			<dd class="skin_options">
			<label class="skin_opt" >
			<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/skins/fbstyle-00.png" width="200" alt="fbstyle-00" />
			<input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-00" <?php if ( (empty($myfbapp['fbskin'])) || ($myfbapp['fbskin'] == 'fbstyle-00') ) {echo "checked=1";} ?> /> Default css </label>
			<label class="skin_opt" >
			<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/skins/fbstyle-01.png" width="200" alt="fbstyle-01" />
			<input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-01" <?php if ($myfbapp['fbskin'] == 'fbstyle-01') {echo "checked=1";}?> /> CoolProf </label>
			<label class="skin_opt" >
			<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/skins/fbstyle-02.png" width="200" alt="fbstyle-02" />
			<input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-02" <?php if ($myfbapp['fbskin'] == 'fbstyle-02') {echo "checked=1";}?> /> WebPro2 </label>
			<label class="skin_opt" >
			<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/skins/fbstyle-03.png" width="200"  alt="fbstyle-03" />
			<input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-03" <?php if ($myfbapp['fbskin'] == 'fbstyle-03') {echo "checked=1";}?> /> K2 </label>
			<label class="skin_opt" >
			<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/skins/fbstyle-04.png" width="200"  alt="fbstyle-04" />
			<input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-04" <?php if ($myfbapp['fbskin'] == 'fbstyle-04') {echo "checked=1";}?> /> Bold Retro </label>
			<label class="skin_opt" >
			<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/skins/fbstyle-05.png" width="200"  alt="fbstyle-05" />
			<input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-05" <?php if ($myfbapp['fbskin'] == 'fbstyle-05') {echo "checked=1";}?> /> Batik Classic </label>
			</dd>		
					
	</dl>	
	
	
	<hr class="clear" />		
	</div>