<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller {

    public function add() {
        $this->render('add');
    }

    public function addAction()
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if ($name && $email) {
            $data = Usuario::select()->where('email', $email)->execute();

            if (count($data) === 0) {
                Usuario::insert([
                    'nome' => $name,
                    'email' => $email                
                ])->execute();

                $this->redirect('/');
            }
        }

        $this->redirect('/novo');
    }

    public function edit($parametros)
    {
        // $usuario = Usuario::select()->find($parametros['id']); não funcionou no meu
        $usuario = Usuario::select()->where('id_usuario', $parametros['id'])->one();
                
        $this->render('edit', ['usuario' => $usuario]);
    }

    public function editAction($parametros)
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email) {
            Usuario::update()
                ->set('nome', $name)
                ->set('email', $email)
                ->where('id_usuario', $parametros['id'])
            ->execute();
           
            $this->redirect('/');
        }
        
        $this->redirect("/usuario/".$parametros['id']."/editar");
    }
    public function del($parametros)
    {
        Usuario::delete()->where('id_usuario', $parametros['id'])->execute();

        $this->redirect('/');
    }
   
}