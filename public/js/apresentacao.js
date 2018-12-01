$(function () {
    $('.ui.form')
        .form({
            fields: {
                data: 'empty',
                horario: 'empty',
                vagas: 'empty',
                sala_id: 'empty',
                minicurso_id: 'empty',
            }
        });

    $('.ui.dropdown').dropdown();
});