$(function () {
    $('.ui.form')
        .form({
            fields: {
                matricula: 'empty',
                nome: 'empty',
                curso: 'empty',
                instituto: 'empty',
                tipo: 'empty',
            }
        });

    $('.ui.dropdown').dropdown({
        allowAdditions: true
    });
});