<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="author" CONTENT="Antoine Papi">
<meta name="description" CONTENT="22 years old Paris based graphic designer.">
<meta name="email" CONTENT="antoine.papi@gmail.com">
<meta name="revisit-after" CONTENT="7 days">
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/mfglabs_iconset.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
<script src="js/scroll.js" type="text/javascript"></script>
<script src="js/projects.js" type="text/javascript"></script>
<script src="js/waypoints.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="icon" href="favicon.ico" />
	
<title>Antoine Papi</title>


<script>

$(document).ready(function(){
  
  
  

  $('#about').waypoint(function() {
    document.getElementById('topbar').className='fixed';
    document.getElementById('topbar-margin').className='on';
    document.getElementById('storm2').className='topbutton stopstorm';
    document.getElementById('about').className='about-margin';
    }, { offset: 60 
});

    $('#about').waypoint(function() {
    document.getElementById('topbar').className='relative';
    document.getElementById('topbar-margin').className='off';
    document.getElementById('storm2').className='topbutton';
    document.getElementById('about').className='';
    }, { offset: 69 
});
    $('#about').waypoint(function() {
    document.getElementById('storm').className='active selector-about';
    }, { offset: 70 
});   
    $('#projects').waypoint(function() {
    document.getElementById('storm').className='active selector-projects';
    }, { offset: 170 
});  
    $('#firstwork').waypoint(function() {
    document.getElementById('storm').className='active selector-contact';
    }, { offset: 170 
});    
  
});
</script> 
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
</head>
<body>
  

      <div id="intro">
        <h1>Antoine Papi</h1>
        <div id="explore">
          <a href="#about"><p>Explore</p><i class="icon-chevron_down"></i></a>
          
        </div>
      </div> <!-- end of intro -->
      <div id="all">  
        <div id="topbar" class="relative">  
          <h2><a href="#intro">Antoine Papi</a></h2>
          <ul>
            <li class="toplink first"><div id="storm2" class="topbutton"><a href="#about">about</a><div id="storm" class="active selector-about"></div></div></li>
            <li class="toplink inactive"><div class="topbutton"><a href="#projects">projects</a></div></li>
            <li class="toplink inactive"><div class="topbutton"><a href="#contact">contact</a></div></li>
          </ul>
          <div id="topbar-margin" class="off"></div>
        </div> <!-- end of topbar-->
        <div id="about">
          <p class="title">About me</p>
          <img src="imgs/antoine.jpg" alt="Antoine Papi"/>
          <p>Hi there,</p>
          <p>Paris based designer. I’m in love with smart stuff.</p>
          <p>I really like to optimize the user experience, i like imagine things and have an overall picture of the project.</p>
          <p></br>I’m looking for a 4 months internship starting this summer.</p>

        </div>
        <div id="case-study" class="fold">
          <div id="border-left"></div>
        </div>
        <div id="projects">
          <p class="title">Some projects</p>
          <p>Here you can check some of projects i made in school or for myself.</p>
          <div id="firstwork" onclick="OpenProject1()" class="project-square"></div>
          <div class="project-square center-square"></div>
          <div class="project-square"></div>
        </div>
        <div id="contact">
          <div id="contact_recip">
            <p class="title">Get in touch!</p>
            <p class="subtitle">Send me an e-mail</p>
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

            <div id="coords">
              <p class="subtitle">Infos</p>
              <p class="infos">antoine.papi@gmail.com    06.18.24.02.15</p>
              <p class="infos">Paris 7eme / Saint-Mandé</p>
              <a href="#" class="social-icons"><img src="imgs/cv.png" alt="cv"/></a>
              <a href="#" class="social-icons"><img src="imgs/twitter.png" alt="twitter"/></a>
              <a href="#" class="social-icons"><img src="imgs/linkedin.png" alt="linkedin"/></a>
            </div> <!-- end of coords -->
          </div> <!-- end of contact-recipe -->
        </div> <!-- end of contact -->
        

      </div><!-- enf of all -->
</body>
</html>