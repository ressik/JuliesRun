function register(){
	if ($("#firstName").val()=="" || $("#lastName").val()=="" ||
			$("#race option:selected").val() =="" || $("#shirtSize option:selected").val() =="" ||
			$("#rank option:selected").val() ==""){
		$("#dialogLink").attr("href","#regError");
		$("#dialogLink").click();
		return;
	}
	$.post("../webContent/addRegistrant.php", $("#regForm").serialize(), function(data){
		$("#dialogLink").attr("href","#regSuccessDialog");
		$("#dialogLink").click();
		$("#thanksName").html(data.name);
		$("#dialogLink").click();
	},"json");
}

$(document).ready(function(){
	$("#errorDialogClose").click(function(){
		$('.ui-dialog').dialog('close');
	});
	$("#successDialogClose").click(function(){
		$('.ui-dialog').dialog('close');
	});
});
