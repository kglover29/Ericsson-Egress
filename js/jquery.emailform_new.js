$('#fileupload').bind('fileuploadsubmit', function (e, data) {

  //Serialize the form data
  var formData = $('form').serializeArray();

  $.each(data.files, function(key, value) {
    formData = formData + '&filenames[]=' +value;
  });

  $.ajax({
    url: '/server/php/aws_mailer.php',
    type: 'POST',
    data: formData,
    cache: false,
    dataType: 'json',
    success: function(data, textStatus, jqXHR) {
        if(typeof data.error === 'undefined'){
            // Success so call function to process the form
            console.log('SUCCESS: ' + data.success);
        }
        else {
          // Handle errors here
          console.log('ERRORS: ' + data.error);
        }
    },
    error: function(jqXHR, textStatus, errorThrown) {
        // Handle errors here
        console.log('ERRORS: ' + textStatus);
    },
    complete: function() {
        // STOP LOADING SPINNER
    }
  })
})
