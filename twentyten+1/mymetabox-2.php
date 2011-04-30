<!-- custom fields for fb appearance -->

<div id="fbpage-options-2">

	<!-- <h4>Show title ?</h4> -->
	
	<dl>
   <dt><label for="_myfbapp[showtitle]"><?php echo  __("Show Title", 'myfbpage_textdomain' ); ?> </label> </dt>
			<dd><input  type="checkbox" <?php if ( $myfbapp['showtitle'] !== 'showtitle' ){ echo ''; } else {echo 'checked="checked"';} ?>" id="_myfbapp[showtitle]" name="_myfbapp[showtitle]" value="showtitle" /></dd>
	
	<dt><?php echo  __("Select Skin", 'myfbpage_textdomain' ); ?> </dt>
			<dd>
			<label ><input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-00" <?php if ( (empty($myfbapp['fbskin'])) || ($myfbapp['fbskin'] == 'fbstyle-00') ) {echo "checked=1";} ?> /> Default css </label>
			<label ><input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-01" <?php if ($myfbapp['fbskin'] == 'fbstyle-01') {echo "checked=1";}?> /> CoolProf </label>
			<label ><input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-02" <?php if ($myfbapp['fbskin'] == 'fbstyle-02') {echo "checked=1";}?> /> WebPro2 </label>
			<label ><input type="radio" name="_myfbapp[fbskin]"  value="fbstyle-03" <?php if ($myfbapp['fbskin'] == 'fbstyle-03') {echo "checked=1";}?> /> Skin-03 </label>
			</dd>		
					
	</dl>	
	
	
	<hr class="clear" />		
	</div>