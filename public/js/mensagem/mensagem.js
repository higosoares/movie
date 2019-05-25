var mensagem = {
    mensagemSemRefresh:
    function(type, title, text) {
        Swal.fire({
            type: type,
            title: title,
            text: text
        });
    },
    mensagemComRefresh:
        function(type, title, text, timer) {
            Swal.fire({
                type: type,
                title: title,
                text: text,
                timer: timer
            },
            function(){
                location.reload();
            });
        },
}



