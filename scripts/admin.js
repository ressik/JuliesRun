var table = null;
var emptyTable;
$(document).ready(function(){
	emptyTable = $("#regTable").clone();
	getAllRegistrants();
	markPay(null);
	$("#emailAll").button();
	$("#emailPaid").button();
	$("#emailUnpaid").button();
	$("#firstName").click(function(){
		alert("hello");
	});
	
});

function getAllRegistrants(){
	$.post("webContent/getRegistrants.php", function(data){
		populateDataTable(data);
	},'json');
}

function populateDataTable(data){
	for (var i=0; i<data.length; i++){
		var tableRow = $("#tableRow").clone();
		$(tableRow).find("#firstName").find("#removeIcon").after(" " + data[i].firstName);
		$(tableRow).find("#firstName").find("#removeIcon").hide();
		$(tableRow).find("#firstName").click(function(){
			$(this).find("#removeIcon").toggle(250);
		});
		$(tableRow).find("#removeIcon").attr("onclick", 'deleteUser("'+data[i].id+ '")');
		$(tableRow).find("#lastName").html(data[i].lastName);
		$(tableRow).find("#email").html("<a style='color:black' href='mailto:" + data[i].email + "'>"+ data[i].email +"</a>");
		$(tableRow).find("#race").html(data[i].race);
		$(tableRow).find("#rank").html(data[i].rank);
		$(tableRow).find("#shirtSize").html(data[i].shirtSize);
		$(tableRow).find("#paid").html("<input type='checkbox' id='paid"+i+"' onclick='markPay("+data[i].id+")'>");
		if (data[i].paid =="1"){
			$(tableRow).find("#paid"+i).attr("checked", "checked");
		}
		
		$("#tableBody").append(tableRow);
	}
	$("#tableRow").first().remove();
	
	$.fn.dataTableExt.afnSortData['dom-checkbox'] = function  ( oSettings, iColumn )
	{
		var aData = [];
		$( 'td:eq('+iColumn+') input', oSettings.oApi._fnGetTrNodes(oSettings) ).each( function () {
			aData.push( this.checked==true ? "1" : "0" );
		} );
		return aData;
	};
	
	table = $("#regTable").dataTable({
		"bJQueryUI" : true,
		"bRetrieve" : true,
		"sPaginationType": "full_numbers",
		"aoColumns": [
  			null,
  			null,
  			null,
  			null,
  			null,
  			null,
  			{ "sSortDataType": "dom-checkbox" }
  		]
	});
}

function markPay(id){
	var allEmail = "mailto:";
	var paidEmail = "mailto:";
	var unpaidEmail = "mailto:";
	$.get("webContent/markPay.php?id="+id, function(data){
		for (var i=0; i<data.length; i++){
			allEmail += data[i].email + ",";
			if (data[i].paid == "1"){
				paidEmail += data[i].email + ",";
			}
			if (data[i].paid =="0"){
				unpaidEmail += data[i].email + ",";
			}
		}
		$("#emailAll").button().click(function(){
			location.href= allEmail;
			return false;
		});
		$("#emailPaid").button().click(function(){
			location.href= paidEmail;
			return false;
		});
		$("#emailUnpaid").button().click(function(){
			location.href= unpaidEmail;
			return false;
		});
	},'json');
}

function deleteUser(id){
	$.post("webContent/deleteRegistrant.php?id="+id, function(data){
		var copy = emptyTable.clone();
		table.fnDestroy();
		$("#table").empty();
		$("#table").html(copy);
		getAllRegistrants();
	});
}