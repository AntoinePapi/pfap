	/*	onclick="ObscurcirProject()"  */

$(document).ready(function(){


$('#first1').waypoint(function() {
    document.getElementById('first1').className='on-anim first1-after';
    }, { offset: 110 
});  

$('#second').waypoint(function() {
    document.getElementById('second').className='on-anim second-after';
	/*setTimeout(function(){document.getElementById('obscur').className='obscur-on-1';},0);*/
    }, { offset: 100 
});  

$('#img_wk2').waypoint(function() {
    document.getElementById('img_wk2').className='on-anim img_wk2-after';
    }, { offset: 70 
}); 

$('#img_busa').waypoint(function() {
    document.getElementById('img_busa').className='on-anim img_busa-after';
    }, { offset: 130 
}); 

$('#img_busa1').waypoint(function() {
    document.getElementById('img_busa1').className='on-anim img_busa1-after';
    }, { offset: 130 
}); 

$('#img_busa2').waypoint(function() {
    document.getElementById('img_busa2').className='on-anim img_busa2-after';
    }, { offset: 130 
}); 







});