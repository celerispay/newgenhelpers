define([
  "jquery",
  "owlslider"
], function ($) {
  'use strict';

  return function(config, element) {
    let default_config = {
      "mouseDrag": true,
      "loop": false,
      "responsiveClass": true,
      "margin": 25,
      "nav": true,
      "dots": true,
      "dotsEach": 1,
      "autoplay": false,
      "responsive":{
        "0":{
          "nav": true,
          "items": 2
        },
        "768":{
          "nav": true,
          "items": 3
        },
        "992": {
          "nav": true,
          "items": 4
        },
        "1200": {
          "nav": true,
          "items": 5
        }
      }
    };
    let owlConfig = $.extend({}, default_config, config);
    $(element)
      .owlCarousel(owlConfig)
      .addClass('owl-carousel')
      .addClass('owl-theme')
  }
});
