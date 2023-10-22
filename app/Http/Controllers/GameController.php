<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{

    public function create(){
        return view("games_create");
    }

    public function store(Request $request){
        $game = new Game();
        $game->name = $request->name;  
        $game->save();
        return redirect("/dashboard");
    }

    /*
    public function show($id){
        return view("game_show", ["game" => Game::findOrFail($id)]);
    }*/

    public function destroy($id){
        Game::findOrFail($id)->delete();
        return redirect("/dashboard");
    }

    public function edit($id){
        $game = Game::findOrFail($id);
        return view("games_edit", ["game" => $game]);
    }
    
    public function update(Request $request){
        //Game::findOrFail($request->id)->update($request->all());
        $game = Game::findOrFail($request->id);
        $game->name = $request->name;
        $game->save();
        return redirect("/dashboard");
    }

    public function dashboard(){
        return view("dashboard", ["allGames" => Game::all()]);
    }

}