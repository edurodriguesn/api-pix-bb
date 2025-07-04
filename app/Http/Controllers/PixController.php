<?php

namespace App\Http\Controllers;

use App\Services\PixService;
use Illuminate\Http\Request;

class PixController extends Controller
{
    private $pixService;

    public function __construct(PixService $pixService)
    {
        $this->pixService = $pixService;
    }

    public function store(Request $request)
    {
        $resposta = $this->pixService->gerarCobranca($request->all());

        return response()->json($resposta);
    }
}
