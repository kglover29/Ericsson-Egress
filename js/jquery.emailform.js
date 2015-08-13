$('#fileupload').bind('fileuploadsubmit', function (e, data) {
    var email = $("#email").val();
    data.formData = {example: email};
    if (!data.formData.example) {
      data.context.find('button').prop('disable', false);
      email.focus();
      return false;
    }
  });

$('#fileupload').bind('fileuploaddone', function (data) {
    var email = $("#email").val();
    var files = (data.result.files).val();

    $post("/server/php/aws_mailer.php", {
      email1 : email
      files1 : files
    });
});
/*
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
    $.post("/server/php/aws_mailer.php", {
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
*/
