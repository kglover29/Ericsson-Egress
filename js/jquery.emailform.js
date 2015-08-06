$('#email').bind('fileuploadsubmit', function (e, data) {
    var input = $('#input');
    data.formData = {}
              dataType: 'json',
     sequentialUploads: true,
              formData: {email: input.val()};
});
