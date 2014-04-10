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
<script src="js/anims.js" type="text/javascript" charset="utf-8"></script>
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

    $('#close-project-1').waypoint(function() {
    document.getElementById('close-project-1').className='close-fixed';
    }, { offset: 20 
});   
    $('#close-project-1').waypoint(function() {
    document.getElementById('close-project-1').className='close-project';
    }, { offset: 21 
});   
    $('#close-project-2').waypoint(function() {
    document.getElementById('close-project-2').className='close-fixed';
    }, { offset: 20 
});   
    $('#close-project-2').waypoint(function() {
    document.getElementById('close-project-2').className='close-project';
    }, { offset: 21 
});   
    $('#close-project-3').waypoint(function() {
    document.getElementById('close-project-3').className='close-fixed';
    }, { offset: 20 
});   
    $('#close-project-3').waypoint(function() {
    document.getElementById('close-project-3').className='close-project';
    }, { offset: 21 
});    
  
});
</script> 
<script> /* FORMULAIRE MAIL MORISSEAU */
      $("form").submit(function(e){
        e.preventDefault();
        sendMail();
      });


sendMail = function() {
  var mess = $("#message").val();
  var name = $("#name").val();
  var mail = $("#email").val();
  if(//tests de tes différentes valeurs, si ça te convient)
  {
    var params="nom=" + name + "&email=" + mail + "&message=" + mess;
    $.ajax({
      url:"send.php",
      method:"post",
      data:params
    })
    .success(function(data){
      //Affichage d'un message en mode "Merci pour ton message dude"
      //On vide tout les champs pour dire que c'est envoyé
      $("#name").val("");
      $("#email").val("");
      $("#message").val("");
    })
    .fail(function(){
      //Affichage d'un message en mode "Oups, erreur d'envoi"
    });
  }
  else {
    //Affichage d'un message en mode "Faut tout remplir"
  }
};
</script>
<!-- OLD MAIL JS <script type="text/javascript">
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
</script> -->
</head>
<body>
  
      <div id="obscur" class="off"></div>
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
            <li class="toplink inactive"><div class="topbutton"><a href="#contact" onclick="document.getElementById('storm').className='active selector-contact';">contact</a></div></li>
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
          <div id="case-study-1" class="fold">
            <p class="cs_title"> Street Message </p>
            <div class="circle"></div>
            <p class="job_title"> school project UX/UI design </p>
            <p class="description"> Street message is a school project that we made in group of 5 people,
              during 2 weeks. It’s an application who allow you to post a geolocated message directly in
              the street. Other people can see this message, and respond to it when they close enough. </p>

            <div id="img_cs" class="cf">
                <img id="first1" class="off-anim" src="imgs/SM_1.png">
               <p class="comment_cs"> See all the message close to you, and all the response people let on your own message.</p>   
            </div>
            
            <div id="img_cs1" class="cf">
            <img id="second"  class="off-anim" src="imgs/SM_2.png">
            <p class="comment_cs1"> Localize directly in the app </p>
            </div>

            <img class="third" src="imgs/styley.png">

             <p class="player_cs"> Here is a motion i made for this project </p>

              <div id="player">
      
            <iframe src="//player.vimeo.com/video/89328064" width="660" height="372" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            
            <a href="#projects"><img id="close-project-1" class="close-project" src="imgs/close.png" alt="Close Case Study" onclick="CloseProject()"/></a>
          </div>


        <div id="case-study-2" class="fold">
          <p class="cs_title"> Redesign Wikipedia </p>
           <div class="circle"></div>
          <p class="job_title"> school project UX/UI design </p>
          <p class="description"> Redesign Wikipedia, during a 4 hours exam. I have to make the site easier to read and to watch. </p>

           <div id="img_cs" class="cf">
              <img class="img_wk" src="imgs/WK_1.png">
             <p class="comment_wk"> Invit users to contribute more</p>   
          </div>

           
          <div id="img_cs1" class="cf">
          <img class="img_wk1" src="imgs/WK_2.png">
          <p class="comment_wk1"> Typography is my first love, i like to work on it   </p>
          </div>

          <img id="img_wk2" class="off-anim" src="imgs/WK_3.png">
          <p class="comment_wk2"> Regroup all the informations in small places </p>

          <a href="#projects"><img id="close-project-2" class="close-project" src="imgs/close.png" alt="Close Case Study" onclick="CloseProject()"/></a>
               
        </div>

        <div id="case-study-3" class="fold">
          <p class="cs_title"> BasketUSA app redesign </p>
           <div class="circle"></div>
          <p class="job_title"> Personnal project UX/UI design </p>
          <p class="description"> BasketUSA is the reference in basket informations. I redesign the application to make it more intuitive. </p>

           <img id="img_busa" class="off-anim" src="imgs/busa_1.png">
          <p class="comment_busa"> Purify informations and go to the fundamental </p>

            <img id="img_busa1" class="off-anim" src="imgs/busa_2.png">
          <p class="comment_busa1"> Make the whole article more readable </p>

            <img id="img_busa2" class="off-anim" src="imgs/busa_3.png">
          <p class="comment_busa2"> Help the user to find information quickly </p>

           <img class="img_busamo" src="imgs/busa_mo.png">




          <a href="#projects"><img id="close-project-3" class="close-project" src="imgs/close.png" alt="Close Case Study" onclick="CloseProject()"/></a>
        </div>

        <div id="projects">
          <p class="title">Some projects</p>
          <p>Here you can check some of projects i made in school or for myself.</p>
          <a href="#projects"><div id="firstwork" onclick="OpenProject1()" class="project-square"></div></a>
          <a href="#projects"><div id="secondwork" onclick="OpenProject2()" class="project-square center-square"></div></a>
          <a href="#projects"><div id="thirdwork" onclick="OpenProject3()" class="project-square"></div></a>
        </div>
        <div id="contact">
          <div id="contact_recip">
            <p class="title">Get in touch!</p>
            <p class="subtitle">Send me an e-mail</p>
            <form action="send.php" method="post">
            <fieldset id="contact_form">
                <div id="result"></div>
                <input type="text" name="name" id="name" placeholder="Name:" />
                </label>
                
                <input type="email" name="email" id="email" placeholder="E-mail:" />
                </label>
                
                <textarea name="message" id="message" placeholder="Message:"></textarea>
                </label>
                
                <label><span>&nbsp;</span>
                <input type="submit" class="submit_btn" id="submit_btn" value="Send"></button>
                </label>
            </fieldset>
            </form>

            <div id="coords">
              <p class="subtitle">Infos</p>
              <p class="infos">antoine.papi@gmail.com    06.18.24.02.15</p>
              <p class="infos">Paris 7eme</p>
              <a href="#" class="social-icons"><img src="imgs/cv.png" alt="cv"/></a>
              <a href="https://twitter.com/AntoinePapi" class="social-icons"><img src="imgs/twitter.png" alt="twitter"/></a>
              <a href="https://www.linkedin.com/profile/view?id=256610287&trk=nav_responsive_tab_profile_pic" class="social-icons"><img src="imgs/linkedin.png" alt="linkedin"/></a>
            </div> <!-- end of coords -->
          </div> <!-- end of contact-recipe -->
        </div> <!-- end of contact -->

        <!-- <form action="send.php" method="post">
          <input type="text" id="name" name="name" placeholder="Name" />
          
          <input type="email" id="email" name="email" placeholder="Email" />
          
          <textarea name="message" id="message" rows="8" cols="40" placeholder="Hi,"></textarea>

          <input type="submit" value="Send">
        </form> -->
        

      </div><!-- enf of all -->
</body>
</html>