jQuery(document).ready(function ($) {
	$("#menu__toggle").change(function () {
		let checked = $(this).is(":checked");
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
	// fade block on sroll
	$(window).load(function () {
		$(".block").each(function () {
			let bottom_of_object = $(this).offset().top + $(this).outerHeight();
			let bottom_of_window = $(window).scrollTop() + $(window).height();
			if (bottom_of_window > bottom_of_object) {
				$(this).animate({ opacity: "1" }, 500);
			}
		});
	});
	//refactor the previous part into a shorter syntax
});
