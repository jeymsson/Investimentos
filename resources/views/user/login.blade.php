<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/stylesheet.css')}}">
</head>
<body>
	<section id="conteudo" class="login">
		<h1>Investindo</h1>
		<h3>O nosso gerenciador de investimento</h3>

		<p>Acesse o sistema</p>

		{{-- <form> --}}
		{!! Form::open(['route' =>'user.login', 'method' => 'post' ]) !!}


		<label>
			{!! Form::text('username', null, 
				[
					'class'=> 'input', 'placeholder' => 'Usuario' 
				]) 
			!!}
		</label>

		<label>
			{!! Form::password('password', 
				[
					'placeholder' => 'Senha' 
				]) 
			!!}
		</label>

		{!! Form::submit('Entrar ') !!}












		{!! Form::close() !!}
		{{-- </form> --}}



	</section>
</body>
</html>