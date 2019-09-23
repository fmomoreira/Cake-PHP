<?php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit'=>5,
            'order'=>[
            "Users.id" => 'asc',
            ]
        ];
        $usuarios = $this->paginate($this->Users);
        $this->set(compact('usuarios'));
    }

    public function view ($id = null)
    {
        $usuario = $this->Users->get($id);
        $this->set(['usuario' => $usuario]);
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if($this->request->is('post')){
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if($this->Users->save($user)){
                    $this->Flash->success(_('Usuario cadastrdo com sucesso'));
                    return $this->redirect(['action' => 'index']);
            }else{
                    $this->Flash->success(_('Erro ao cadastrar usuário'));
            }
        }

        $this->set(compact('user'));
    }

    public function edit($id =null)
    {
        $user =$this->Users->get($id);
            if($this->request->is(['post', 'put'])){
                $user = $this->Users->patchEntity($user, $this->request->getData());
                if($this->Users->save($user)){
                    $this->Flash->success(_('Usuário editado com sucesso'));
                    return $this->redirect(['action' => 'index']);
                }else{
                    $this->Flash->error(_('Usuário não foi editado com sucesso'));
                
                }
            }
        $this->set(compact('user'));
    }

    public function delete($id =null)
    {
         $this->request->allowMethod(['post', 'delete']);
         $user = $this->Users->get($id);
        if($this->Users->delete($user)){
            $this->Flash->success('Usuario apagado com sucesso');
        }else{
            $this->Flash->error('Não foi possivel excluir usuário');
        }
        return $this->redirect(['action' => 'index']);
    }
} 