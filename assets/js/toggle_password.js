	$(document).ready(function(){

		var formLoginField = $("#formLogin");
		var usernameField = $("#username");
		var passwordField = $("#password");

		// Toggle password
		$("#toggle_password").click(function(){
			var passwordType = passwordField.attr("type");
			var togglePassword = $("#toggle_password");

			if(passwordType == "password"){
				passwordField.attr("type", "text");
				togglePassword.html("<i class='fas fa-eye-slash'></i>");
			}else{
				passwordField.attr("type", "password");
				togglePassword.html("<i class='fas fa-eye'></i>");
			}
			event.preventDefault();

		});

	});