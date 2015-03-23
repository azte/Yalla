<?php

class CommentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	



	public function index()
	{

		
	
	}


	/**s
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()


	{

				
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{


		$comment = new Comment;

	

        // Obtenemos la data enviada por el usuario

        $data = Input::only('article_id', 'comment', 'email');

        

     	 
        // Revisamos si la data es válido
        if ($comment->isValid($data))
        {
            // Si la data es valida se la asignamos al usuario
            $comment->fill($data);
            // Guardamos el usuario
            $comment->save();
            // Y Devolvemos una redirección a la acción show para mostrar el usuario
            return Redirect::back();
        }
        else
        {
            // En caso de error regresa a la acción create con los datos y los errores encontrados
			return Redirect::back()->withInput()->withErrors($comment->errors);
        }	

		
	}

		

			
	


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($idArticle)
	{

		
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
		//
	}

	public function record($id)
	{

		$lol = Input::all();
		var_dump($lol);

	}


}