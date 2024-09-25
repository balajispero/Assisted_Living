<select name="particular" id="particular" class="form-control input-sm" style="width: 100%;" required onChange="getItemRate(this.value);">
	<option value="">- Particular Item -</option>
	<?php 
	foreach($particularName as $particularName){?>
	<option value="<?php echo $particularName->particular_id;?>"><?php echo $particularName->particular_name;?></option>
	<?php }?>
</select>
<input type="hidden" name="particular_name" id="particular_name" value="<?php echo $particularName->particular_id?>">
