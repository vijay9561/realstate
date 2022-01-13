
<div class="col-md-3" style="margin-left: -137px;">
                <div class="list-group">
      <ul style="list-style:none"><li <?php echo $page=='Home'?'class="active"':''; ?>><a  class="list-group-item <?php echo $page=='Home'?'active':''; ?>" href="<?php  echo site_url(); ?>">Home</a></li>
  <li><a href="<?php echo site_url();?>customer" class="list-group-item <?php echo $page=='Add Customer'?'active':''; ?>">Customer</a></li>
                    <li><a  class="list-group-item  <?php echo $page=='Order Now'?'active':''; ?>" href="<?php echo site_url();?>order-now">Order Now</a></li>
                    <li><a href="<?php echo site_url();?>email_template" class="list-group-item <?php echo $page=='Add Email Format'?'active':''; ?>">Email Template</a></li>
                     <li><a href="<?php echo site_url();?>view_order" class="list-group-item <?php echo $page=='View Order'?'active':''; ?>">View Order</a></li>
                       <li><a href="<?php echo site_url();?>send_email_list" class="list-group-item <?php echo $page=='Send Email List'?'active':''; ?>">Send Email</a></li>
                        <li><a href="<?php echo site_url();?>download_pdf" class="list-group-item">Pdf Type Demo</a></li>
                </div>
            </div>