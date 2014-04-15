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
<script src="js/script.js" type="text/javascript"></script>
<script src="js/projects.js" type="text/javascript"></script>
<script src="js/waypoints.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/anims.js" type="text/javascript" charset="utf-8"></script>
<link rel="icon" href="favicon2.png" />
	
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
          <p> I'm a 22 years old student, currently in my third year at <a href="http://www.hetic.net/">HETIC.</a> </p>
          <p>I really like to optimize the user experience, to innovate and have an overall picture of the project.</p>
          <p></br>I’m looking for a 4 months internship starting this summer.</p>

        </div>
          <div id="case-study-1" class="fold">
            <p class="cs_title"> Street Message </p>
            <div class="circle"></div>
            <p class="job_title"> school project UX/UI design </p>
            <p class="description"> Street Message is a school project that we made in a group of 5
              during 2 weeks. It’s an application which allows you to post a geolocated message directly in
              the streets. Other people can see this message, and respond to it when they are close enough. </p>

            <div id="img_cs" class="cf">
                <img id="first1" class="off-anim" src="imgs/SM_1.png">
               <p class="comment_cs"> See all the messages around you, and all the responses people gave on the messages you posted.</p>   
            </div>
            
            <div id="img_cs1" class="cf">
            <img id="second"  class="off-anim" src="imgs/SM_2.png">
            <p class="comment_cs1"> Localize directly in the app </p>
            </div>

            <img class="third" src="imgs/styley.png">

             <p class="player_cs"> Here is a motion I made for this project </p>

              <div id="player">
      
            <iframe src="//player.vimeo.com/video/89328064" width="660" height="372" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            
            <a href="#projects"><img id="close-project-1" class="close-project" src="imgs/close.png" alt="Close Case Study" onclick="CloseProject()"/></a>
          </div>


        <div id="case-study-2" class="fold">
          <p class="cs_title"> Redesign Wikipedia </p>
           <div class="circle"></div>
          <p class="job_title"> school project UX/UI design </p>
          <p class="description"> Redesign Wikipedia, during a 4 hours exam. I had to make the site easier to read and nicer to experience. </p>

           <div id="img_cs" class="cf">
              <img class="img_wk" src="imgs/WK_1.png">
             <p class="comment_wk"> Invite users to contribute more</p>   
          </div>

           
          <div id="img_cs1" class="cf">
          <img class="img_wk1" src="imgs/WK_2.png">
          <p class="comment_wk1"> Typography is my first love, i like to work with it, make it even more beautiful</p>
          </div>

          <img id="img_wk2" class="off-anim" src="imgs/WK_3.png">
          <p class="comment_wk2"> Regroup all the informations in one place </p>

          <a href="#projects"><img id="close-project-2" class="close-project" src="imgs/close.png" alt="Close Case Study" onclick="CloseProject()"/></a>
               
        </div>

        <div id="case-study-3" class="fold">
          <p class="cs_title"> BasketUSA app redesign </p>
           <div class="circle"></div>
          <p class="job_title"> Personal project UX/UI design </p>
          <p class="description"> BasketUSA is the reference in basket informations. </br>I redesigned the application to make it more intuitive. </p>

           <img id="img_busa" class="off-anim" src="imgs/busa_1.png">
          <p class="comment_busa"> Purify informations and go to the fundamentals </p>

            <img id="img_busa1" class="off-anim" src="imgs/busa_2.png">
          <p class="comment_busa1"> Make the whole article more readable </p>

            <img id="img_busa2" class="off-anim" src="imgs/busa_3.png">
          <p class="comment_busa2"> Help the user find information quickly </p>

           <img class="img_busamo" src="imgs/busa_mo.png">




          <a href="#projects"><img id="close-project-3" class="close-project" src="imgs/close.png" alt="Close Case Study" onclick="CloseProject()"/></a>
        </div>

        <div id="projects">
          <p class="title">Some projects</p>
          <p>Here you can check some projects i made in school or for myself.</p>
          <a href="#projects"><div id="firstwork" onclick="OpenProject1()" class="project-square"></div></a>
          <a href="#projects"><div id="secondwork" onclick="OpenProject2()" class="project-square center-square"></div></a>
          <a href="#projects"><div id="thirdwork" onclick="OpenProject3()" class="project-square"></div></a>
        </div>
        <div id="contact">
          <div id="contact_recip">
            <p class="title">Get in touch !</p>
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
              <a href="CV_PAPI.pdf" class="social-icons"><img src="imgs/cv.png" alt="cv"/></a>
              <a href="https://twitter.com/AntoinePapi" class="social-icons"><img src="imgs/twitter.png" alt="twitter"/></a>
              <a href="https://www.linkedin.com/profile/view?id=256610287&trk=nav_responsive_tab_profile_pic" class="social-icons"><img src="imgs/linkedin.png" alt="linkedin"/></a>
            </div> <!-- end of coords -->
          </div> <!-- end of contact-recipe -->
        </div> <!-- end of contact -->

        

      </div><!-- enf of all -->
</body>
</html>