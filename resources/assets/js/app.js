
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$("#owl-demo").owlCarousel({
  autoPlay: 3000, //Set AutoPlay to 3 seconds
  items : 4,
  itemsDesktop : [1199,3],
  itemsDesktopSmall : [979,3]
});
