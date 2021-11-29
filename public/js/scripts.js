const APP_URL = 'http://127.0.0.1:8000/';

$(document).change(function() {
    alert('funciona Jquery')
});

$('#search').autocomplete({
    source: function (request, response){
        $.ajax({
            url : APP_URL + "/animals",
            dataType : json,
            data : {
                term: request.term
            },
            success : function (data){
                response(data)
            }
        });
    }
});
