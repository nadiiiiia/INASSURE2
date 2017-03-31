$(document).ready(function () {
    $('.deleteMeetButton').on('click', function () {
        var line= $(this).closest('tr');
        console.log($(this).data('id'));
        $.ajax({
            type: 'POST',
            dataType: "json",
            url: '/project/web/meet/delete/' + $(this).data('id'), // Routing.generate('delete_meet', {'id': $(this).data('id')}),
            success: function (response) {
                if (response.success) {
                    console.log(line);
                    line.remove();
                } else {
                    alert('error');
                }
            }
        });
    });
})