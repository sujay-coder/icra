
<footer>
    <div class="foot_info">
        <div class="container">   
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h2><a href="#">HOME</a></h2>
                    <ul class="foot_menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Regulatory Disclosure</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h2><a href="#">OUR OFFERINGS</a></h2>
                    <ul class="foot_menu">
                        <li><a href="#">Risk Management</a></li>
                        <li><a href="#">Market Data</a></li>
                        <li><a href="#">Knowledge Services</a></li>
                        <li><a href="#">Grading and Risk Assessment Services</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h2>CONTACT US</h2>
                    <ul class="add_con">
                        <li><i class="fas fa-phone"></i><a href="#">+91-33-40170100</a> / <a href="#">+91 91676 92971</a></li>
                        <li><i class="fas fa-envelope"></i><a href="#">contact@icraanalytics.com</a></li>
                        <li><i class="fas fa-globe"></i><a href="#">hr@icraanalytics.com</a></li>
                    </ul>
                    <h2>FOR BUSINESS QUERIES</h2>
                    <ul class="add_con">
                        <li><i class="fas fa-phone"></i><a href="#">+91 91676 92971</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h2>FIND US ON</h2>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                    <div class="f_right">
                        <a href="#"><img src="images/foot_r_logo.png"></a>
                        <a href="#">ABOUT SSL CERTIFICATES</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot_bottom">
        <div class="container">
            <div class="row">
                <div class="foot_bottom_con">
                    <p>Copyright 2020 <a href="#">ICRA Analytics Limited</a>. All rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--  <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>     -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.slimNav_sk78.min.js"></script>
<script type="text/javascript" src="https://gijsroge.github.io/owl-carousel2-thumbs/assets/OwlCarousel2Thumbs.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {	
	$('#navigation nav').slimNav_sk78();
	var owl = $('.main-slider');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items: 1,
        center: true,
        nav: true,
        thumbs: false,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],

    });	
    var owl = $('.testi_slider');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items: 1,
        center: true,
        nav: true,
        thumbs: false,
        thumbImage: false,
        thumbsPrerendered: false,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],
    });
    var owl = $('.client_cara');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items:5,
        itemsMobile:[568,2],
        itemsTablet:[768,3],
        itemsTablet:[1024,3],
        center: false,
        nav: true,
        thumbs: false,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],
        responsive: {
            0: {
              items: 2
            },

            600: {
              items: 3
            },

            1024: {
              items: 4
            },

            1366: {
              items: 5
            }
          }
    });
    var owl = $('.slider_bot_cara');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items:3,
        itemsMobile:[568,2],
        itemsTablet:[768,3],
        itemsTablet:[1024,3],
        center: true,
        nav: true,
        thumbs: false,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],
        responsive: {
            0: {
              items: 1
            },

            600: {
              items: 2
            },

            1024: {
              items: 3
            },

            1366: {
              items: 3
            }
          }
    });
});
</script>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
 
}
 // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>

<script type="text/javascript">
var button = document.getElementById('hamburger-menu'),
    span = button.getElementsByTagName('span')[0];

button.onclick =  function() {
  span.classList.toggle('hamburger-menu-button-close');
};

$('#hamburger-menu').on('click', toggleOnClass);

function toggleOnClass(event) {
  var toggleElementId = '#' + $(this).data('toggle'),
  element = $(toggleElementId);

  element.toggleClass('on');

}

// close hamburger menu after click a
$( '.menu li a' ).on("click", function(){
  $('#hamburger-menu').click();
});
</script>


</body>
</html>
