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

        $response = $this->post('/pix/gerar', $payload);
        $response->assertStatus(200);
    }

    public function test_criar_cobranca_com_cnpj(): void
    {
        $payload = $this->gerarPayloadCobranca([
            'cnpj' => '12345678000195',
        ]);

        $response = $this->post('/pix/gerar', $payload);
        $response->assertStatus(200);
    }
    public function test_resposta_criacao_cobranca_contem_campos_esperados(): void
    {
        $payload = $this->gerarPayloadCobranca([
            'cpf' => '12345678909',
        ]);

        $response = $this->post('/pix/gerar', $payload);
        $response->assertStatus(200);

        $response->assertJsonStructure([
            'expiracao',
            'txid',
            'status',
            'valor',
        ]);

        $responseData = $response->json();

        $this->assertIsInt($responseData['expiracao']);
        $this->assertIsString($responseData['txid']);
        $this->assertIsString($responseData['status']);
        $this->assertIsArray($responseData['valor']);
    }
}
