<!--<label>Select Sub Category<b style="color:#FF0000">*</b></label>-->
<select name="allsearchsubcatories123"  id="allsearchsubcatories123" class="form-control customewidth" onchange="allsearchsubcatoriesr()" style="margin-bottom: 10px;" >
 <?php foreach($viedatmydata as $rows) { ?>
 <option value="<?php echo $rows->scid;  ?>"><?php echo $rows->category_name;  ?></option>
 <?php } ?>
 </select>
    <span style="color:red" id="allsearchsubcatoriesr"></span>
