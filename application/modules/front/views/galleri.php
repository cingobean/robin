<?php
$this->load->view('template/front/topfront');
?>
<?php
$this->load->view('template/front/navigasi');
?>

<!-- Portfolio Section -->
<div id="works">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>Album Kami</h2>
      <hr>
      <div class="clearfix"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
    </div>
    <div class="categories ">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">Semua</a></li>
            <li><a href="#" data-filter=".lorem">Foto Kegiatan</a></li>
            <li><a href="#" data-filter=".consectetur">Siswa - Siswi</a></li>
            <li><a href="#" data-filter=".dapibus">Seminar</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url() ?>assets/images/galleri/01.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Web Design</p>
              </div>
			  <img src="<?php echo base_url() ?>assets/images/galleri/01.jpg" class="img-responsive" alt="Project Title">
              </a> </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 consectetur">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url() ?>assets/images/galleri/02.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Web Development</p>
              </div>
               <img src="<?php echo base_url() ?>assets/images/galleri/02.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url() ?>assets/images/galleri/03.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Web Design</p>
              </div>
               <img src="<?php echo base_url() ?>assets/images/galleri/03.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url() ?>assets/images/galleri/04.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Web Design</p>
              </div>
               <img src="<?php echo base_url() ?>assets/images/galleri/04.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 consectetur">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url() ?>assets/images/galleri/05.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Web Development</p>
              </div>
               <img src="<?php echo base_url() ?>assets/images/galleri/05.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 dapibus">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url() ?>assets/images/galleri/06.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Branding</p>
              </div>
               <img src="<?php echo base_url() ?>assets/images/galleri/06.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 dapibus consectetur">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url() ?>assets/images/galleri/07.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Web Development, Branding</p>
              </div>
               <img src="<?php echo base_url() ?>assets/images/galleri/07.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url() ?>assets/images/galleri/08.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Web Design</p>
              </div>
               <img src="<?php echo base_url() ?>assets/images/galleri/08.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
$this->load->view('template/front/footer');
?>
<?php
$this->load->view('template/front/js');
?>
 <script type="text/javascript">
 
function main() {

(function () {
   'use strict';

	
	
	// Preloader */
	  	$(window).load(function() {

   	// will first fade out the loading animation 
    	$("#status").fadeOut("slow"); 

    	// will fade out the whole DIV that covers the website. 
    	$("#preloader").delay(500).fadeOut("slow").remove();      

  	}) 

   // Page scroll
  	$('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 40
            }, 900);
            return false;
          }
        }
      });

    // Show Menu on Book
    $(window).bind('scroll', function() {
        var navHeight = $(window).height() - 100;
        if ($(window).scrollTop() > navHeight) {
            $('.navbar-default').addClass('on');
        } else {
            $('.navbar-default').removeClass('on');
        }
    });

    $('body').scrollspy({ 
        target: '.navbar-default',
        offset: 80
    })

  	$(document).ready(function() {
  	    $("#testimonial").owlCarousel({
        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true
        });

  	});

  	// Portfolio Isotope Filter
    $(window).load(function() {
        var $container = $('.portfolio-items');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

    });
	
	

  // jQuery Parallax
  function initParallax() {
    $('#intro').parallax("100%", 0.3);
    $('#services').parallax("100%", 0.3);
    $('#aboutimg').parallax("100%", 0.3);	
    $('#testimonials').parallax("100%", 0.1);

  }
  initParallax();

  	// Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});	

}());


}
main();
 </script>
<?php
$this->load->view('template/front/foot');
?>



