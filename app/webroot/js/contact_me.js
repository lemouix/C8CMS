function sendMessage()
{

    // get values from FORM
    var name = $("input#name").val();
    var email = $("input#email").val();
    var phone = $("input#phone").val();
    var message = $("textarea#message").val();
    
    if ((name == '') || (email == '') || (message == '') ){
        alert('Merci de compléter tous les champs obligatoires.');
        return false;
    }
    // Check for white space in name for Success/Fail message
    
    $.ajax({
        url: SITE_URL+'/Messages/ajaxAddMessage',
        type: "POST",
        data: {
            name: name,
            phone: phone,
            email: email,
            message: message
        },
        cache: false,
        success: function(response) {
            // Success message
            $('#resultBoxMessage').html(response);

        }
    })
}
        

