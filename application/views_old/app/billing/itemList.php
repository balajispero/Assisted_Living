<select name="particular" id="particular" class="form-control input-sm" style="width: 100%;" required onChange="getItemRate(this.value);">
	<option value="">- Particular Item -</option>
	<?php 
	foreach($druglist as $drug_list){?>
	<option value="<?php echo $drug_list->cat_id;?>"><?php echo $drug_list->drug_name;?></option>
	<?php }?>
</select>
<input type="hidden" name="particular_name" id="particular_name" value="<?php echo $drug_list->cat_id?>">
