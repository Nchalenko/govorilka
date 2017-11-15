
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
            console.log('Element clicked ' + editor.id +':',  content);

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
            console.log('Element clicked ' + editor.id +':',  content);

            $('#' + editor.id).html(content);
        });
    }
});

const title  = $('input#title');
const header = tinymce.editors.header;
const body   = tinymce.editors.body;

$('#title').keyup(function () {
    let content = title.val();

    $('.carousel-caption #name').html(content);

});

    $(document).ready(function() {
        //
// $(function () {
//
//     $('#contact-form').validator();
//
//     $('#contact-form').on('submit', function (e) {
//         if (!e.isDefaultPrevented()) {
//             var url = "contact.php";
//
//             $.ajax({
//                 type: "POST",
//                 url: url,
//                 data: $(this).serialize(),
//                 success: function (data)
//                 {
//                     var messageAlert = 'alert-' + data.type;
//                     var messageText = data.message;
//
//                     var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
//                     if (messageAlert && messageText) {
//                         $('#contact-form').find('.messages').html(alertBox);
//                         $('#contact-form')[0].reset();
//                         grecaptcha.reset();
//                     }
//                 }
//             });
//             return false;
//         }
//     })
// });


        $('input[name=send_comment]').on('click', function () {
            $.ajax({
                type: "POST",
                url: $(location).attr('href') + '/comment',
                data: {
                    id: 2,
                    comment: $('textarea[name=comment]').val(),
                    _token: $('input[name=_token]').val(),
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
    });

console.log($('input[name=send_comment]'));
