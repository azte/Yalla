<?php

class ArticlesController extends \BaseController {

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

		$article = new Article;
    	return View::make('articlesForm')->with('article', $article);		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{


		

		$article = new Article;

		$author = Auth::user()->name;
		$article->author = $author;

        // Obtenemos la data enviada por el usuario
        $data = Input::all();

     	 
        // Revisamos si la data es válido
        if ($article->isValid($data))
        {
            // Si la data es valida se la asignamos al usuario
            $article->fill($data);
            // Guardamos el usuario
            $article->save();
            // Y Devolvemos una redirección a la acción show para mostrar el usuario
            return Redirect::route('home');
        }
        else
        {
            // En caso de error regresa a la acción create con los datos y los errores encontrados
			return Redirect::route('articles.create')->withInput()->withErrors($article->errors);
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
		$idArticle = Article::find($id);
		return View::make('articlesShow')->with('idArticle', $idArticle);

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


}