<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CobrancaTest extends TestCase
{
    use RefreshDatabase;

    private function gerarPayloadCobranca(array $devedor): array
    {
        return [
            'expiracao' => 3600,
            'devedor' => array_merge([
                'nome' => 'Cliente Teste',
            ], $devedor),
            'valor' => ['original' => '150.00'],
            'chave' => 'chave-pix-exemplo',
        ];
    }

    public function test_criar_cobranca_com_cpf(): void
    {
        $payload = $this->gerarPayloadCobranca([
            'cpf' => '12345678909',
        ]);

        $response = $this->post('/pix/criar-cobranca', $payload);
        $response->assertStatus(200);
    }

    public function test_criar_cobranca_com_cnpj(): void
    {
        $payload = $this->gerarPayloadCobranca([
            'cnpj' => '12345678000195',
        ]);

        $response = $this->post('/pix/criar-cobranca', $payload);
        $response->assertStatus(200);
    }
}
