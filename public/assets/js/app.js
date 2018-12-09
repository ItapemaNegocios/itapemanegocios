$(function () {

    const BASE = $("link[rel='base']").attr("href");

    $('#new-account').submit(function () {
        const form = $(this);
        const data = form.serialize();

        $.ajax({
            url: BASE + '/ajax/Login.ajax.php',
            data: data,
            type: 'POST',
            dataType: 'json',
            before: function () {

            },
            success: function (response) {

            }
        });

        return false;
    });

});