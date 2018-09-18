<?php

namespace App\Traits;

use App\Exceptions\MovieException;

trait LancadorDeExcecao
{
    /**
     * Lancar excecao
     * @param array ['campo' => ['tipoErro' => 'Mensagem']]
     * @param type $status
     * @throws \DomainException
     */
    public function excecao($params, $status=412)
    {
        $movieException = new MovieException('Falha ao realizar operação', $status);
        $movieException->retorno = json_encode([
            'mensagem'   => 'Erro de validação',
            'erro'    => $params
        ]);
        throw $movieException;
    }
}
