$(document).ready(function () {
    $('body').on('blur',"div[contenteditable=true]",function() {
        console.log($(this).data('id'));
        $.ajax({
            type: 'POST',
            data: {
                content: $.trim($(this).text()),
                id: $(this).data('id')
            },

            url:'/project/web/meet/edit/' + $(this).data('id'),
            //Routing.generate('edit_meet', {content: $.trim($(this).text()), id: $(this).data('id') }),
            success: function (msg) {
                alert('update successful');
            }
        })
    });
});