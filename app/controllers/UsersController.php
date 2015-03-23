<?php

	//Primer Commit, modulo de usuarios terminado.

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		

		// Creamos un nuevo objeto User para ser usado por el helper Form::model
      $user = new User;
      return View::make('usersForm')->with('user', $user);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Creamos un nuevo objeto para nuestro nuevo usuario
        $user = new User;
        // Obtenemos la data enviada por el usuario
        $data = Input::all();
     	 
        // Revisamos si la data es válido
        if ($user->isValid($data))
        {
            // Si la data es valida se la asignamos al usuario
            $user->fill($data);
            // Guardamos el usuario
            $user->save();
            // Y Devolvemos una redirección a la acción show para mostrar el usuario
            return Redirect::route('home');
        }
        else
        {
            // En caso de error regresa a la acción create con los datos y los errores encontrados
			return Redirect::route('users.create')->withInput()->withErrors($user->errors);
        }
        
      
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
/*		Ventana Muestra Contenido After Create User
*/
		$iduser = User::find($id);
		return View::make('admin/users/show')->with('iduser', $iduser);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
    }


}
