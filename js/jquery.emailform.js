$('#fileupload').bind('fileuploadsubmit', function () {
    var email = $("#email").val();
    //to empty previous error/sucess message.
    $("#returnmessage").empty();
    //Checking for blank field
    if (!email) {
    data.context.find('button').prop('disable', false);
  	email.focus();
  	return false;
    }
    //Send data to phpmailer script
    $.post('/server/php/aws_mailer.php', {
      email1: email
      files1: data.result
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
