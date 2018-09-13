function validateEmail(){
	var email = document.getElementById("Email").value;
	var atPosition = email.indexOf("@");
	var dotPosition = email.indexOf(".");


	if(atPosition<1 || dotPosition<atPosition+2 || dotPosition+1>=email.length){
		document.getElementById("Email").style.borderColor = "red";
		document.getElementById("Email").style.backgroundImage ="url('images/false.png')";



	}
	else{
		document.getElementById("Email").style.borderColor = "green";
		document.getElementById("Email").style.backgroundImage ="url('images/true.png')";
	}

}

function validatePassword(){
	var psw = document.getElementById("password").value;

	if (psw.length<8) {
		document.getElementById("password").style.borderColor = "red";
		document.getElementById("password").style.backgroundImage ="url('images/false.png')";

	}
	else{
		document.getElementById("password").style.borderColor = "green"
		document.getElementById("password").style.backgroundImage ="url('images/true.png')";
	}
}

function validateConfirmPassword(){
	var confirm = document.getElementById("Confirm").value;
	var password = document.getElementById("password").value;

	if (confirm!=password) {
		document.getElementById("Confirm").style.borderColor = "red";
		document.getElementById("Confirm").style.backgroundImage ="url('images/false.png')";
	}
	else{
		document.getElementById("Confirm").style.borderColor = "green"
		document.getElementById("Confirm").style.backgroundImage ="url('images/true.png')";
	}

}

function validateFname(){
	var fname = document.getElementById("fname");

	if(fname == ""){
		document.getElementById("fname").style.borderColor = "red";
		document.getElementById("fname").style.backgroundImage ="url('images/false.png')";
	}
	else{
		document.getElementById("fname").style.borderColor = "green"
		document.getElementById("fname").style.backgroundImage ="url('images/true.png')";
	}

}

function validateLname(){
	var lname = document.getElementById("lname");

	if(lname == ""){
		document.getElementById("lname").style.borderColor = "red";
		document.getElementById("lname").style.backgroundImage ="url('images/false.png')";
	}
	else{
		document.getElementById("lname").style.borderColor = "green"
		document.getElementById("lname").style.backgroundImage ="url('images/true.png')";
	}

}
