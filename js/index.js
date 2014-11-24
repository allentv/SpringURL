$(document).ready(function() {

	$("#urlForm").on("submit", function(e) {
		e.preventDefault();
		var formData = $(this).serialize();
		$.post(
			"pages/ShortenUrl.php"
		,	formData
		,	function(response) {
				//alert(response);
				$("#shortLinkDetails").html(response);
			}
		);
	});

});