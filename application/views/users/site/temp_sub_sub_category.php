<!--<label>Select Sub Category<b style="color:#FF0000">*</b></label>-->
<label>Brand Name<b style="color:#FF0000"> *</b></label>
<select name="car_name"  id="car_name" class="form-control"   onchange="car_namer()" required>
 <?php foreach($viedatmydata as $rows) { ?>
 <option value="<?php echo $rows->child_category_name;  ?>"><?php echo $rows->child_category_name;  ?></option>
 <?php } ?>
 </select>
    <span style="color:red" id="sub_sub_categoryr"></span>
