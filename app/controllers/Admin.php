<?php

namespace controllers;

use core\Controller;

class Admin extends Controller
{
	public function index()
	{
		$data['title'] = "Admin";
		$data['style'] = "landingpage";
		$data['mobil'] = ['Fortuner', 'Avanza', 'Pajero', 'Fortuner', 'Avanza', 'Pajero', 'Fortuner', 'Avanza', 'Pajero'];
		$this->view("templates/header", $data);
		$this->view("admin/index", $data);
		$this->view("templates/footer");
	}

	public function module()
	{
		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$data['title'] = "Admin";
			$data['style'] = "landingpage";
			$data['mobil'] = $_POST['mobil'];
			$this->view("templates/header", $data);
			$this->view("admin/" . $_POST['page'], $data);
			$this->view("templates/footer");
		}
	}

	public function tes()
	{
		$data['title'] = "Admin";
		$data['style'] = "landingpage";
		$data['mobil'] = ['Fortuner', 'Avanza', 'Pajero', 'Fortuner', 'Avanza', 'Pajero', 'Fortuner', 'Avanza', 'Pajero'];
		$this->view("templates/header", $data);
		$this->view("admin/index", $data);
		$this->view("templates/footer");
	}


}