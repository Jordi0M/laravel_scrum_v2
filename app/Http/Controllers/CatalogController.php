<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Movie;

class CatalogController extends Controller
{
    public function getIndex()
	{
		$pelicula = DB::table('movies')->get();

	    return view('catalog.index',['arrayPeliculas' => $pelicula]);
	}

	public function getShow($id)
	{
		$pelicula = DB::table('movies')->get()->find($id);

		//$pelicula_en_concreto = $pelicula->find($id);

		var_dump($pelicula[$id]);

	    //return view('catalog.show', $this->$pelicula[$id]->id);

	    //return view('catalog.show', $this->arrayPeliculas[$id]);
	}

	public function getCreate()
	{
	    return view('catalog.create');
	}

	public function getEdit($id)
	{
	    return view('catalog.edit', array('id'=>$id));
	}

}
