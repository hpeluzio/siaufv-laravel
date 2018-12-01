$(function () {
    $('.ui.form')
        .form({
            fields: {
                'id': 'empty',
                'nome': 'empty',
                'orientador': 'empty',
                'modalidade': 'empty',
                'area': 'empty'
            }
        });

    $('.ui.dropdown').dropdown({
        allowAdditions: true
    });
});

function delItem(obj) {
    table_ministrante.row($(obj).parents('tr')).remove().draw();
}

// -------------------- AUTORES --------------------

$(function () {
    autores.form({
        inline: true,
        fields: {
            autor_nome: 'empty',
        }
    });
});

var autores = $('#autores');

var autor_nome = autores.find('[name=autor_nome]');

var codigo = autores.find('#table_autor tr').length;
var table_autor = autores.find('#table_autor').DataTable({
    sDom: '',
    columnDefs: [
        {"orderable": false, "targets": 1}
    ]
});

function addAutor() {
    if (autores.form('is valid') == false)
        return;

    table_autor.row.add([
        autor_nome.val() + '<input type="hidden" name="autores[' + codigo + '][nome]" value="' + autor_nome.val() + '">',
        '<td><div class="negative ui button" onclick="delItem(this)">Excluir</div></td>']).draw(false);
    codigo++;

    clearFields()
}


function clearFields() {
    autor_nome.val('');

    autor_nome.focus();
}