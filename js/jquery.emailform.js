$('#fileupload').bind('fileuploadsubmit', function () {
    var email = $("#email").val();
    //to empty previous error/sucess message.
    $("#returnmessage").empty();
      //Checking for blank field
      if (email == '') {
        alert("Please Fill Required Fields");
      }
      else {
        //Return successful data subission message when the entered information is stored in database.
      }
    //Send data to phpmailer script
    $.post("/server/php/smtp_no_auth.php", {
      email1: email
    },
    function (data) {
      //Append return message to message paragraph.
      $("#returnmessage").append(data);
        if (data == "Your query has been recieved, We will contact you soon.") {
          $("#form")[0].reset();
        }
    }
  );
});
