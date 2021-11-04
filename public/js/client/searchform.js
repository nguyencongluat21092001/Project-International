$(document).ready(function() {

    $('.form-search').validate({
        rules: {
            name: 'required',
            code: 'required',
            email: 'required'
        },
        messages: {
           name: {
               required: 'Please enter!'
           },
           code: {
               required: 'Please enter!'
           },
           email: {
               required: 'Please enter !'
           }
        },
        onfocusout: function(element) {
            this.element(element);
        },
    });

});
