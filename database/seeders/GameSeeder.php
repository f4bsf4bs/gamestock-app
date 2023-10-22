<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run(): void
    {    
        Game::create([
        'name' => 'Resident Evil 4']);
        Game::create([
            'name' => 'God of War']);
        Game::create([
            'name' => 'Star Wars Jedi: Survivor']);
        Game::create([
            'name' => 'The Last of Us']);
        Game::create([
            'name' => 'Spider-Man']);
        Game::create([
            'name' => 'Mortal Kombat']);
        Game::create([
            'name' => 'The Witcher 3']);
        Game::create([
            'name' => 'Terraria']);
        Game::create([
            'name' => 'Counter-Strike']);
        Game::create([
            'name' => 'Elden Ring']);
    }
}
