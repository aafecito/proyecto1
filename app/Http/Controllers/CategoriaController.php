<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = categoria::all();
        return response()->json($categorias);
    }
}
