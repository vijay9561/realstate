<label>Select Sub Category<b style="color:#FF0000">*</b></label>
<select name="get_sub_sub_category"  id="get_sub_sub_category" class="form-control"   onchange="allsearchsubcatoriesr()">
 <?php foreach($viedatmydata as $rows) { ?>
 <option value="<?php echo $rows->scid;  ?>"><?php echo $rows->category_name;  ?></option>
 <?php } ?>
 </select>
    <span style="color:red" id="allsearchsubcatoriesr"></span>
