<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PixController extends Controller
{
    public function store(Request $request)
    {
        $resposta = [
            'expiracao' => now()->addMinutes(30)->timestamp,
            'txid' => 'abc123',
            'status' => 'ativo',
            'valor' => [
                'original' => '100.00',
            ],
        ];

        return response()->json($resposta);
    }
}
