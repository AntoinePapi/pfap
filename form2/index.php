<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

    $("#submit_btn").click(function() { 
        //get input field values
        var user_name       = $('input[name=name]').val(); 
        var user_email      = $('input[name=email]').val();
        var user_phone      = $('input[name=phone]').val();
        var user_message    = $('textarea[name=message]').val();
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){ 
            $('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
        if(user_phone=="") {    
            $('input[name=phone]').css('border-color','red'); 
            proceed = false;
        }
        if(user_message=="") {  
            $('textarea[name=message]').css('border-color','red'); 
            proceed = false;
        }
        
        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'userName':user_name, 'userEmail':user_email, 'userPhone':user_phone, 'userMessage':user_message};
            
            //Ajax post data to server
            $.post('contact_me.php', post_data, function(data){  
                
                //load success massage in #result div element, with slide effect.       
                $("#result").hide().html('<div class="success">'+data+'</div>').slideDown();
                
                //reset values in all input fields
                $('#contact_form input').val(''); 
                $('#contact_form textarea').val(''); 
                
            }).fail(function(err) {  //load any error data
                $("#result").hide().html('<div class="error">'+err.statusText+'</div>').slideDown();
            });
        }
                
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() { 
        $("#contact_form input, #contact_form textarea").css('border-color',''); 
        $("#result").slideUp();
    });
    
});
</script>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<fieldset id="contact_form">
    <div id="result"></div>
    <input type="text" name="name" id="name" placeholder="Name:" />
    </label>
    
    <input type="text" name="email" id="email" placeholder="E-mail:" />
    </label>
    
    <textarea name="message" id="message" placeholder="Message:"></textarea>
    </label>
    
    <label><span>&nbsp;</span>
    <button class="submit_btn" id="submit_btn">Submit</button>
    </label>
</fieldset>
</body>
</html>
