
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
  el: '#app'
});

$(document).ready(function(){
  $.ajax({
    url: "http://api.wunderground.com/api/753375f99e75c6a5/conditions/q/MX/Puerto%20Vallarta.json",
    success: function(data){

      $("#temp_c").html(data.current_observation.temp_c + "º");
      $("#weather_icon").src= data.current_observation.icon_url;
      $("#forecast_link").attr('href',data.current_observation.forecast_url);
      $("#clima").show();
    }
  }); 
});
