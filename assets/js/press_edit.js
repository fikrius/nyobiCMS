	$("#edit").attr("type", "submit");

	$("#edit").on("click", function(){
		$(".form-control").attr("disabled", false);
		$("#foto_profil").attr("disabled", false);
		$("#edit").attr("type", "hidden");
		$("#cancel").attr("type", "submit");
		$("#save").attr("type", "submit");

		event.preventDefault();
	});

	$("#cancel").on("click", function(){
		$(".form-control").attr("disabled", true);
		$("#edit").attr("type", "submit");
		$("#foto_profil").attr("disabled", true);
		$("#cancel").attr("type", "hidden");
		$("#save").attr("type", "hidden");

		event.preventDefault();
	});
