function OpenProject1(){
			/*setTimeout(function(){document.getElementById('about-me').className='n2-on-da-place';},20);*/
			document.getElementById('case-study-1').className='unfold';
			setTimeout(function(){document.getElementById('obscur').className='obscur-on-1';},0);
			setTimeout(function(){document.getElementById('obscur').className='obscur-on-2';},20);
		}
function OpenProject2(){
			/*setTimeout(function(){document.getElementById('about-me').className='n2-on-da-place';},20);*/
			document.getElementById('case-study-2').className='unfold';
			setTimeout(function(){document.getElementById('obscur').className='obscur-on-1';},0);
			setTimeout(function(){document.getElementById('obscur').className='obscur-on-2';},20);
		}
function OpenProject3(){
			/*setTimeout(function(){document.getElementById('about-me').className='n2-on-da-place';},20);*/
			document.getElementById('case-study-3').className='unfold';
			setTimeout(function(){document.getElementById('obscur').className='obscur-on-1';},0);
			setTimeout(function(){document.getElementById('obscur').className='obscur-on-2';},20);
		}

function CloseProject(){
			/*setTimeout(function(){document.getElementById('about-me').className='n2-on-da-place';},20);*/
			document.getElementById('case-study-1').className='fold';
			document.getElementById('case-study-2').className='fold';
			document.getElementById('case-study-3').className='fold';
			setTimeout(function(){document.getElementById('obscur').className='obscur-on-1';},0);
			setTimeout(function(){document.getElementById('obscur').className='off';},500);
			setTimeout(function(){document.getElementById('first1').className='off-anim';},500);
			setTimeout(function(){document.getElementById('second').className='off-anim';},500);
			setTimeout(function(){document.getElementById('img_wk2').className='off-anim';},500);
			setTimeout(function(){document.getElementById('img_busa').className='off-anim';},500);
			setTimeout(function(){document.getElementById('img_busa1').className='off-anim';},500);
			setTimeout(function(){document.getElementById('img_busa2').className='off-anim';},500);
		}	

function ObscurcirProject(){
			setTimeout(function(){document.getElementById('obscur').className='obscur-on-1';},0);
			setTimeout(function(){document.getElementById('obscur').className='obscur-on-2';},20);
		}		


	/*	onclick="ObscurcirProject()"  */