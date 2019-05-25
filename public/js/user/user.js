var user = {

    register: function(url, params) {
        $.post(url, params, function(retorno) {
        }).done(function (response) {
            mensagem.mensagemComRefresh('success', 'Sucesso','Sucesso ao criar o usuário.', 2000);
        }).fail(function(response) {
            mensagem.mensagemSemRefresh('error', 'Erro', 'Ocorreu um erro ao registrar o usúario.');
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
            mensagem.mensagemComRefresh('success', 'Sucesso','Sucesso ao editar o usuário.', 2000);
        }).fail(function(response) {
            mensagem.mensagemSemRefresh('error', 'Erro', 'Ocorreu um erro ao editar o usúario.');
        });
    },

    delete: function(event) {
        swal({
                title: "Você tem certeza ?",
                text: "Você realmente deseja excluir este usuario?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sim, excluir!",
                cancelButtonText: "Cancelar",
                closeOnConfirm: false
            },
            function(){
                $.ajax({
                    url:$(event).attr('data-bind'),
                    type: 'DELETE',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-Token': $('input[name=_token]').val()
                    }
                }).done(function(response) {
                    mensagem.mensagemComRefresh('success', 'Sucesso','Sucesso ao excluir o usuário.', 2000);
                }).fail(function(response) {
                    mensagem.mensagemSemRefresh('error', 'Erro', 'Ocorreu um erro ao excluir o usúario.');
                });
            });
    }
};
