function initCountry()
{
    $('body').on('change', '#countryList', function (e) {

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize()
        })
        //     .done(function (data) {
        //         if (typeof data.message !== 'undefined') {
        //             alert(data.message);
        //         }
        //     })
        //     .fail(function (jqXHR, textStatus, errorThrown) {
        //         if (typeof jqXHR.responseJSON !== 'undefined') {
        //             if (jqXHR.responseJSON.hasOwnProperty('form')) {
        //                 $('#form_body').html(jqXHR.responseJSON.form);
        //             }
        //
        //             $('.form_error').html(jqXHR.responseJSON.message);
        //
        //         } else {
        //             alert(errorThrown);
        //         }
        //
        //     });
    });
}
