$(function () {
    $('.ui.form')
        .form({
            fields: {
                nome: 'empty',
                vagas: 'empty',
                sala_id: 'empty'
            }
        });
});

function delItem(obj) {
    table_ministrante.row($(obj).parents('tr')).remove().draw();
}

// -------------------- MINISTRANTES --------------------

$(function () {
    ministrantes.form({
        inline: true,
        fields: {
            ministrante_nome: 'empty',
        }
    });
});

var ministrantes = $('#ministrantes');

var ministrante_nome = ministrantes.find('[name=ministrante_nome]');

var codigo = ministrantes.find('#table_ministrante tr').length;
var table_ministrante = ministrantes.find('#table_ministrante').DataTable({
    sDom: '',
    columnDefs: [
        {"orderable": false, "targets": 1}
    ]
});

function addMinistrante() {
    if (ministrantes.form('submit').form('is valid') == false)
        return;

    table_ministrante.row.add([
        ministrante_nome.val() + '<input type="hidden" name="ministrantes[' + codigo + '][nome]" value="' + ministrante_nome.val() + '">',
        '<td><div class="negative ui button" onclick="delItem(this)">Excluir</div></td>']).draw(false);
    codigo++;

    clearMinistrantes()
}


function clearMinistrantes() {
    ministrante_nome.val('');

    ministrante_nome.focus();
}

// -------------------- HORARIOS --------------------

$(function () {
    horarios.form({
        inline: true,
        fields: {
            horario_inicio: 'empty',
            horario_fim: 'empty'
        }
    });
});

var horarios = $('#horarios');

var horario_inicio = horarios.find('[name=horario_inicio]');
var horario_fim = horarios.find('[name=horario_fim]');

var codigo = horarios.find('#table_horario tr').length;
var table_horarios = horarios.find('#table_horario').DataTable({
    sDom: '',
    columnDefs: [
        {"orderable": false, "targets": 2}
    ]
});

function addHorario() {
    if (horarios.form('submit').form('is valid') == false)
        return;

    table_horarios.row.add([
        horario_inicio.val() + '<input type="hidden" name="horarios[' + codigo + '][inicio]" value="' + horario_inicio.val() + '">',
        horario_fim.val() + '<input type="hidden" name="horarios[' + codigo + '][fim]" value="' + horario_fim.val() + '">',
        '<td><div class="negative ui button" onclick="delItem(this)">Excluir</div></td>']).draw(false);
    codigo++;

    clearHorarios()
}

function clearHorarios() {
    horario_inicio.val('');
    horario_fim.val('');

    horario_inicio.focus();
}