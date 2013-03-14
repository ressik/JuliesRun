$(document).ready(function(){
	setUpRegDialog();
	setUpLoginDialog();
	
});

function setUpRegDialog(){
	$("#regForm").dialog({
		autoOpen: false,
		title: "Register",
		hide: "explode",
		height: 300,
		width: 400,
		modal: true,
		hide: 'fade',
		open: function(){
			$("#regForm").validationEngine('attach', {
				scroll: false
			});
		},
		buttons: {
			"Complete Registration": function() {		
				if (jQuery("#regForm").validationEngine('validate') == false){
					return false;
				}
				$.post("webContent/addRegistrant.php", $("#regForm").serialize(), function(data){
					$("#regForm").dialog('close');
					$("#thanksName").html(data.name);
					$("#BB_BuyButtonForm").hide();
					$("#registrationSuccess").fadeIn(1000);
					$("#payBtn").fadeIn(1000);
					$("#alreadyRegisteredTxt").hide();
				},"json");
				
			},
			"Cancel": function(){
				$("#regForm").dialog('close');
			}
		},
		close: function (event, ui){
			$("#regForm").validationEngine('hideAll');
		}
	});
}

function setUpLoginDialog(){
	$("#loginForm").dialog({
		autoOpen: false,
		title: "Login",
		height: 200,
		width: 400,
		modal: true,
		hide: 'fade',
		buttons: {
			"Login": function() {
				$.post("webContent/login.php", $("#loginForm").serialize(), function(data){
					if(data.valid=="true"){
						$("#loginForm").dialog('close');
						$("#adminTab").show();
					} else {
						$("#loginError").show(500);
					}
				},"json");
				
			},
			"Cancel": function(){
				$("#loginForm").dialog('close');
			}
		}
	});
}

