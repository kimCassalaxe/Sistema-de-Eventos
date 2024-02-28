<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //funcao que exibe a todas os eventos
    public function index(){
        $events = Event::all();
        return view('welcome',['events'=>$events]);
    }
    //funcao que exibe uma evento especifico
    public function show($id){
        $event = Event::findOrFail($id);
        return view('events.show',['event'=>$event]);
    }
    //funcao que exibe a a view da insert de event
    public function create(){
        return view('events.create');
    }
    //funcao que faz um insert no banco
    public function store(Request $request){
        $events = new Event;
        $events->nome = $request->txtNome;
        $events->date = $request->txtData;
        $events->city = $request->txtCity;
        $events->private = $request->txtPrivate;
        $events->descrition = $request->txtDescrition;

        $events->itens = $request->items;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImg = $request->image;
            $extesao = $requestImg->extension();
            $imgName = md5($requestImg->getClientOriginalName() . strtotime("now").".".$extesao);
            $requestImg->move(public_path('img/events'),$imgName);

            $events->img = $imgName;
        }
       
        $events->save();
        return redirect('/');
    }

    

    public function login(){
        return view('events.login');
    }
    public function cadastrar(){
        return view('events.cadastrar');
    }
}
