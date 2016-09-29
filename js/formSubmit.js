$(document).ready(function(){
  $("#formRespond").click(function(e){
    e.preventDefault();

    var fullname = $("#fullname").val();
    var college = $("#college").val();
    var dept = $("#dept").val();
    var year = $("#year").val();
    var mobile = $("#mobile").val();
    var email = $("#email").val();
    var why = $("#why").val();
    var promotion = $("#promotion").val();
    var aboutwhere = $("#aboutwhere").val();
    /* var fullname = "name";
    var college = "clg";
    var dept = "dept";
    var year = "year";
    var mobile = "0987654321";
    var email = "mail@mail.com";
    var why = "why";
    var promotion = "how";
    var aboutwhere = "where";
    console.log(fullname);
    console.log(college);
    console.log(dept);
    console.log(year);
    console.log(mobile);
    console.log(email);
    console.log(why);
    console.log(promotion);
    console.log(aboutwhere);*/
    var error = false;
    var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

    if(!fullname.trim()){
      $("#alert-response").removeClass("invisible");
      error=true;
    }
    else{
      $("#alert-response").addClass("invisible");
    }

    if(!college.trim()){
      $("#alert-response").removeClass("invisible");
      error=true;
    }
    else{
      $("#alert-response").addClass("invisible");
    }

    if(!dept.trim()){
      $("#alert-response").removeClass("invisible");
      error=true;
    }
    else{
      $("#alert-response").addClass("invisible");
    }

    if(!year.trim()){
      $("#alert-response").removeClass("invisible");
      error=true;
    }
    else{
      $("#alert-response").addClass("invisible");
    }

    if(!mobile.trim()){
      $("#alert-response").removeClass("invisible");
      error=true;
    }
    else{
      $("#alert-response").addClass("invisible");
    }

    if(!email.trim() || !filter.test(email)){
      $("#alert-response").removeClass("invisible");
      error=true;
    }
    else{
      $("#alert-response").addClass("invisible");
    }

    if(!why.trim()){
      $("#alert-response").removeClass("invisible");
      error=true;
    }
    else{
      $("#alert-response").addClass("invisible");
    }

    if(!promotion.trim()){
      $("#alert-response").removeClass("invisible");
      error=true;
    }
    else{
      $("#alert-response").addClass("invisible");
    }

    if(!aboutwhere.trim()){
      $("#alert-response").removeClass("invisible");
      error=true;
    }
    else{
      $("#alert-response").addClass("invisible");
    }
    if(error)
      return false;
    if (!error){
      $.ajax({
        url: "https://docs.google.com/forms/d/1fYtuK08jRcSTFwK1EIo3SiSsjx9QBjhfjLtj_kXYI_Y/formResponse",
        headers: {
          "Content-Type" : "application/x-www-form-urlencoded",
          "Origin" : "https://docs.google.com",
          "Referer" : "https://docs.google.com/forms/d/1fYtuK08jRcSTFwK1EIo3SiSsjx9QBjhfjLtj_kXYI_Y/viewform?fbzx=1956520483489146600",
          "Upgrade-Insecure-Requests":1,
          "Access-Control-Allow-Headers": "true"
        },
        data: {
          "entry.1000000" : fullname,
          "entry.1000001" : college,
          "entry.1807116260" : dept,
          "entry.2047238575" : year,
          "entry.412437672" : email,
          "entry.1771994962" : mobile,
          "entry.1451114365" : why,
          "entry.451766025" : promotion,
          "entry.324607892" : aboutwhere
        },
        type: "POST",
        dataType: "xml",
        statusCode: {
          0: function (){
            $("#fullname").val("");
            $("#college").val("");
            $("#dept").val("");
            $("#year").val("");
            $("#mobile").val("");
            $("#email").val("");
            $("#why").val("");
            $("#promotion").val("");
            $("#aboutwhere").val("");
            $("#alert-response").addClass("invisible");
            $("#success-response").removeClass("invisible");
          },
          200: function (){
            $("#fullname").val("");
            $("#college").val("");
            $("#dept").val("");
            $("#year").val("");
            $("#mobile").val("");
            $("#email").val("");
            $("#why").val("");
            $("#promotion").val("");
            $("#aboutwhere").val("");
            $("#alert-response").addClass("invisible");
            $("#success-response").removeClass("invisible");
          }
        }
      });
}
else {
  $("#fail-response").removeClass("invisible").fadeOut(5000);
}
});
});
