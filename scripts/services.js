function saveMainService() {
    var name = $('#mainServiceName').val();
    var desc = $('#mainServiceDesc').val();
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/weserve/api/main_service/create.php',
        data: {serviceName: name, description: desc},
        success: function () {
            alert('success');
        },
        error: function () {
            alert('error')
        }
    });
}

function loadMainServices() {
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: '/weserve/api/main_service/read.php',
        success: function () {
            $.each(data, function (i, d) {
                $('#mainServiceSelection').append('<option value="' + d.id + '">' + d.name + '</option>');
            });
        },
        error: function () {

        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    loadMainServices();
}, false);
