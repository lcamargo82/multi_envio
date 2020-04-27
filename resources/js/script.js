$(document).ready(function () {

    $('#form_address').submit(function (event) {
        event.preventDefault();

        $.ajax({
            url: "/multi_envios/public/ajax_create",
            type: "POST",
            data: $('#form_address').serialize(),
            dataType: "json",
            success: function (response) {
                console.log('ops', response)
            }
        })
    })

})
