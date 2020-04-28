$(document).ready(function () {

    var array = [];

    $('#form_address').on('submit', function (event) {
        event.preventDefault();

        if ($('#multiArray').prop('checked')) {

            var obj = {
                address:$('#inputAddress').val(),
                id: Math.floor(Math.random() * (100 - 1)) + 1,
            }

            array.push(obj);

            $('#multiTable').append(
                "<tr id='"+obj.id+"'>" +
                "<td>"+$('#inputAddress').val()+"</td>" +
                "<td>" +
                "<button onclick='teste("+obj.id+")'>"+$('#inputAddress').val()+"</button>" +
                "</td>" +
                "</tr>"
            );

            $('#inputAddress').val('');

        } else {
            array.push({address:$('#inputAddress').val()})
            $('#inputAddress').val('');
            $.ajax({
                url: "/multi_envio/public/ajax_create",
                type: "POST",
                data: {array},
                dataType: "json",
                success: function (response) {
                    console.log('ops', response)
                }
            })
        }
    });

    window.teste = function (id) {
       $('#'+id).remove();

       var _index = array.findIndex(function (index) {
           console.log(index)
            if (index.id == id) {
                return index
            }
       });

       array.splice(_index, 1);
    }
})
