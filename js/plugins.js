//load in jQuery plugin dependencies (eg. flexslider, smoothScroll etc.) in this file
jQuery(document).ready(function(){
   jQuery('a[href^="#"]').click(function(e) {
   	 if (window.innerWidth <= 480) {
   	 	jQuery('html,body').animate({ scrollTop: jQuery(this.hash).offset().top - 40}, 1000);
   	 }
       else {
   	 	jQuery('html,body').animate({ scrollTop: jQuery(this.hash).offset().top}, 1000);
       }
       return false;
       e.preventDefault();
   });
});