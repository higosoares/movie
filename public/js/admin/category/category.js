var category = {

    register: function(url, params) {
        $.post(url, params, function(retorno) {
        }).done(function (response) {
            mensagem.mensagemComRefresh('success', 'Sucesso','Sucesso ao cadastrar a categoria.', 2000);
        }).fail(function(response) {
            mensagem.mensagemSemRefresh('error', 'Erro', 'Ocorreu um erro ao cadastrar a categoria.');
        });
    },

    edit: function(url, params) {
        $.ajax({
            url:url,
            type: 'PUT',
            dataType: 'json',
            data: params,
            headers: {
                'X-CSRF-Token': $('input[name=_token]').val()
            }
        }).done(function(response) {
            mensagem.mensagemComRefresh('success', 'Sucesso','Sucesso ao editar a categoria.', 2000);
        }).fail(function(response) {
            mensagem.mensagemSemRefresh('error', 'Erro', 'Ocorreu um erro ao editar a categoria.');
        });
    },

    delete: function(event) {
        swal.fire({
                title: "Você tem certeza ?",
                text: "Você realmente deseja excluir esta categoria?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sim, excluir!",
                cancelButtonText: "Cancelar",
        }).then((value) => {
            if (value.value == true) {
                $.ajax({
                    url:$(event).attr('data-url'),
                    type: 'DELETE',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-Token': $('input[name=_token]').val()
                    }
                }).done(function(response) {
                    mensagem.mensagemComRefresh('success', 'Sucesso','Sucesso ao excluir a categoria.', 2000);
                }).fail(function(response) {
                    mensagem.mensagemSemRefresh('error', 'Erro', 'Ocorreu um erro ao excluir  a categoria.');
                });
            }
        });
    }
};
