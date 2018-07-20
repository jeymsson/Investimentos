<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function testeHomepage(){
		echo 'Mensagem teste';
	}
	public function Homepage(){
		$Titulo = 'Bem vindo'; // Variável a ser passada via VueJs a view.
		return view('welcome', [
			'title' => $Titulo
		]); //Abre 'welcome.blade.php';
	}

	// Autenticação
	public function logar(){
		return view('user.login');
		echo 'Login';
	}
}
