<?php

namespace App\Services;

use App\Models\Pix;

class PixService extends AbstractService
{
    public function __construct(Pix $pix)
    {
        parent::__construct($pix);
    }

    /**
     * Lógica para gerar uma cobrança via Pix.
     */
    public function gerarCobranca(array $data): array
    {
        return [
            'expiracao' => $data['expiracao'],
            'txid' => 'abc123',
            'status' => 'ativo',
            'valor' => $data['valor'],
        ];
    }
}
