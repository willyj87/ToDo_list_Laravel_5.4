/**
 * Created by root on 06/06/17.
 */
$(document).ready(function () {
    $('.check').click(function () {
        $.ajax({
            method: "POST",
            url: '/update',
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});