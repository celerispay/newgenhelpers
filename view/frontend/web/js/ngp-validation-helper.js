define([
  'jquery',
  'jquery/ui',
  'jquery/validate',
  'mage/translate'
], function ($) {
  'use strict';

  $.validator.addMethod(
    "ngp-not-equal",
    function (value, element, params) {
      var currPasswd = $(params).val();
      return currPasswd !== value;
    },
    $.mage.__("New password cannot be the same as current password ")
  );
  return function () {
  }
});
