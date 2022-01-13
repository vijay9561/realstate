<style>

</style>
<script type="text/javascript">
    $(document).ready(function(){ 
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        }); 
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
 
    });
</script>
<style>

.fullwidth {
    width: 100%;
    margin-left: auto;
	margin-right: auto;
	max-width: initial;
}
.slider .slide {width: 100%; height: 100%;}

.slick-prev {
    left: 0;
    background: red;
}
.slick-next {
    right: 0;
    background: red;
}
.slick-dots {
  bottom: 0px;
  margin-left: 0; /* Fixes the visible horizontal scroll bar */
}
#mypatners{
width: 100%;
}
@media (max-width:500px){
#mypatners{
margin-left:2px;
width: 100%;
}
}
/* Slider */
.slick-slide {
    margin: 10px 5px;
}

.slick-slide img {
    width: 100%;
}

@media(max-width:500px){
.slick-slide {
margin:3px;
}
}
.slick-slider
{
    position: relative;

    display: block;
    box-sizing: border-box;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;

    display: block;
    overflow: hidden;

    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
  width:100%
	-webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;

    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;

    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;

    height: 100%;
    min-height: 1px;
	width:100%
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
	width:100%;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;

    height: auto;

    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
</style>

<script src="<?php echo base_url(); ?>assets/js/slick.js"></script>

<script>
if(screen.width < 800) {
$(document).ready(function(){
			$('.customer-logos').slick({
		
		slidesToShow:5,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: false,
		
			});
		});
	}else{
	$(document).ready(function(){
	$('.customer-logos').slick({
	slidesToShow:10,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
			});
		});
	}
</script>
<style>
.mobilecategory{
padding:2px;border: 1px solid #27DA93;border-radius: 4px; height:90px;
}
@media(max-width:768px){
.mobilecategory{
padding:2px;border: 1px solid #27DA93;border-radius: 4px; height:90px;
width:150px;
}
@media(max-width:500px){
.mobilecategory{
padding:2px;border: 1px solid #27DA93;border-radius: 4px; height:90px;
}
}
.custommyclass{
margin-right:-10px;
}
@media(max-width:7608px){
.custommyclass{
margin-right:3px;
}
}
@media(max-width:500px){
.custommyclass{
margin-right:3px;
}
}
.customer-logos{ width:100%;}

</style>
<div class="customer-logos" style="width:100%">
<?php   $viewdata=$this->db->query("select *from main_category where mid IN(1,3,4,5,6,7,8,9,10,11,12,13,14,15,16) order by mid asc")->result(); foreach( $viewdata as $rows) { ?>
  <div class="slide custommyclass"><a href="<?php echo site_url() ?>view_category?categories=<?php echo $rows->mid; ?>"><img class="mobilecategory" src="<?php echo base_url(); ?>adminassets/upload/category/<?php echo $rows->category_images ?>"  style=""></a></div>
  <?php } ?>
  </div>
	<br>

<br>

<?php /*><div id="demo5" class="scroll-img">
      <ul>
	  <?php   $viewdata=$this->db->query("select *from main_category where mid IN(1,3,4,5,6,7,8,9,10,11,12,13,14,15,16) order by mid asc")->result(); foreach( $viewdata as $rows) { ?>
    <li><a href="<?php echo site_url() ?>view_category?categories=<?php echo $rows->mid; ?>" target="_blank">
	<img style="height:150px; width:200px; " src="<?php echo base_url(); ?>adminassets/upload/category/<?php echo $rows->category_images ?>"></a></li>
		<?php } ?>
      </ul>
    </div>
	<br><?php */?>
	
<div class="footer">
	<div class="container">
		<div class="footer-top-at">
			<div class="col-md-3 amet-sed">
				<h4>Our Company</h4>
				<ul class="nav-bottom">
					<li><a href="<?php echo site_url(); ?>about">About Us</a></li>
					<!-- <li><a href="blog.html">For Sale By Owner Blog</a></li> -->
					<!-- <li><a href="mobile_app.html">Mobile</a></li> -->
					<li><a href="<?php echo site_url(); ?>terms">Terms & Conditions</a></li>
					<li><a href="<?php echo site_url(); ?>privacy">Privacy Policy</a></li>	
					<?php /*><li><a href="<?php echo site_url(); ?>faq">Frequently Asked Questions</a></li><?php */?>
					<li><a href="<?php echo site_url(); ?>sitemap">Site Map</a></li>
					<!-- <li><a href="blog.html">Blog</a></li> -->
					
				</ul>	
			</div>
			<div class="col-md-3 amet-sed ">
				<h4>Property Services</h4>
				   <ul class="nav-bottom">
						<li><a href="<?php echo site_url(); ?>residential-property?propertytype=Residential Property">Residential Property</a></li>
						<li><a href="<?php echo site_url(); ?>residential-property?propertytype=Commercial Property">Commercial Property </a></li>
						<li><a href="<?php echo site_url(); ?>residential-property?propertytype=Land/Plot">Land/Plot</a></li>
						<?php if(!$this->session->userdata('UID')){ ?>
						<li><a href="<?php echo site_url();?>login">Login</a></li>
						<li><a href="<?php echo site_url();?>register">Register</a></li>
						<?php } ?>
						<!--<li><a href="typo.html">Short Codes</a></li>	-->
					</ul>	
					
			</div>
			<div class="col-md-3 amet-sed ">
				<h4>Customer Support</h4>
					<ul class="nav-bottom">
						<li><a href="tel:8087245555"><i class="glyphicon glyphicon-phone"> </i> +91 8087 245 555</a></li>
						<li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i> +91 8805 723 555</a></li>
						<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> support@saibroking.com</a></li>
						<!--<li><a href="contact.html">Sitemap</a></li>
						<li><a href="career.html">Careers</a></li>
						<li><a href="feedback.html">Feedback</a></li>	-->
					</ul>	
					
			</div>
			<style>
			#youtuve a {
    text-decoration: none !important;}
	a:hover
  {
    color:#27da93;
    text-decoration:none;
    cursor:pointer;
   }
			</style>
			<div class="col-md-3 amet-sed">
				<h4>Keep In Touch</h4>
				<?php /*?<p>Mon-Fri, 7AM-7PM </p>
				<p>Sat-Sun, 8AM-5PM </p>
				<p>+91 - 9370 977 391</p>
					<ul class="nav-bottom">
						<!-- <li><a href="#">Live Chat</a></li> -->
						
						<li><a href="suggestion.html">Make a Suggestion</a></li>
					</ul>	<?php */?>
					<ul class="social">
						<li><a href="http://www.facebook.com/Sai-Broking-238756333209100" target="_blank"><i> </i></a></li>
						<li><a href="https://plus.google.com/107777935296318575709" target="_blank"><i class="gmail"> </i></a></li>
						<li><a href="https://twitter.com/saibroking" target="_blank"><i class="twitter"> </i></a></li>
						<li><a href="https://www.youtube.com/channel/UCEOUzRAAwiwgehy3SQoTOAQ" target="_blank" id="youtuve"><i class="fa fa-youtube-play fa-2x"  style="background: unset; color:#FFFFFF;font-size: 1.5em;" aria-hidden="true"></i></a></li>
						<!--<li><a href="#"><i class="camera"> </i></a></li>
						<li><a href="#"><i class="dribble"> </i></a></li>-->
					</ul><br />
						<!--<h4>Visitor </h4>-->
					<a >
<img src="http://hitwebcounter.com/counter/counter.php?page=6540770&style=0009&nbdigits=5&type=ip&initCount=0" title="Saibroking Visitor Counter" Alt="Saibroking Visitor Counter"   border="0" >
</a>                        
			</div>
			
		<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-4 footer-logo">
				<h2><a href="index.html">SAI BROKING</a></h2>
			</div>
			<div class="col-md-8 footer-class">
				<p >&copy; 2016 Sai Broking. All Rights Reserved | Powered by <a href="http://Globallianz.com/" target="_blank">Globallianz</a> </p>
			</div>
		<div class="clearfix"> </div>
	 	</div>
	</div>
</div>
<a href="#" class="scrollup"></a>

