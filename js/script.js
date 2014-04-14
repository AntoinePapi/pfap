$(document).ready(function(){

$("form").submit(function(e){
    e.preventDefault();
    sendMail();
});


sendMail = function() {
  var mess = $("#message").val();
  var name = $("#name").val();
  var mail = $("#email").val();
  if(/^[a-zA-Z\s]+$/.test(name) && /^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$/.test(mail) && mess.length > 10)
  {
    var params="nom=" + name + "&email=" + mail + "&message=" + mess;
    $.ajax({
      url:"send.php",
      method:"post",
      data:params
    })
    .success(function(data){
      $("#submit_btn").val("Thank you!");
      //On vide tout les champs pour dire que c'est envoyé
      $("#name").val("");
      $("#email").val("");
      $("#message").val("");
    })
    .fail(function(){
      $("#submit_btn").val("Oops something went wrong!");
    });
  }
  else {
    $("#submit_btn").val("Please fill all the fields correctly!");
  }
  setTimeout(function(){
    $("#submit_btn").val("Send");
  }, 3000);
};


});