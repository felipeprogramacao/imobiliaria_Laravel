<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casa;
use App\Models\User;

class CasaController extends Controller
{
    public function index(){
		return view('welcome');
		}
		
	public function imoveis(){
		
		$casas=Casa::all();
		return view('project.casas',['casas'=>$casas]);
		}
		
	public function create(){
		return view('events.create');
		}
		
	public function store(Request $request){
		$casa=new Casa;
		$casa->imovel=$request->imovel;
		$casa->proprietario=$request->proprietario;
		$casa->pecas_no_imovel=$request->tipo;
		$casa->garagem=$request->garagem;
		$casa->descricao=$request->descricao;
		$casa->valor=$request->valor;
		
		
		if($request->hasFile('image') && $request->file('image')->isValid()) {
			
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $casa->image = $imageName;
		
		
		$casa->save();
		
		return redirect('/');
		}
	}
	
	public function remove(){
		$id=\Request::route('id');
		$destroi=Casa::find($id);
		$destroi->delete();
		
		return redirect ('/imoveis');
		}
		
	
	public function edit($id){
		
		$casa=Casa::find($id);
		
		return view('events.edit',['casa'=>$casa]);
		}
		
	public function update(Request $request){
	$casa = $request->all();
		
		if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $casa['image'] = $imageName;

        }

        Casa::findOrFail($request->id)->update($casa);
		
		return redirect('/');
		}
	
	
}
