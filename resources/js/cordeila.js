$(document).ready(function () {

	$.get("h_section1.php", function (data, status) {
		// console.log(status);
		// console.log(data);

		var js = JSON.parse(data);
		// console.log(data);
		$("#heading-m").text(js.heading);
		$("#tagline-m").text(js.tagline);
		$("#contact-nav").html("<i class=\"fa fa-phone\"></i>&nbsp;&nbsp;" + js.phone_no);
		console.log(js.phone_no);
		$("#contact-2-s1").html("<i class=\"fa fa-phone\"></i>&nbsp;&nbsp;" + js.phone_no);
	});

	$(Window).click(function () {
		$("#s1-options-1-m").css("display", "none;");
	});
        
        var size = $("#s1_location-png-button").outerHeight();
	$(".s1_city-text-box").outerHeight(size);
	$("#s1_drop-down-character").outerHeight(size);
        $(".s1_venues").outerHeight(size);
	$(".s1_go-button").outerHeight(size);
	$(".s1_controls").outerHeight(size);
	$("#s1_options").outerWidth($(".s1_controls").outerWidth());

	$(".s1_controls").css({
		"border-radius": size / 2
	});
	$(".s1_go-button").css({
		"border-radius": size / 2
	});
	$("#s1_location-png-button").css({
		"border-top-left-radius": size / 2,
		"border-bottom-left-radius": size / 2
	});
//	$("#s1_drop-down-character").css({
//		"border-top-right-radius": size / 2,
//		"border-bottom-right-radius": size / 2
//	});

	$("#s1_options").css({
		"border-bottom-left-radius": size / 2,
		"border-bottom-right-radius": size / 2
	});
        
        var size1 = $("#s1_location-png-button").outerWidth() + $("#s1_drop-down-character").outerWidth() + $(".s1_city-text-box").outerWidth();
        $("#s1_options-1").outerWidth(size1);
        var size2 = $(".s1_venues").outerWidth();
        $("#s1_options-2").outerWidth(size2);

	$("#s1_location-png-button, #s1_drop-down-character, .s1_city-text-box").on("focus", function () {
		$("#s1_options-1").css({
			"display": "block"
		});
		$("#s1_location-png-button").css({
			"border-bottom-left-radius": 0
		});
//		$("#s1_drop-down-character").css({
//			"border-bottom-right-radius": 0
//		});
	});

	$("#s1_location-png-button, #s1_drop-down-character, .s1_city-text-box").on("blur", function () {
		$("#s1_options-1").css({
			"display": "none"
		});
		$("#s1_location-png-button").css({
			"border-bottom-left-radius": size/2
		});
//		$("#s1_drop-down-character").css({
//			"border-bottom-right-radius": size/2
//		});
	});
        
        $(".s1_venues").focus(function() {
            $("#s1_options-2").css("display", "block");
        });
        
        $(".s1_venues").blur(function() {
            $("#s1_options-2").css("display", "none");
        });

	$(".s1_go-button").click(function () {
		alert("Hello World");
	});

	var s1size1 = 0;
	var s1size2 = 0;
	var s1text1 = $("#s1-search-text-box-1");
	var s1text2 = $("#s1-search-text-box-2");
	var s1options1 = $(".s1-options-1");
	var s1options2 = $(".s1-options-2");
	var s1mapmarkericon = $("#s1-map-marker-alt-search-bar-icon");
	$(".search-bar-part-1").each(function () {
		s1size1 += $(this).outerWidth();
	});

	$(s1options1).outerWidth(s1size1-3);

	$(".search-bar-part-2").each(function () {
		s1size2 += $(this).outerWidth();
	});

	$(s1options2).outerWidth(s1size2);

	$("#s1-map-marker-alt-search-bar-icon, #s1-search-text-box-1, #s1-caret-down-search-bar-icon").on("click", function () {
		$(s1options1).css("display","block");
		var s = document.getElementById("s1-map-marker-alt-search-bar-icon");
		s.style = "border-bottom-left-radius: 0px !important";
		s1text1.focus();
	});

	$(s1text1).blur(function () {
		$(s1options1).css("display", "none");
		var s = document.getElementById("s1-map-marker-alt-search-bar-icon");
		s.style = "border-bottom-left-radius: 1em !important";
	});
});