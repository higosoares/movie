var movie = {

    register: function(url, params) {
        $.post(url, params, function(retorno) {
        }).done(function (response) {

        }).fail(function(response) {
            //mensagem.validacao.tratarErrosIndiv(response);
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
            //mensagemComRefresh('Sucesso', 'Edição de programa realizada com sucesso', 'success', 3000);
        }).fail(function(response) {
            //mensagem.validacao.tratarErrosIndiv(response);
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
                    //mensagemComRefresh('Sucesso', 'Programa excluído com sucesso', 'success', 3000);
                }).fail(function(response) {
                    //mensagem.validacao.tratarErro(response);
                });
            });
    }
};