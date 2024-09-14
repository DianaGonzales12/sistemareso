<?php
namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login/login');
    }

    public function authenticate()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $mensaje = $model->login($username, $password);

        if ($mensaje == 'Inicio de sesión exitoso') {
            $session->set([
                'username' => $username,
                'logged_in' => true,
            ]);
            return redirect()->to('/dashboard');
        } else {
            $session->setFlashdata('error', $mensaje);
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}