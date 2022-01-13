<label>Brand Name<b style="color:#FF0000"> *</b></label>
<select type="text" class="form-control" id="car_name" onchange="car_namer();" name="car_name">
				<option value="">Select Brand Name</option>
				<?php  $car=$this->db->query("select bike_name from bike_master order by bike_name asc")->result(); foreach($car as $carname){ ?>
				<option value="<?php echo $carname->bike_name; ?>"><?php echo $carname->bike_name; ?></option>
				<?php } ?>
				</select>
				<span id="car_namer" style="color:red;"></span>