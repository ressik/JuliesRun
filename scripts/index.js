
$(document).ready(function(){
	var mobile = function(){
		return {
			detect:function(){
				var uagent = navigator.userAgent.toLowerCase(); 
				var list = this.mobiles;
				var ismobile = false;
				for(var d=0;d<list.length;d+=1){
					if(uagent.indexOf(list[d])!=-1){
						ismobile = true;
					}
				}
				return ismobile;
			},
			mobiles:[
				"midp","240x320","blackberry","netfront","nokia","panasonic",
				"portalmmm","sharp","sie-","sonyericsson","symbian",
				"windows ce","benq","mda","mot-","opera mini",
				"philips","pocket pc","sagem","samsung","sda",
				"sgh-","vodafone","xda","palm","iphone",
				"ipod","android"
			]
		};
	}();
	
//	if (mobile.detect()){
//		window.location.href += "mobile/index.html";
//	}
	$("#loginError").hide();
	$("#adminTab").hide();
	$("#loginLink").click(function(){
		$("#username").val("");
		$("#password").val("");
		$("#loginError").hide();
		$("#loginForm").dialog('open');
	});
	checkLogin();
	$("blockquote").quovolver();
	setUpGalleria();
	$("#logoutLink").click(function(){
		logout();
	});
	preLoadTabs();
	
});

function preLoadTabs(){
	$tabs = $("#tabs").tabs({
		cache: true,
		//fx: { opacity: 'toggle' }
	});
	var total = 6;
	var currentLoadingTab = 1;
	if (window.location.hash == "#pay"){
		$tabs.bind("tabsload", function(event,ui){
	    	$("#joinUs").hide();
	    	$("#payUs").show();
	    	$("#alreadyRegisteredTxt").hide();
	    	$("#BB_BuyButtonForm").show();
			$tabs.unbind("tabsload");
		}).tabs("select",1);
	} else{
		$tabs.bind('tabsload',function(){
		    currentLoadingTab++;
		    if (currentLoadingTab < total)
		        $tabs.tabs('load',currentLoadingTab);
		    else{
		        $tabs.unbind('tabsload');
			    if (window.location.hash == "#pay"){
			    	$("#tabs").tabs().tabs("select",1);
			    	$("#joinUs").hide();
			    	$("#BB_BuyButtonForm").show();
			    	$("#payUs").show();
			    	$("#alreadyRegisteredTxt").hide();
			    }
		    }
		}).tabs('load',currentLoadingTab);
	}
}

function setUpGalleria(){
	Galleria.loadTheme("scripts/galleria/themes/classic/galleria.classic.js");
	$("#gallery").galleria({
		autoplay: 5000,
		width:1024,
		height:300,
		imageCrop: true,
		transition: "fade",
		transitionSpeed: 1000,
		showCounter: false
	});
	
	$(window).load(function(){
		$("#tabs").show();
	});
}

function logout(){
	$.post("webContent/logout.php", function(data){
		$("#adminTab").hide();
	},'json');
}

function checkLogin(){
	$.get("webContent/login.php?check=true", function(data){
		if (data.loggedIn == "true"){
			$("#adminTab").show();
		}
	},'json');
}

