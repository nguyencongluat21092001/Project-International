$(document).ready(function() {

    $('.form-login').validate({
        rules: {
            code: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            code: {
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
