<select name="drug_name" id="drug_name" class="form-control input-sm"style="width: 100%;" required onChange="getDrugRate(this.value);">
	<option value="">- Intervention List -</option>
	<?php 
	foreach($drug_name_lists as $drug_name_lists){?>
	<option value="<?php echo $drug_name_lists->med_cat_id;?>"><?php echo $drug_name_lists->drug_name;?></option>
	<?php }?>
</select>
<input type="hidden" name="medicine_name" id="medicine_name" value="<?php echo $drug_name_lists->med_cat_id?>">
