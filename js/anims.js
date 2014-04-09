	/*	onclick="ObscurcirProject()"  */

$(document).ready(function(){


$('#first1').waypoint(function() {
    document.getElementById('first1').className='on-anim first1-after';
    }, { offset: 100 
});  

$('#second').waypoint(function() {
    document.getElementById('second').className='on-anim second-after';
	/*setTimeout(function(){document.getElementById('obscur').className='obscur-on-1';},0);*/
    }, { offset: 100 
});  






});