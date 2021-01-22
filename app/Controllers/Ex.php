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


        $user = new \App\Entities\User();

        $postData = $this->request->getJSON();

        $user->fill((array)$postData);

        // $user->setPassword($postData->password);

        // echo '<pre>';
        // print_r($user);
        // echo '</pre>';

        $db = db_connect();

        $userModel = model('UserModel', true, $db);

        if ($userModel->save($user) === false) {
            // return view('updateUser', ['errors' => $userModel->errors()]);
            echo '<pre>';
            print_r($userModel->errors());
            echo '</pre>';
        } else {
            echo "ok";
        }

        $db->close();

    }
}
