//by Manan Trimbakey
$(document).ready(function () {

//	var size = $("#s4_location-png-button").outerHeight();
//	$(".s4_city-text-box").outerHeight(size);
//	$("#s4_drop-down-character").outerHeight(size-1);
//	$(".s4_go-button").outerHeight(size);
//	$(".s4_controls").outerHeight(size);
//	$("#s4_options").outerWidth($(".s4_controls").outerWidth());
//
//	$(".s4_controls").css({
//		"border-radius": size / 2
//	});
//	$(".s4_go-button").css({
//		"border-radius": size / 2
//	});
//	$("#s4_location-png-button").css({
//		"border-top-left-radius": size / 2,
//		"border-bottom-left-radius": size / 2
//	});
//	$("#s4_drop-down-character").css({
//		"border-top-right-radius": size / 2,
//		"border-bottom-right-radius": size / 2
//	});
//
//	$("#s4_options").css({
//		"border-bottom-left-radius": size / 2,
//		"border-bottom-right-radius": size / 2
//	});
//
//	$("#s4_location-png-button, #s4_drop-down-character, .s4_city-text-box").on("focus", function () {
//		$("#s4_options").css({
//			"display": "block"
//		});
//		$("#s4_location-png-button").css({
//			"border-bottom-left-radius": 0
//		});
//		$("#s4_drop-down-character").css({
//			"border-bottom-right-radius": 0
//		});
//	});
//
//	$("#s4_location-png-button, #s4_drop-down-character, .s4_city-text-box").on("blur", function () {
//		$("#s4_options").css({
//			"display": "none"
//		});
//		$("#s4_location-png-button").css({
//			"border-bottom-left-radius": size/2
//		});
//		$("#s4_drop-down-character").css({
//			"border-bottom-right-radius": size/2
//		});
//	});
//
//	$(".s4_go-button").click(function () {
//		alert("Hello World");
//	});


//	$("#s1-search-search-bar-icon, #s1-search-text-box-2").on("click", function () {
//		$(s1options2).css("display","block");
//		s1text2.focus();
//		var s = document.getElementById("s1-search-text-box-2");
//		s.style = "border-bottom-right-radius: 0px !important";
//	});
//
//	$(s1text2).blur(function () {
//		$(s1options2).css("display", "none");
//		var s = document.getElementById("s1-search-text-box-2");
//		s.style = "border-bottom-right-radius: 1.2em !important";
//	});
	
	var s4size = 0;
	$(".s4-search-bar").each(function () {
		s4size += $(this).outerWidth();
	});
	$(".s4-options").css("width", s4size-0.5);
	
	$("#s4-map-marker-alt-search-bar-icon, #s4-search-text-box").on("click", function () {
		document.getElementById("s4-search-text-box").style = "border-bottom-right-radius: 0px !important";
		document.getElementById("s4-map-marker-alt-search-bar-icon").style = "border-bottom-left-radius: 0px !important";
		document.getElementById("s4-search-text-box").focus();
		$(".s4-options").css("display","block");
	});

	$("#s4-search-text-box").blur(function () {
		document.getElementById("s4-search-text-box").style = "border-bottom-right-radius: 1.2em !important";
		document.getElementById("s4-map-marker-alt-search-bar-icon").style = "border-bottom-left-radius: 1.2em !important";
		$(".s4-options").css("display", "none");
	});
});