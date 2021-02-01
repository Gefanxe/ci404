<?php

namespace App\Controllers;

class Ex extends BaseController
{
    // public function initController($request, $response, $logger)
    // {
    //     parent::initController($request, $response, $logger);
    //     $response->setHeader('Access-Control-Allow-Origin', '*');
    //     $response->setHeader("Access-Control-Allow-Credentials", "true");
    //     $response->setHeader("Access-Control-Allow-Methods", "GET,HEAD,OPTIONS,POST,PUT");
    //     $response->setHeader("Access-Control-Allow-Headers", "Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");

    // }

    public function register()
    {
        echo view('ex/register');
    }

    public function save()
    {
        $method = $this->request->getMethod();
        
        if (!$this->request->isAJAX()) die('bad request ajax');
        if ($method != 'post') die('bad request');

        $postData = $this->request->getJSON();

        $user = new \App\Entities\User();

        $user->fill((array)$postData);

        $db = db_connect();

        $userModel = model('UserModel', true, $db);

        if ($userModel->save($user) === false) {
            
            echo '<pre>';
            print_r($userModel->errors());
            echo '</pre>';
        } else {
            echo "ok";
        }

        $db->close();

    }

    public function save2()
    {
        $method = $this->request->getMethod();
        
        // if (!$this->request->isAJAX()) die('bad request ajax');
        if ($method != 'post') die('bad request');

        $postData = $this->request->getPost();
        
        $user = new \App\Entities\User();

        $user->fill($postData);

        $db = db_connect();

        $userModel = model('UserModel', true, $db);

        if ($userModel->save($user) === false) {
            
            // echo '<pre>';
            // print_r($userModel->errors());
            // echo '</pre>';

            $data = [
                'error' => $userModel->errors()
            ];
            echo view('ex/register', $data);
        } else {
            echo "ok";
        }

        $db->close();

    }
}
