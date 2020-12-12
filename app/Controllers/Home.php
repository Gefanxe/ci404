<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('pages/home');
	}

	//--------------------------------------------------------------------
	public function testdb()
	{
		$db = db_connect(); // or $db = \Config\Database::connect();
		$query = $db->query("SELECT EMAIL, ADDRESS FROM member_account as m");
		foreach ($query->getResult('array') as $row) {
			echo $row['EMAIL'];
			echo $row['ADDRESS'];
		}

	}
}
