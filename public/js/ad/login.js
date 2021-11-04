$(document).ready(function() {

    $('.form-login').validate({
        rules: {
            email: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            email: {
                required: "Please enter"
            },
            password: {
                required: "Please enter"
            }
        },
        onfocusout: function(element) {
            this.element(element);
        },
    });

});
