
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

tinymce.init({
    selector: 'textarea',
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
    console.log(content);

    $('.carousel-caption #name').html(content);

});

console.log(123);
console.log(header);
console.log(body);