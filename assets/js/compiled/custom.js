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
    $(this).parent().find(".sub-menu").slideToggle(100);
  });
  // fade block on sroll
  $(window).load(function () {
    $(".block").each(function () {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      if (bottom_of_window > bottom_of_object) {
        $(this).animate({
          opacity: "1"
        }, 500);
      }
    });
  });
  //refactor the previous part into a shorter syntax
});

(function ($) {
  "use strict";

  var defaults = {
    topOffset: 400,
    //px - offset to switch of fixed position
    hideDuration: 300,
    //ms
    stickyClass: "is-fixed"
  };
  $.fn.stickyPanel = function (options) {
    if (this.length == 0) return this; // returns the current jQuery object

    var self = this,
      settings,
      isFixed = false,
      //state of panel
      stickyClass,
      animation = {
        normal: self.css("animationDuration"),
        //show duration
        reverse: "",
        //hide duration
        getStyle: function getStyle(type) {
          return {
            animationDirection: type,
            animationDuration: this[type]
          };
        }
      };

    // Init carousel
    function init() {
      settings = $.extend({}, defaults, options);
      animation.reverse = settings.hideDuration + "ms";
      stickyClass = settings.stickyClass;
      $(window).on("scroll", onScroll).trigger("scroll");
    }

    // On scroll
    function onScroll() {
      if (window.pageYOffset > settings.topOffset) {
        if (!isFixed) {
          isFixed = true;
          self.addClass(stickyClass).css(animation.getStyle("normal"));
        }
      } else {
        if (isFixed) {
          isFixed = false;
          self.removeClass(stickyClass).each(function (index, e) {
            // restart animation
            // https://css-tricks.com/restart-css-animation/
            void e.offsetWidth;
          }).addClass(stickyClass).css(animation.getStyle("reverse"));
          setTimeout(function () {
            self.removeClass(stickyClass);
          }, settings.hideDuration);
        }
      }
    }
    init();
    return this;
  };
})(jQuery);

//run
jQuery(function ($) {
  $(".header").stickyPanel();
});