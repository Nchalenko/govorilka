/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

tinymce.init({
    selector: 'textarea[name=body]',
    init_instance_callback: function (editor) {
        console.log(editor.id);
        editor.on('KeyUp', function (e) {
            let content = tinymce.editors[editor.id].getContent();
            console.log('Element clicked ' + editor.id + ':', content);

            $('#' + editor.id).html(content);
        });
    }
});
tinymce.init({
    selector: 'textarea[name=header]',
    init_instance_callback: function (editor) {
        console.log(editor.id);
        editor.on('KeyUp', function (e) {
            let content = tinymce.editors[editor.id].getContent();
            console.log('Element clicked ' + editor.id + ':', content);

            $('#' + editor.id).html(content);
        });
    }
});

const title = $('input#title');
const header = tinymce.editors.header;
const body = tinymce.editors.body;

$('#title').keyup(function () {
    let content = title.val();
    $('.carousel-caption #name').html(content);
});


// $('#contact-form .btn-send').click(() => {
//     console.log('CLICK');
//     if (validateEmail($('#form_email').val()) && $('#form_first_name').val().length && $('#form_message').length) {
//         console.log('GOOD');
//         $('#contact-form .btn-send').attr('disabled', true);
//     }
// });

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

$('#contact-form .btn-send').on('click', function () {
    console.log(123);
    $.ajax({
        type: "POST",
        url: 'contact',
        data: {
            email: validateEmail($('#form_email').val()) ? $('#form_email').val() : false,
            first_name: $('#form_first_name').val(),
            message: $('#form_message').val(),
            _token: $('#contact-form input[name=_token]').val(),
            // g-recaptcha-response: $(g-recaptcha').getResponse()

            // g-recaptcha-respons:
        },
        success: function (success) {
            console.log(success);
            $('.comment:last').clone().insertAfter('.comment:last');
            $('.comment:last .panel-heading strong').html('Anonim');
            $('.comment:last .panel-heading .text-muted').html('Just Now');
            $('.comment:last .panel-body.comment-body').html($('textarea[name=comment]').val());
        },
        dataType: "json"
    });
});
