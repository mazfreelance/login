// JavaScript Document
//v2
$(document).ready(function()
{
	$('#succMsg').hide();
	$('#errorMsg').hide();
	$('#loading').hide();
	$("#form_login").fadeIn();
	$("#form_login").css({"visibility":"visible","display":"block"});
	
	$('#forgotPassword').click(function(){
		
		msgWindow = window.open('forgotPasswordVerifyScreen.php','forgotPasswordScreen',"location=1,menubar=1,resizable=1,width=500,height=680");
		msgWindow.moveTo(0, 0);
		
	});
	
  $('#submit_button').click(function(){
	 // alert('click');
	  if('#uname' == '') return false;
	  if('#psw' == '') return false;
	  //if ('#rememberme' == '') return false;
	  $('#loading').show();
	  var parms = $('#form_login').serialize();
	 
	  var path = '';
	//alert('Kat luar: ' +parms);
	  var fileprocess = 'process_login.php';

	  $.post(fileprocess, parms, function(data){
		 
		  var feedback = data.split('|'); 
			if(feedback[0] == 'OK') {
				alert('Kat dalam: ' +data);
				$('#errorMsg').hide();
				$('#succMsg').html('You success to login !');
				
				$('#succMsg').show();
				$('#loading').hide();  
				// further process for valid login
				var parms = $('#form_login').serialize();
				$.post('process_login_valid.php',parms,function(data){
					// continue to run next page
				//alert(data);
					var url = data;
					window.location.href=url;
					
				});
				
				}
			else {
				
				$('#errorMsg').html('<strong>Your username/password isn&#39;t not match<br/>Please try again!!</strong>');
				
				$('#errorMsg').show();
				$('#loading').hide();
				
			return false; 
			
			}
		  
		  });
	  return false;
	  });
	  return false;
});