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

// $('input[name=send_comment]').on('click', function () {
//     $.ajax({
//         type: "POST",
//         url: $(location).attr('href') + '/comment',
//         data: {
//             id: 2,
//             comment: $('textarea[name=comment]').val(),
//             _token: $('input[name=_token]').val(),
//             // g-recaptcha-response: $(g-recaptcha').getResponse()
//
//             // g-recaptcha-respons:
//         },
//         success: function (success) {
//             console.log(success);
//             $('.comment:last').clone().insertAfter('.comment:last');
//             $('.comment:last .panel-heading strong').html('Anonim');
//             $('.comment:last .panel-heading .text-muted').html('Just Now');
//             $('.comment:last .panel-body.comment-body').html($('textarea[name=comment]').val());
//         },
//         dataType: "json"
//     });
// });
