<?php

namespace App\Controllers;

class Test extends BaseController
{
    private $classVar = "";

    public function initController($request, $response, $logger)
    {
        parent::initController($request, $response, $logger);
        $response->setHeader('Access-Control-Allow-Origin', '*');
        $response->setHeader("Access-Control-Allow-Credentials", "true");
        $response->setHeader("Access-Control-Allow-Methods", "GET,HEAD,OPTIONS,POST,PUT");
        $response->setHeader("Access-Control-Allow-Headers", "Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");

        $this->classVar = 'this controller hello';
    }

    public function index()
    {
        $method = $this->request->getMethod();

        if ($this->request->isAJAX()) {
            
            if ($method == 'post') {
                $result = [
                    "result" => $this->classVar
                ];
                
                return $this->response->setJSON($result);
            } else {
                die("error request");
            }
        }
        
        // error_log(print_r($this->request, TRUE));
    }

    public function info()
    {
        phpinfo();
    }

    public function result()
    {
        $a = 1;
        $b = 2;
        $res = $a + $b;
        return (string)$res;
    }

    public function testdb()
    {
        $db = db_connect();
        
        $sql = "SELECT `id`, `name`, `created_date` from friends WHERE `id` > ?;";
        // xdebug_break();
        $query = $db->query($sql, [1]);

        foreach ($query->getResult() as $row)
        {
            echo $row->id. ', '. $row->name. ', '. $row->created_date. '<br>';
        }

        $db->close();
        return "";
    }

    public function testview()
    {
        $data = [
            'myVar' => 'hello'
        ];
        echo view('pages/test_view', $data);
    }

    public function testmodel()
    {
        $db = db_connect();

        $userModel = model('UserModel', true, $db);

        $user = $userModel->find(1);

        $db->close();

        echo "<pre>";
        print_r($user);
        echo "</pre>";
    }
}
