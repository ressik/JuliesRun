$(document).ready(function(){
	$("#registrationSuccess").hide();
	$("#gCheckoutBtn").button().click(function(){
		$("#payPalForm").hide(500);
		$("#BB_BuyButtonForm").toggle(500);
	});
	$("#payPalBtn").button().click(function(){
		$("#BB_BuyButtonForm").hide(500);
		$("#payPalForm").toggle(500);
	});
	$("#regBtn").button().click(function(){
		$("#firstName").val("");
		$("#lastName").val("");
		$("#email").val("");
		$("#regForm").dialog('open');
	});	
	$.getJSON("webContent/countdown.php", function(data){
		if (data.time){
			if (data.time >= 0615121900){
				$("#regContent").remove();
				$("#sorryMsg").show();
			}
		}
	});
	
});

function validateEmail(field, rules, i, options){
	var regex = /^([A-Za-z0-9_\-\.\'])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,6})$/;
	var pattern = new RegExp(regex);
	if (!field.val()){
		return;
	}
	if (!pattern.test(field.attr('value'))){
		return options.allrules.email.alertText;
	}
}

