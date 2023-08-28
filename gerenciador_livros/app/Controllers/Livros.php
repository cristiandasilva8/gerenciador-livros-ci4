<?php

namespace App\Controllers;

use App\Models\LivroModel;
use CodeIgniter\Controller;

class Livros extends Controller
{
    public function index()
    {
        $model = new LivroModel();
        $data['livros'] = $model->findAll();
        return view('lista_livros', $data);
    }

    // Adicione os métodos de criar, atualizar e deletar depois.
}
