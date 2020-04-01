     <footer class="footer dark-bg-1">
         <!-- flex-container start -->
         <div class="flex-container container">
            <!-- column start -->
            <div class="two-columns bottom-padding-60">
               <div class="content-right-margin-10 footer-center-mobile">
                  <img class="footer-logo" src="assets/images/logo-white.svg" alt="logo">
               </div>
            </div>
            <!-- column end -->
            <!-- column start -->
            <div class="three-columns bottom-padding-60">
               <div class="content-left-right-margin-10">
                  <h4>menu</h4>
                  <ul class="footer-menu text-color-4">
                     <li><a class="pointer-large animsition-link small-title-oswald hover-color active" href="index.html">Home</a></li>
                     <li><a class="pointer-large animsition-link small-title-oswald hover-color" href="about.html">About</a></li>
                     <li><a class="pointer-large animsition-link small-title-oswald hover-color" href="services.html">Services</a></li>
                     <li><a class="pointer-large animsition-link small-title-oswald hover-color" href="portfolio.html">Portfolio</a></li>
                     <li><a class="pointer-large animsition-link small-title-oswald hover-color" href="careers.html">Careers</a></li>
                     <li><a class="pointer-large animsition-link small-title-oswald hover-color" href="contact.html">Contact</a></li>
                  </ul>
               </div>
            </div>
            <!-- column end -->
            <!-- column start -->
            <div class="four-columns bottom-padding-60">
               <h4>contact us</h4>
               <div class="content-left-right-margin-10 footer-center-mobile">
                  <ul class="footer-information text-color-4">
                     <li><i class="far fa-envelope"></i><a href="#" class="xsmall-title-oswald">Hello@Billionapps.net</a></li>
                     <li><i class="fas fa-mobile-alt"></i><a href="#" class="xsmall-title-oswald">+91 98840 76876</a></li>
                     <li><i class="fab fa-skype"></i><a href="#" class="xsmall-title-oswald">Ken@Billionapps</a></li>
                     <li class="no_padding">
                        <i class="fas fa-map-marker-alt"></i><span class="no_padding">INDIA</span>
                        <p>No 85, Babu Street, Vellala Teynampet,<br>Chennai, Tamil Nadu 600086</p>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- column end -->
            <!-- column start -->
            <div class="three-columns bottom-padding-60">
               <h4>connect with us</h4>
               <div class="content-left-margin-10">
                  <ul class="footer-social">
                     <li>
                        <div class="flip-btn-box">
                           <a href="https://www.facebook.com/BillionApps-Infotech-Solutions-642750082891741/" target="_blank"   class="" data-text=""><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                        </div>
                     </li>
                     <li>
                        <div class="flip-btn-box">
                           <a href="https://www.linkedin.com/in/nesaa/" class="" data-text="" target="_blank"><i class="fab fa-linkedin-in"></i><span>Linked in</span></a>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- column end -->
            <!-- column start -->
            <div class="twelve-columns">
               <p class="p-letter-style text-color-4 footer-copyright">© 2009-2018 Billionapps Infotech Solutions. All rights reserved.</p>
            </div>
            <!-- column end -->
         </div>
         <!-- flex-container end -->
      </footer>
      <!-- footer end -->
      <!-- scripts --> 
      <script src="assets/js/plugins.js"></script> 
      <script src="assets/js/main.js"></script>
      <script src="assets/js/jquery.nav.js"></script>
      <script src="assets/js/jquery.validate.min.js"></script>



    
      <script>
         $(document).ready(function() {
         $('#nav').onePageNav();
         $(document).on('click','.banner_prev',function () {
         var csn = $('#nav li.current').index();
         //console.log('prev::'+csn);
         if(csn!=0){ ncsn = csn - 1; $('#nav li:eq('+ncsn+') a').trigger('click'); }
         });
         $(document).on('click','.banner_next',function () {
         var csn = $('#nav li.current').index();
         //console.log('next::'+csn+ ' lilen'+ $('#nav li').length);
         if(csn < $('#nav li').length ){ ncsn = csn + 1; $('#nav li:eq('+ncsn+') a').trigger('click'); }    
         });
         });
      </script>
      <script>
         function openIndus(evt, indusName) {
           var i, tabcontent, tablinks;
           tabcontent = document.getElementsByClassName("tabcontent");
           for (i = 0; i < tabcontent.length; i++) {
             tabcontent[i].style.display = "none";
           }
           tablinks = document.getElementsByClassName("tablinks");
           for (i = 0; i < tablinks.length; i++) {
             tablinks[i].className = tablinks[i].className.replace(" active", "");
           }
           document.getElementById(indusName).style.display = "block";
           evt.currentTarget.className += " active";
         }
      </script>
      <script>
         function openTech(evt, cityName) {
         var i, tabcontent, tablinks;
         tabcontent = document.getElementsByClassName("techtabcontent");
         for (i = 0; i < tabcontent.length; i++) {
         tabcontent[i].style.display = "none";
         }
         tablinks = document.getElementsByClassName("techtablinks");
         for (i = 0; i < tablinks.length; i++) {
         tablinks[i].className = tablinks[i].className.replace(" active", "");
         }
         document.getElementById(cityName).style.display = "block";
         evt.currentTarget.className += " active";
         }
         
         // Get the element with id="defaultOpen" and click on it
         document.getElementById("defaultOpen").click();
      </script>

       

      <script>
      $(document).ready(function() {
      $("#getintouchForm").validate();
      $("#contactForm").validate();

      if($(".getform_result").is(":visible") ){
                $('html, body').animate({
                    scrollTop: $(".getform_result").offset().top
                }, 1500);
             }

      if($(".contactform_result").is(":visible") ){
                $('html, body').animate({
                    scrollTop: $(".contactform_result").offset().top
                }, 1500);
             }


      });
   </script>




   </body>
</html>