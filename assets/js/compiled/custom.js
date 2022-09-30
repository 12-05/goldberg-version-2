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
	}); // fade block on sroll

	$(window).load(function () {
		$(".block").each(function () {
			var bottom_of_object = $(this).offset().top + $(this).outerHeight();
			var bottom_of_window = $(window).scrollTop() + $(window).height();

			if (bottom_of_window > bottom_of_object) {
				$(this).animate(
					{
						opacity: "1",
					},
					500
				);
			}
		});
	}); //refactor the previous part into a shorter syntax
});
