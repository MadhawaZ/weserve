$(document).ready(function(){
    $.ajax({
        dataType: 'json',
        url: url,
        data: data,
        success: success
    });
});