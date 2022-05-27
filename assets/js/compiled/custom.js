"use strict";

jQuery(document).ready(function ($) {
  $("#menu__toggle").change(function () {
    var checked = $(this).is(":checked");

    if (checked) {
      $("body").addClass("nav-open");
    } else {
      $("body").removeClass("nav-open");
    }
  });
  $("li.menu-item-has-children > a").click(function (e) {
    e.preventDefault();
    $(this).parent().find(".sub-menu").toggle();
  });
});