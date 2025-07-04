<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PixService;
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
