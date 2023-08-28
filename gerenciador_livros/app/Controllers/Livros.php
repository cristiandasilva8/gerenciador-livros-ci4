<?php

namespace App\Controllers;

use App\Models\LivroModel;
use CodeIgniter\Controller;

class Livros extends BaseController
{
   
    protected $_model;

    protected $validationRules = [
        'titulo' => 'required',
        'autor' => 'required',
        'ano_publicacao' => 'required|is_numeric',
    ];


    public function __construct()
    {
        $this->_model = new LivroModel();
    }
    public function index()
    {
        
        $data['livros'] = $this->_model->findAll();
        return view('lista_livros', $data);
    }

    public function adicionar(){
        return view('adicionar_livro');
    }

    public function add(){

        $validation = \Config\Services::validation();

        $validation->setRules($this->validationRules);

        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'autor' => $this->request->getPost('autor'),
            'ano_publicacao' => $this->request->getPost('ano_publicacao')
        ];
        if($validation->run($data)){
            $this->_model->insert($data);
            session()->setFlashdata('message', 'Livro adicionado com sucesso');
            return redirect()->to('/livros');
        }else{
            session()->setFlashdata('message', 'erro ao tentar adicionar o livro, verifique os campos');
            return redirect()->to('/livros/adicionar');
        }
       
    }

    public function editar($id = null){
        if($this->request->getMethod() === 'post'){

            $validation = \Config\Services::validation();

            $validation->setRules($this->validationRules);

            $data = [
                'titulo' => $this->request->getPost('titulo'),
                'autor' => $this->request->getPost('autor'),
                'ano_publicacao' => $this->request->getPost('ano_publicacao')
            ];
            if($validation->run($data)){
                $this->_model->update($id, $data);
                session()->setFlashdata('message', 'Livro alterado com sucesso');
            return redirect()->to('/livros');
            }else{
                session()->setFlashdata('message', 'Erro ao tentar atualizar o livro');
                return redirect()->to('/livros/editar');
            }
           
        }else{
            $data['livro'] = $this->_model->find($id);
            return view('editar_livro', $data);
        }
    }

    public function deletar($id){
        $this->_model->delete($id);
        return redirect()->to('/livros');
    }

    // Adicione os métodos de criar, atualizar e deletar depois.
}
