<select name="drug_name" id="drug_name" class="form-control input-sm" style="width: 100%;" required>
	<option value="">- Drug Name -</option>
	<?php if(!empty($drugnamelists)){
	foreach($drugnamelists as $drugnamelists){?>
	<option value="<?php echo $drugnamelists->med_cat_id;?>"><?php echo $drugnamelists->drug_name;?></option>
	<?php }}?>
</select>
<input type="hidden" name="medicine_name" id="medicine_name" value="<?php echo $drugnamelists->med_cat_id?>">
