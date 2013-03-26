$(document).ready(function() {

	function initialize() {
	    var mapOptions = {
	      center: new google.maps.LatLng(-34.397, 150.644),
	      zoom: 8,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    var map = new google.maps.Map(document.getElementById("map-canvas"),
	        mapOptions);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	initialize();

	$("[data-pane]").on("click", function() {
		var $this = $(this);
		var link = $this.data("pane");
		if ($("#" + link).parent().attr("id") != $this.closest(".pane").attr("id"))
			$(".pane:not(#" + link + ")").slideUp(100);
		else if (typeof $this.closest(".pane").attr("id") == "undefined")
			$(".pane:not(#" + link + ")").slideUp(100);
		$("#" + link).slideToggle("fast");
	});
	$(".pane").each(function() {
		var close = "<div class='close'>X</div>";
		$(this).append(close);
	});
	$(".close").on("click", function() {
		$(this).parent().slideUp(100);
	});

});