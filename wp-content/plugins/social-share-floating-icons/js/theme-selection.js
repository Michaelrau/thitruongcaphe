(function($) {
    $(document).ready(function() {
       
if($('#wpsfb-user-selected-theme-value').val() == 1){
	var theme ='<div id="wpssfi-theme-panel" class=""><p></p><div id="theme5-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-push"><img id="wpsfb-user-selected-facebook-img" class="theme1-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-push"><img id="wpsfb-user-selected-twitter-img" class="theme1-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-push"><img id="wpsfb-user-selected-google-img" class="theme1-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-push"><img id="wpsfb-user-selected-pinterest-img" class="theme1-pinterest-icon"></a></br><a id="wpsfb-theme-linkedin-icon" target="_blank" href="#" class="wpsfb-theme-linkedin-icon hvr-push"><img id="wpsfb-user-selected-linkedin-img" class="theme1-linkedin-icon"></a></div>  <!-- end of badge-icon-div -->';
	var theme2 ='<div id="wpssfi-theme-panel" class=""><p></p><div id="theme5-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-push"><img id="wpsfb-user-selected-facebook-img" class="theme1-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-push"><img id="wpsfb-user-selected-twitter-img" class="theme1-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-push"><img id="wpsfb-user-selected-google-img" class="theme1-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-push"><img id="wpsfb-user-selected-pinterest-img" class="theme1-pinterest-icon"></a><a id="wpsfb-theme-linkedin-icon" target="_blank" href="#" class="wpsfb-theme-linkedin-icon hvr-push"><img id="wpsfb-user-selected-linkedin-img" class="theme1-linkedin-icon"></a></div>  <!-- end of badge-icon-div -->';
if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}
if($('#wpsfb-user-selected-theme-value').val() == 2){
	var theme ='<div id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-bounce-in" ><img id="wpsfb-user-selected-facebook-img" class="theme2-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-bounce-in"><img id="wpsfb-user-selected-twitter-img" class="theme2-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-bounce-in"><img id="wpsfb-user-selected-google-img" class="theme2-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#"class="wpsfb-theme-pinterest-icon hvr-bounce-in"><img id="wpsfb-user-selected-pinterest-img" class="theme2-pinterest-icon"></a><a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-bounce-in"><img id="wpsfb-user-selected-linkedin-img" class="theme2-linkedin-icon"></a> </div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-bounce-in" ><img id="wpsfb-user-selected-facebook-img" class="theme2-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-bounce-in"><img id="wpsfb-user-selected-twitter-img" class="theme2-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-bounce-in"><img id="wpsfb-user-selected-google-img" class="theme2-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#"class="wpsfb-theme-pinterest-icon hvr-bounce-in"><img id="wpsfb-user-selected-pinterest-img" class="theme2-pinterest-icon"></a><a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-bounce-in"><img id="wpsfb-user-selected-linkedin-img" class="theme2-linkedin-icon"></a> </div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
		$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}

if($('#wpsfb-user-selected-theme-value').val() == 3){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-wobble-horizontal" ><img id="wpsfb-user-selected-facebook-img" class="theme3-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-wobble-horizontal"><img id="wpsfb-user-selected-twitter-img"  class="theme3-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-wobble-horizontal"><img id="wpsfb-user-selected-google-img" class="theme3-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-wobble-horizontal"><img id="wpsfb-user-selected-pinterest-img" class="theme3-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#"class="wpsfb-theme-linkedin-icon hvr-wobble-horizontal"><img id="wpsfb-user-selected-linkedin-img" class="theme3-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-wobble-horizontal" ><img id="wpsfb-user-selected-facebook-img" class="theme3-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-wobble-horizontal"><img id="wpsfb-user-selected-twitter-img"  class="theme3-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-wobble-horizontal"><img id="wpsfb-user-selected-google-img" class="theme3-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-wobble-horizontal"><img id="wpsfb-user-selected-pinterest-img" class="theme3-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#"class="wpsfb-theme-linkedin-icon hvr-wobble-horizontal"><img id="wpsfb-user-selected-linkedin-img" class="theme3-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}

if($('#wpsfb-user-selected-theme-value').val() == 4){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-wobble-vertical" ><img id="wpsfb-user-selected-facebook-img" class="theme4-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-wobble-vertical"><img id="wpsfb-user-selected-twitter-img"  class="theme4-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-wobble-vertical"><img id="wpsfb-user-selected-google-img" class="theme4-google-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-wobble-vertical"><img id="wpsfb-user-selected-pinterest-img" class="theme4-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-wobble-vertical"><img id="wpsfb-user-selected-linkedin-img" class="theme4-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-wobble-vertical" ><img id="wpsfb-user-selected-facebook-img" class="theme4-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-wobble-vertical"><img id="wpsfb-user-selected-twitter-img"  class="theme4-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-wobble-vertical"><img id="wpsfb-user-selected-google-img" class="theme4-google-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-wobble-vertical"><img id="wpsfb-user-selected-pinterest-img" class="theme4-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-wobble-vertical"><img id="wpsfb-user-selected-linkedin-img" class="theme4-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}

if($('#wpsfb-user-selected-theme-value').val() == 5){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-wobble-to-bottom-right" ><img id="wpsfb-user-selected-facebook-img" class="theme5-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-wobble-to-bottom-right"><img id="wpsfb-user-selected-twitter-img"  class="theme5-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-wobble-to-bottom-right"><img id="wpsfb-user-selected-google-img" class="theme5-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-wobble-to-bottom-right"><img id="wpsfb-user-selected-pinterest-img" class="theme5-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-iconhvr-wobble-to-bottom-right"><img id="wpsfb-user-selected-linkedin-img" class="theme5-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-wobble-to-bottom-right" ><img id="wpsfb-user-selected-facebook-img" class="theme5-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-wobble-to-bottom-right"><img id="wpsfb-user-selected-twitter-img"  class="theme5-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-wobble-to-bottom-right"><img id="wpsfb-user-selected-google-img" class="theme5-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-wobble-to-bottom-right"><img id="wpsfb-user-selected-pinterest-img" class="theme5-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-iconhvr-wobble-to-bottom-right"><img id="wpsfb-user-selected-linkedin-img" class="theme5-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}

if($('#wpsfb-user-selected-theme-value').val() == 6){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-wobble-top" ><img id="wpsfb-user-selected-facebook-img" class="theme6-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-wobble-top"><img id="wpsfb-user-selected-twitter-img" class="theme6-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-wobble-top"><img id="wpsfb-user-selected-google-img" class="theme6-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="hvr-wobble-top"><img id="wpsfb-user-selected-pinterest-img" class="wpsfb-theme-pinterest-icon theme6-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-wobble-top"><img id="wpsfb-user-selected-linkedin-img" class="theme6-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-wobble-top" ><img id="wpsfb-user-selected-facebook-img" class="theme6-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-wobble-top"><img id="wpsfb-user-selected-twitter-img" class="theme6-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-wobble-top"><img id="wpsfb-user-selected-google-img" class="theme6-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-wobble-top"><img id="wpsfb-user-selected-pinterest-img" class="theme6-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#"class="wpsfb-theme-linkedin-icon hvr-wobble-top"><img id="wpsfb-user-selected-linkedin-img" class="theme6-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}

 if($('#wpsfb-user-selected-theme-value').val() == 7){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-wobble-skew" ><img id="wpsfb-user-selected-facebook-img" class="theme7-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-wobble-skew"><img id="wpsfb-user-selected-twitter-img"  class="theme7-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-wobble-skew"><img id="wpsfb-user-selected-google-img" class="theme7-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-wobble-skew"><img id="wpsfb-user-selected-pinterest-img" class="theme7-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-wobble-skew"><img id="wpsfb-user-selected-linkedin-img" class="theme7-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-wobble-skew" ><img id="wpsfb-user-selected-facebook-img" class="theme7-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-wobble-skew"><img id="wpsfb-user-selected-twitter-img"  class="theme7-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-wobble-skew"><img id="wpsfb-user-selected-google-img" class="theme7-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-wobble-skew"><img id="wpsfb-user-selected-pinterest-img" class="theme7-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#"class="wpsfb-theme-linkedin-icon hvr-wobble-skew"><img id="wpsfb-user-selected-linkedin-img" class="theme7-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}

	if($('#wpsfb-user-selected-theme-value').val() == 8){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-buzz-out" ><img id="wpsfb-user-selected-facebook-img" class="theme8-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-buzz-out"><img id="wpsfb-user-selected-twitter-img"  class="theme8-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-buzz-out"><img id="wpsfb-user-selected-google-img" class="theme8-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-buzz-out"><img id="wpsfb-user-selected-pinterest-img" class="theme8-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-buzz-out"><img id="wpsfb-user-selected-linkedin-img" class="theme8-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-buzz-out" ><img id="wpsfb-user-selected-facebook-img" class="theme8-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-buzz-out"><img id="wpsfb-user-selected-twitter-img"  class="theme8-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-buzz-out"><img id="wpsfb-user-selected-google-img" class="theme8-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-buzz-out"><img id="wpsfb-user-selected-pinterest-img" class="theme8-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-buzz-out"><img id="wpsfb-user-selected-linkedin-img" class="theme8-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}

if($('#wpsfb-user-selected-theme-value').val() == 9){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-grow-shadow" ><img id="wpsfb-user-selected-facebook-img" class="theme9-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-grow-shadow"><img id="wpsfb-user-selected-twitter-img"  class="theme9-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-grow-shadow"><img id="wpsfb-user-selected-google-img" class="theme9-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-grow-shadow"><img id="wpsfb-user-selected-pinterest-img" class="theme9-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-grow-shadow"><img id="wpsfb-user-selected-linkedin-img" class="theme9-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-grow-shadow" ><img id="wpsfb-user-selected-facebook-img" class="theme9-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-grow-shadow"><img id="wpsfb-user-selected-twitter-img"  class="theme9-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-grow-shadow"><img id="wpsfb-user-selected-google-img" class="theme9-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-grow-shadow"><img id="wpsfb-user-selected-pinterest-img" class="theme9-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-grow-shadow"><img id="wpsfb-user-selected-linkedin-img" class="theme9-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}

if($('#wpsfb-user-selected-theme-value').val() == 10){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-wobble-skew" ><img id="wpsfb-user-selected-facebook-img" class="theme10-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-wobble-skew"><img id="wpsfb-user-selected-twitter-img"  class="theme10-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-wobble-skew"><img id="wpsfb-user-selected-google-img" class="theme10-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-wobble-skew"><img id="wpsfb-user-selected-pinterest-img" class="theme10-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-wobble-skew"><img id="wpsfb-user-selected-linkedin-img" class="theme10-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-wobble-skew" ><img id="wpsfb-user-selected-facebook-img" class="theme10-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-wobble-skew"><img id="wpsfb-user-selected-twitter-img"  class="theme10-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-wobble-skew"><img id="wpsfb-user-selected-google-img" class="theme10-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-wobble-skew"><img id="wpsfb-user-selected-pinterest-img" class="theme10-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-wobble-skew"><img id="wpsfb-user-selected-linkedin-img" class="theme10-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}

if($('#wpsfb-user-selected-theme-value').val() == 11){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-bounce-out" ><img id="wpsfb-user-selected-facebook-img" class="theme11-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-bounce-out"><img id="wpsfb-user-selected-twitter-img"  class="theme11-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-bounce-out"><img id="wpsfb-user-selected-google-img" class="theme11-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-bounce-out"><img id="wpsfb-user-selected-pinterest-img" class="theme11-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-bounce-out"><img id="wpsfb-user-selected-linkedin-img" class="theme11-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
		var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-bounce-out" ><img id="wpsfb-user-selected-facebook-img" class="theme11-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-bounce-out"><img id="wpsfb-user-selected-twitter-img"  class="theme11-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-bounce-out"><img id="wpsfb-user-selected-google-img" class="theme11-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-bounce-out"><img id="wpsfb-user-selected-pinterest-img" class="theme11-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-bounce-out"><img id="wpsfb-user-selected-linkedin-img" class="theme11-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}

if($('#wpsfb-user-selected-theme-value').val() == 12){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-bounce-in" ><img id="wpsfb-user-selected-facebook-img" class="theme12-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-bounce-in"><img id="wpsfb-user-selected-twitter-img"  class="theme12-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-bounce-in"><img id="wpsfb-user-selected-google-img" class="theme12-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-bounce-in"><img id="wpsfb-user-selected-pinterest-img" class="theme12-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-bounce-in"><img id="wpsfb-user-selected-linkedin-img" class="theme12-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-bounce-in" ><img id="wpsfb-user-selected-facebook-img" class="theme12-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-bounce-in"><img id="wpsfb-user-selected-twitter-img"  class="theme12-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-bounce-in"><img id="wpsfb-user-selected-google-img" class="theme12-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-bounce-in"><img id="wpsfb-user-selected-pinterest-img" class="theme12-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-bounce-in"><img id="wpsfb-user-selected-linkedin-img" class="theme12-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}
if($('#wpsfb-user-selected-theme-value').val() == 13){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-grow-rotate" ><img id="wpsfb-user-selected-facebook-img" class="theme13-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-grow-rotate"><img id="wpsfb-user-selected-twitter-img"  class="theme13-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-grow-rotate"><img id="wpsfb-user-selected-google-img" class="theme13-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-grow-rotate"><img id="wpsfb-user-selected-pinterest-img" class="theme13-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-grow-rotate"><img id="wpsfb-user-selected-linkedin-img" class="theme13-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
		var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-grow-rotate" ><img id="wpsfb-user-selected-facebook-img" class="theme13-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-grow-rotate"><img id="wpsfb-user-selected-twitter-img"  class="theme13-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-grow-rotate"><img id="wpsfb-user-selected-google-img" class="theme13-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-grow-rotate"><img id="wpsfb-user-selected-pinterest-img" class="theme13-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-grow-rotate"><img id="wpsfb-user-selected-linkedin-img" class="theme13-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}
if($('#wpsfb-user-selected-theme-value').val() == 14){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-wobble-to-top-right" ><img id="wpsfb-user-selected-facebook-img" class="theme14-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-wobble-to-top-right"><img id="wpsfb-user-selected-twitter-img"  class="theme14-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-wobble-to-top-right"><img id="wpsfb-user-selected-google-img" class="theme14-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-wobble-to-top-right"><img id="wpsfb-user-selected-pinterest-img" class="theme14-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-wobble-to-top-right"><img id="wpsfb-user-selected-linkedin-img" class="theme14-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-wobble-to-top-right" ><img id="wpsfb-user-selected-facebook-img" class="theme14-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-wobble-to-top-right"><img id="wpsfb-user-selected-twitter-img"  class="theme14-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-wobble-to-top-right"><img id="wpsfb-user-selected-google-img" class="theme14-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-wobble-to-top-right"><img id="wpsfb-user-selected-pinterest-img" class="theme14-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-wobble-to-top-right"><img id="wpsfb-user-selected-linkedin-img" class="theme14-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}
if($('#wpsfb-user-selected-theme-value').val() == 15){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-rotate" ><img id="wpsfb-user-selected-facebook-img" class="theme15-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-rotate"><img id="wpsfb-user-selected-twitter-img" class="theme15-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-rotate"><img id="wpsfb-user-selected-google-img" class="theme15-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-rotate"><img id="wpsfb-user-selected-pinterest-img" class="theme15-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-rotate"><img id="wpsfb-user-selected-linkedin-img" class="theme15-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-rotate" ><img id="wpsfb-user-selected-facebook-img" class="theme15-facebook-icon"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-rotate"><img id="wpsfb-user-selected-twitter-img" class="theme15-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-rotate"><img id="wpsfb-user-selected-google-img" class="theme15-google-icon"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-rotate"><img id="wpsfb-user-selected-pinterest-img" class="theme15-pinterest-icon"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-rotate"><img id="wpsfb-user-selected-linkedin-img" class="theme15-linkedin-icon"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}

if($('#wpsfb-user-selected-theme-value').val() == 16){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-rotate" ><img id="wpsfb-user-selected-facebook-img" class="theme16-facebook-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-rotate"><img id="wpsfb-user-selected-twitter-img"  class="theme16-twitter-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-rotate"><img id="wpsfb-user-selected-google-img" class="theme16-google-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-rotate"><img id="wpsfb-user-selected-pinterest-img" class="theme16-pinterest-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-rotate"><img id="wpsfb-user-selected-linkedin-img" class="theme16-linkedin-icon wpafi-rotate"></a></div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-rotate" ><img id="wpsfb-user-selected-facebook-img" class="theme16-facebook-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-rotate"><img id="wpsfb-user-selected-twitter-img"  class="theme16-twitter-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-rotate"><img id="wpsfb-user-selected-google-img" class="theme16-google-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-rotate"><img id="wpsfb-user-selected-pinterest-img" class="theme16-pinterest-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-rotate"><img id="wpsfb-user-selected-linkedin-img" class="theme16-linkedin-icon wpafi-rotate"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}

if($('#wpsfb-user-selected-theme-value').val() == 17){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-rotate" ><img id="wpsfb-user-selected-facebook-img" class="theme17-facebook-icon hvr-buzz-out"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-rotate"><img id="wpsfb-user-selected-twitter-img"  class="theme17-twitter-icon hvr-buzz-out"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-rotate"><img id="wpsfb-user-selected-google-img" class="theme17-google-icon hvr-buzz-out"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-rotate"><img id="wpsfb-user-selected-pinterest-img" class="theme17-pinterest-icon hvr-buzz-out"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-rotate"><img id="wpsfb-user-selected-linkedin-img" class="theme17-linkedin-icon hvr-buzz-out"></a></div>  <!-- end of crystal-icon-div -->';
		var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-rotate" ><img id="wpsfb-user-selected-facebook-img" class="theme17-facebook-icon hvr-buzz-out"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-rotate"><img id="wpsfb-user-selected-twitter-img"  class="theme17-twitter-icon hvr-buzz-out"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-rotate"><img id="wpsfb-user-selected-google-img" class="theme17-google-icon hvr-buzz-out"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-rotate"><img id="wpsfb-user-selected-pinterest-img" class="theme17-pinterest-icon hvr-buzz-out"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-rotate"><img id="wpsfb-user-selected-linkedin-img" class="theme17-linkedin-icon hvr-buzz-out"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}
	if($('#wpsfb-user-selected-theme-value').val() == 18){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-bounce-in" ><img id="wpsfb-user-selected-facebook-img" class="theme18-facebook-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-bounce-in"><img id="wpsfb-user-selected-twitter-img"  class="theme18-twitter-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-bounce-in"><img id="wpsfb-user-selected-google-img" class="theme18-google-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-bounce-in"><img id="wpsfb-user-selected-pinterest-img" class="theme18-pinterest-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-bounce-in"><img id="wpsfb-user-selected-linkedin-img" class="theme18-linkedin-icon wpafi-rotate"></a></div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-bounce-in" ><img id="wpsfb-user-selected-facebook-img" class="theme18-facebook-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-bounce-in"><img id="wpsfb-user-selected-twitter-img"  class="theme18-twitter-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-bounce-in"><img id="wpsfb-user-selected-google-img" class="theme18-google-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-bounce-in"><img id="wpsfb-user-selected-pinterest-img" class="theme18-pinterest-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-bounce-in"><img id="wpsfb-user-selected-linkedin-img" class="theme18-linkedin-icon wpafi-rotate"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}
 if($('#wpsfb-user-selected-theme-value').val() == 19){
	var theme ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-pop" ><img id="wpsfb-user-selected-facebook-img" class="theme19-facebook-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-pop"><img id="wpsfb-user-selected-twitter-img wpafi-rotate"  class="theme19-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-pop"><img id="wpsfb-user-selected-google-img" class="theme19-google-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-pop"><img id="wpsfb-user-selected-pinterest-img" class="theme19-pinterest-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-pop"><img id="wpsfb-user-selected-linkedin-img" class="theme19-linkedin-icon wpafi-rotate"></a></div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div  id="wpssfi-theme-panel" class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-pop" ><img id="wpsfb-user-selected-facebook-img" class="theme19-facebook-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-pop"><img id="wpsfb-user-selected-twitter-img wpafi-rotate"  class="theme19-twitter-icon"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-pop"><img id="wpsfb-user-selected-google-img" class="theme19-google-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-pop"><img id="wpsfb-user-selected-pinterest-img" class="theme19-pinterest-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-pop"><img id="wpsfb-user-selected-linkedin-img" class="theme19-linkedin-icon wpafi-rotate"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}
 if($('#wpsfb-user-selected-theme-value').val() == 20){
	var theme ='<div  id="wpssfi-theme-ps class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-rotate" ><img id="wpsfb-user-selected-facebook-img" class="theme20-facebook-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-rotate"><img id="wpsfb-user-selected-twitter-img" class="theme20-twitter-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-rotate"><img id="wpsfb-user-selected-google-img" class="theme20-google-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-rotate"><img id="wpsfb-user-selected-pinterest-img" class="theme20-pinterest-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-rotate"><img id="wpsfb-user-selected-linkedin-img" class="theme20-linkedin-icon wpafi-rotate"></a></div>  <!-- end of crystal-icon-div -->';
	var theme2 ='<div  id="wpssfi-theme-ps class=""><p></p> <div id="crystal-icon-div" class="wpsfb-social-templates"><a target="_blank" id="wpsfb-theme-facebook-icon" href="#" class="wpsfb-theme-facebook-icon hvr-rotate" ><img id="wpsfb-user-selected-facebook-img" class="theme20-facebook-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-twitter-icon" href="#" class="wpsfb-theme-twitter-icon hvr-rotate"><img id="wpsfb-user-selected-twitter-img" class="theme20-twitter-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-google-icon" href="#" class="wpsfb-theme-google-icon hvr-rotate"><img id="wpsfb-user-selected-google-img" class="theme20-google-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-pinterest-icon" href="#" class="wpsfb-theme-pinterest-icon hvr-rotate"><img id="wpsfb-user-selected-pinterest-img" class="theme20-pinterest-icon wpafi-rotate"></a> <a target="_blank" id="wpsfb-theme-linkedin-icon" href="#" class="wpsfb-theme-linkedin-icon hvr-rotate"><img id="wpsfb-user-selected-linkedin-img" class="theme20-linkedin-icon wpafi-rotate"></a></div>  <!-- end of crystal-icon-div -->';
	if($('#wpsfb-enable-floating-selection').val() != 0){
	$('#wpsfb-floating-icon-theme').html(theme);
	}
	if($('#wpsfb-enable-post-selection').val() != 0){
		$('.wpssfi-post-div').append(theme2);
	}
}


if($('#wpsfb-user-selected-facebook').val() != 1){
	$(".wpsfb-theme-facebook-icon").hide();
}

if($('#wpsfb-user-selected-twitter').val() != 1){
	$(".wpsfb-theme-twitter-icon").hide();
}

if($('#wpsfb-user-selected-google').val() != 1){
	$(".wpsfb-theme-google-icon").hide();
}

if($('#wpsfb-user-selected-linkedin').val() != 1){
	$(".wpsfb-theme-linkedin-icon").hide();
}

if($('#wpsfb-user-selected-pinterest').val() != 1){
	$(".wpsfb-theme-pinterest-icon").hide();
}



if($('#wpsfb-user-selected-float-value').val() == 1){
	$('#wpsfb-floating-icon-theme').css('right', '0');
}

if($('#wpsfb-user-selected-float-value').val() == 2){
	$('#wpsfb-floating-icon-theme').css('left', '0');
}


if($('#wpsfb-user-selected-margin-top-value').val()!="" && $('#wpsfb-user-selected-margin-top-type').val() ==1 ){
	var margintop = $("#wpsfb-user-selected-margin-top-value").val();
	$('#wpsfb-floating-icon-theme').css('margin-top', margintop+'px');
}

if($('#wpsfb-user-selected-margin-top-value').val()!="" && $('#wpsfb-user-selected-margin-top-type').val() ==2 ){
	var margintop = $("#wpsfb-user-selected-margin-top-value").val();
	$('#wpsfb-floating-icon-theme').css('margin-top', margintop+'%');
}

if($('#wpsfb-user-selected-button-size').val()!= ""){
	
var buttonsize = $("#wpsfb-user-selected-button-size").val();
$('<style type="text/css">#wpsfb-user-selected-facebook-img{background-size:'+ buttonsize +'px; width:0px; height:0px;padding-left:'+buttonsize+'px;padding-top:'+buttonsize+'px;background-repeat:no-repeat;}</style>').appendTo(document.head);
$('<style type="text/css">#wpsfb-user-selected-twitter-img{background-size:'+ buttonsize +'px; width:0px; height:0px;padding-left:'+buttonsize+'px;padding-top:'+buttonsize+'px;background-repeat:no-repeat;}</style>').appendTo(document.head);
$('<style type="text/css">#wpsfb-user-selected-google-img{background-size:'+ buttonsize +'px; width:0px; height:0px;padding-left:'+buttonsize+'px;padding-top:'+buttonsize+'px;background-repeat:no-repeat;}</style>').appendTo(document.head);
$('<style type="text/css">#wpsfb-user-selected-pinterest-img{background-size:'+ buttonsize +'px; width:0px; height:0px;padding-left:'+buttonsize+'px;padding-top:'+buttonsize+'px;background-repeat:no-repeat;}</style>').appendTo(document.head);
$('<style type="text/css">#wpsfb-user-selected-linkedin-img{background-size:'+ buttonsize +'px; width:0px; height:0px;padding-left:'+buttonsize+'px;padding-top:'+buttonsize+'px;background-repeat:no-repeat;}</style>').appendTo(document.head);

$('<style type="text/css">#wpsfb-theme-facebook-icon{width:'+ buttonsize +'px; height:'+buttonsize+'px;}</style>').appendTo(document.head);
$('<style type="text/css">#wpsfb-theme-twitter-icon{width:'+ buttonsize +'px; height:'+buttonsize+'px;}</style>').appendTo(document.head);
$('<style type="text/css">#wpsfb-theme-google-icon{width:'+ buttonsize +'px; height:'+buttonsize+'px;}</style>').appendTo(document.head);
$('<style type="text/css">#wpsfb-theme-pinterest-icon{width:'+ buttonsize +'px; height:'+buttonsize+'px;}</style>').appendTo(document.head);
$('<style type="text/css">#wpsfb-theme-linkedin-icon{width:'+ buttonsize +'px; height:'+buttonsize+'px;}</style>').appendTo(document.head);

$('<style type="text/css">#wpsfb-floating-icon-theme{width:'+ buttonsize +'px; height:'+buttonsize+'px; margin-right:'+buttonsize+'px;}</style>').appendTo(document.head);
}

if($('#wpsfb-user-selected-size-btw-button').val() !=""){
	var marginbtwbutton = $("#wpsfb-user-selected-size-btw-button").val();
	$('<style type="text/css">#wpsfb-theme-facebook-icon{margin-bottom:'+ marginbtwbutton +'px;margin-right:'+ marginbtwbutton +'px;}</style>').appendTo(document.head);
	$('<style type="text/css">#wpsfb-theme-twitter-icon{margin-bottom:'+ marginbtwbutton +'px;margin-right:'+ marginbtwbutton +'px;}</style>').appendTo(document.head);
	$('<style type="text/css">#wpsfb-theme-google-icon{margin-bottom:'+ marginbtwbutton +'px;margin-right:'+ marginbtwbutton +'px;}</style>').appendTo(document.head);
	$('<style type="text/css">#wpsfb-theme-pinterest-icon{margin-bottom:'+ marginbtwbutton +'px;margin-right:'+ marginbtwbutton +'px;}</style>').appendTo(document.head);
	$('<style type="text/css">#wpsfb-theme-linkedin-icon{margin-bottom:'+ marginbtwbutton +'px;margin-right:'+ marginbtwbutton +'px;}</style>').appendTo(document.head);
	$('#wpsfb-floating-icon-theme').css('width', marginbtwbutton+'px');
}

wpsocial_networks_ids = ["wpsfb-theme-facebook-icon",
		"wpsfb-theme-twitter-icon",
		"wpsfb-theme-google-icon",
		"wpsfb-theme-linkedin-icon",
		"wpsfb-theme-pinterest-icon"];
		wpsocial_networks_url = ["http://www.facebook.com/sharer/sharer.php?u=",
		"https://twitter.com/share?url=",
		"https://plus.google.com/share?url=",
		"http://www.linkedin.com/shareArticle?url=",
		"http://pinterest.com/pin/create/button/?url="];
		arrayLengthlink = wpsocial_networks_ids.length;
		
		 post_url = $("#wpafi-post-id").val();

		 for (var j = 0 ; j < arrayLengthlink; j++) {
			$("."+wpsocial_networks_ids[j]).attr("href", wpsocial_networks_url[j]+post_url);
		}
		jQuery(".wpssfi-show-hide-icons").click(function(){
        jQuery(".wpsfb-social-templates").toggle("slow");
        if($(".wpssfi-show-hide-icons").hasClass('rotateRight')){
        	 $(".wpssfi-show-hide-icons").removeClass('rotateRight');
        	  $(".wpssfi-show-hide-icons").addClass('rotateLeft');
        }
        else{
        	 $(".wpssfi-show-hide-icons").removeClass('rotateLeft');
        $(".wpssfi-show-hide-icons").addClass('rotateRight');
    }
    });
    });


})(jQuery);
