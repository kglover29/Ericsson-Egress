$('#fileupload').bind('fileuploadsubmit', function (e, data) {
    var input = $('#input');
    data.formData = {email: input.val()}
});
