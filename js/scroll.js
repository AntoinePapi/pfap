


$(document).ready(function(){
$('a[href*=#about]').click(function() {
if (location.pathname.replace(/^\//,") == this.pathname.replace(/^\//,")
&& location.hostname == this.hostname) {
var $target = $(this.hash);
$target = $target.length && $target
|| $('[cover=' + this.hash.slice(1) +']');
if ($target.length) {
var targetOffset = $target.offset().top;
$('html,body')
.animate({scrollTop: targetOffset - 72}, 500);
return false;
}
}
});
});

$(document).ready(function(){
$('a[href*=#projects]').click(function() {
if (location.pathname.replace(/^\//,") == this.pathname.replace(/^\//,")
&& location.hostname == this.hostname) {
var $target = $(this.hash);
$target = $target.length && $target
|| $('[cover=' + this.hash.slice(1) +']');
if ($target.length) {
var targetOffset = $target.offset().top;
$('html,body')
.animate({scrollTop: targetOffset - 70}, 500);
return false;
}
}
});
});

$(document).ready(function(){
$('a[href*=#contact]').click(function() {
if (location.pathname.replace(/^\//,") == this.pathname.replace(/^\//,")
&& location.hostname == this.hostname) {
var $target = $(this.hash);
$target = $target.length && $target
|| $('[cover=' + this.hash.slice(1) +']');
if ($target.length) {
var targetOffset = $target.offset().top;
$('html,body')
.animate({scrollTop: targetOffset - 70}, 500);
return false;
}
}
});
});


$(document).ready(function(){
$('a[href*=#intro]').click(function() {
if (location.pathname.replace(/^\//,") == this.pathname.replace(/^\//,")
&& location.hostname == this.hostname) {
var $target = $(this.hash);
$target = $target.length && $target
|| $('[cover=' + this.hash.slice(1) +']');
if ($target.length) {
var targetOffset = $target.offset().top;
$('html,body')
.animate({scrollTop: targetOffset - 70}, 500);
return false;
}
}
});
});
