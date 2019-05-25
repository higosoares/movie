var movie = {

    register: function(url, params) {
        $.post(url, params, function(retorno) {
        }).done(function (response) {
            mensagem.mensagemComRefresh('success', 'Sucesso','Sucesso ao criar o filme.', 2000);
        }).fail(function(response) {
            mensagem.mensagemSemRefresh('error', 'Erro', 'Ocorreu um erro ao editar o filme.');
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
            mensagem.mensagemComRefresh('success', 'Sucesso','Sucesso ao editar o filme.', 2000);
        }).fail(function(response) {
            mensagem.mensagemSemRefresh('error', 'Erro', 'Ocorreu um erro ao editar o filme.');
        });
    },

    delete: function(event) {
        swal({
                title: "Você tem certeza ?",
                text: "Você realmente deseja excluir esse filme?",
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
                    mensagem.mensagemComRefresh('success', 'Sucesso','Sucesso ao excluir o filme.', 2000);
                }).fail(function(response) {
                    mensagem.mensagemSemRefresh('error', 'Erro', 'Ocorreu um erro ao excluir o filme.');
                });
            });
    }
};
