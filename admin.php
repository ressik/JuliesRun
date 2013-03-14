<?php 
	// Starting the session 
	session_start(); 
	
	if(!isset($_SESSION['loggedIn'])) { 
		header( 'Location: ../index.php' ) ;
	} 
?> 

<head>
	<link rel="stylesheet" href="css/index.css" />
	<link rel="stylesheet" href="css/validationEngine.jquery.css" />
	
	<script src="scripts/jquery-ui-1.8.17.custom/js/jquery-1.7.1.min.js"></script>
	<script src="scripts/jquery-ui-1.8.17.custom/js/jquery-ui-1.8.17.custom.min.js"></script>
	<script src="scripts/dataTables/js/jquery.dataTables.min.js"></script>
	<script src="scripts/jquery.validationEngine.js"></script>
	<script src="scripts/jquery.validationEngine-en.js"></script>
	
	<script src="scripts/global.js"></script>
	<script src="scripts/admin.js"></script>

</head>

<div class="tab" id="adminTab">
<div id="table">
	<table id="regTable" style="color: black; width:100%">
	    <thead>
	        <tr>
	            <th>First Name</th>
	            <th>Last Name</th>
	            <th>Email</th>
	            <th>Race</th>
	            <th>Rank</th>
	            <th>Shirt Size</th>
	            <th>Paid</th>
	        </tr>
	    </thead>
	    <tbody id="tableBody">
	        <tr id="tableRow">
	            <td id="firstName" class="datacell" id="firstName">
	            	<img src="images/removeIcon.png" alt="Delete Name" id="removeIcon" style="width: 20px; height: 20px"/>
	            </td>
	            <td id="lastName" class="datacell"></td>
	            <td id="email" class="datacell"></td>
	            <td id="rank" class="datacell"></td>
	            <td id="race" class="datacell"></td>
	            <td id="shirtSize" class="datacell"></td>
	            <td id="paid" class="datacell"></td>
	        </tr>
	    </tbody>
	</table>
</div>
	<input type="button" id="emailAll" value="Email All"></input>
	<input type="button" id="emailPaid" value="Email Paid"></input>
	<input type="button" id="emailUnpaid" value="Email Unpaid"></input>
</div>
