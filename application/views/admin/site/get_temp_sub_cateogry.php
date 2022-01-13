<label>Select Sub Category<b style="color:#FF0000">*</b></label>
<select id="sub_category_id" name="sub_category_id" class="form-control"  onchange="sub_category_idr()">
 <?php foreach($viedatmydata as $rows) { ?>
 <option value="<?php echo $rows->category_name;  ?>"><?php echo $rows->category_name;  ?></option>
 <?php } ?>
 </select>
    <span style="color:red" id="sub_category_idr"></span>
