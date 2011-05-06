<!-- custom fields for fb appearance -->

<div id="fbpage-options-2">

	<!-- <h4>Show title ?</h4> -->
	
	<dl>
   <dt><label for="_myfbapp[showtitle]"><?php echo  __("Show Title", 'myfbpage_textdomain' ); ?> </label> </dt>
			<dd><input  type="checkbox" <?php if ( $myfbapp['showtitle'] !== 'showtitle' ){ echo ''; } else {echo 'checked="checked"';} ?>" id="_myfbapp[showtitle]" name="_myfbapp[showtitle]" value="showtitle" /></dd>
	
	<dt><strong><?php echo  __("Select Skin", 'myfbpage_textdomain' ); ?> </strong></dt>
			<dd class="skin_options">
			<div id="selectedskin">
				<img src="<?php echo STYLESHEET_URL ?>/skins/<?php if ( !empty ($myfbapp['fbskin'])){echo $myfbapp['fbskin'];} else { echo 'fbstyle-00'; } ?>.png" width="200" alt="fbstyle-00" />
				</div>
				
			<label class="skin_opt" for="fbstyle-00" >
				<a href="<?php echo STYLESHEET_URL ?>/skins/fbstyle-00.png">
				<img src="<?php echo STYLESHEET_URL ?>/skins/fbstyle-00.png" width="200" alt="fbstyle-00" />
				<span><input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-00" id="fbstyle-00" <?php if ( (empty($myfbapp['fbskin'])) || ($myfbapp['fbskin'] == 'fbstyle-00') ) {echo "checked=1";} ?> /> Default</span>
				</a> 
				</label>
			<label class="skin_opt" for="fbstyle-01" >
				<a href="<?php echo STYLESHEET_URL ?>/skins/fbstyle-01.png">
					<img src="<?php echo STYLESHEET_URL ?>/skins/fbstyle-01.png" width="200" alt="fbstyle-01" />
					<span><input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-01" id="fbstyle-01" <?php if ($myfbapp['fbskin'] == 'fbstyle-01') {echo "checked=1";}?> /> CoolProf</span>
					</a>
				</label>
			<label class="skin_opt" for="fbstyle-02" >
				<a href="<?php echo STYLESHEET_URL ?>/skins/fbstyle-02.png">
				<img src="<?php echo STYLESHEET_URL ?>/skins/fbstyle-02.png" width="200" alt="fbstyle-02" />
				<span><input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-02" id="fbstyle-02" <?php if ($myfbapp['fbskin'] == 'fbstyle-02') {echo "checked=1";}?> /> WebPro2</span>
				</a>
				</label>
			<label class="skin_opt" for="fbstyle-03" >
				<a href="<?php echo STYLESHEET_URL ?>/skins/fbstyle-03.png">
				<img src="<?php echo STYLESHEET_URL ?>/skins/fbstyle-03.png" width="200"  alt="fbstyle-03" />
				<span><input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-03" id="fbstyle-03" <?php if ($myfbapp['fbskin'] == 'fbstyle-03') {echo "checked=1";}?> /> K2</span>
				</a>
				</label>
			<label class="skin_opt" for="fbstyle-04" >
				<a href="<?php echo STYLESHEET_URL ?>/skins/fbstyle-04.png">
				<img src="<?php echo STYLESHEET_URL ?>/skins/fbstyle-04.png" width="200"  alt="fbstyle-04" />
				<span><input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-04" id="fbstyle-04" <?php if ($myfbapp['fbskin'] == 'fbstyle-04') {echo "checked=1";}?> /> Bold Retro</span>
				</a> 
				</label>
			<label class="skin_opt" for="fbstyle-05" >
				<a href="<?php echo STYLESHEET_URL ?>/skins/fbstyle-05.png">
				<img src="<?php echo STYLESHEET_URL ?>/skins/fbstyle-05.png" width="200"  alt="fbstyle-05" />
				<span><input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-05" id="fbstyle-05" <?php if ($myfbapp['fbskin'] == 'fbstyle-05') {echo "checked=1";}?> /> Batik Classic</span> 
				</a>
				</label>
			<hr class="clear" style="margin-bottom: 24px;" />		
			</dd>
	<dt><label for="style_override">CSS Override</label>
		<p>Place your custom css here to override the skin's.</p>
		</dt>							
		<dd>
			
			<textarea rows="20" cols="60" name="_myfbapp[skinover]" id="style_override" ><?php
				if ( !empty($myfbapp[skinover]) ) { echo $myfbapp[skinover];} 
				  ?></textarea>
			
			</dd>
	</dl>	
	
	<hr class="clear" />		
	</div>