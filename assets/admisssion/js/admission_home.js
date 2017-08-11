$(document ).ready(function() {
		$(".show_login_model").click(function(){
			show_login_model();
		});
		
		$(".show_register_model").click(function(){
			show_register_model();
		});

		$(".show_forgot_password").click(function(){
			show_forgot_password();
		});

		$("#btn_reg").click(function(){
			register_user();
		});

		$("#btn_login").click(function(){
			login_user();
		});

		$("#btn_forgot_password").click(function(){
			user_forgot_password();
		});		
		
		$("#mobile_number").keypress(function(event) {
			return validateNumber(event);
		});
});

function show_login_model()
{	
	$("#registration_modal").modal("hide").removeClass("fade");
	$("#forget_password_modal").modal("hide").removeClass("fade");
    $("#login_modal").modal("show").addClass("fade");
}

function show_register_model()
{	
	$("#login_modal").modal("hide").removeClass("fade");
	$("#forget_password_modal").modal("hide").removeClass("fade");
    $("#registration_modal").modal("show").addClass("fade");
}

function show_forgot_password()
{	
	$("#login_modal").modal("hide").removeClass("fade");
	$("#registration_modal").modal("hide").removeClass("fade");
	$("#forget_password_modal").modal("show").addClass("fade");
}

function register_user()
{
	
	var your_name = $("#your_name").val();
	var your_email = $("#your_email").val();
	var mobile_number = $("#mobile_number").val();
	var your_password = $("#your_password").val();
	var choose_state = $("#choose_state").val();
	var choose_city = $("#choose_city").val();
	var get_captcha = $("#get_captcha").val();
	var agrement_checkbox = false;
	var validate = false;
	
	$(".class_your_name").hide();
	$(".class_your_email").hide();		
	$(".class_your_valid_email").hide();
	$(".class_mobile_number").hide();
	$(".class_your_password").hide();
	$(".class_your_state").hide();
	$(".class_your_state").hide();
	$(".class_your_captcha").hide();
	
	if(your_name == ""){
		$(".class_your_name").show();
		validate = true;
	}
	
	if(your_email == ""){
		$(".class_your_email").show();		
		validate = true;
	}else if(!fnEmailVerify(your_email)){
		$(".class_your_valid_email").show();
		validate = true;
	}
	
	if(mobile_number == ""){
		$(".class_mobile_number").show();
		validate = true;
	}
	
	if(your_password == ""){
		$(".class_your_password").show();
		validate = true;
	}
	
	if(choose_state == ""){
		$(".class_your_state").show();
		validate = true;
	}
	
	if(choose_city == ""){
		
	}
	
	if(get_captcha == ""){
		$(".class_your_captcha").show();		
		validate = true;
		//class_your_valid_captcha
	}
	
	if(validate == true){
		//alert("Enter Proper Data");
		return;
	}
	
	if(!$("#agrement_checkbox").is(":checked")){
		alert("Please accepts terms and conditions!");
		return;
	}
	
	var dataString = 'your_name='+escape(your_name);
	dataString += "&your_email="+ escape(your_email);
	dataString += "&mobile_number="+ escape(mobile_number);
	dataString += "&your_password="+ escape(your_password);
	dataString += "&choose_state="+ escape(choose_state);
	dataString += "&choose_city="+ escape(choose_city);
	dataString += "&get_captcha="+ escape(get_captcha);
	
	var base_url = $('#baseurl').val();
	
	$.ajax({
		url:base_url+"index.php/admission/register_user",
		type: "POST",
		data: dataString,
		datatype: "html",
		async: true,
		cache: false,
		success: function(data) 
		{
			var data = data.replace(/^\s+|\s+$/g, '');			
			alert(data);			
		}
	});
	
}

function login_user()
{
	
}

function user_forgot_password()
{
	
}

function fnEmailVerify(strEmailId)
{	
	strEmail = strEmailId.toLowerCase();

	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(strEmail))
	{
	  return true;
	}
	return false;
}


function validateNumber(event) {

    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode == 8 || event.keyCode == 46
     || event.keyCode == 37 || event.keyCode == 39) {
        return true;
    }
    else if ( key < 48 || key > 57 ) {
        return false;
    }
    else return true;
}

