<?php

class AuthController extends BaseController {
 
	public function showLogin(){



		      // Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('login');
    
	}

	public function login(){


		$data = Input::all();
		$credentials = ['name' => $data['name'], 'password' => $data['password']];


		if(Auth::attempt($credentials))
		{
			return Redirect::to('/');
		}

			return Redirect::back()->with('login_error',1);
	}




	public function logout(){
		Auth::logout();
        return Redirect::to('login')
                    ->with('mensaje_error', 'Tu sesión ha sido cerrada.');

	}



}