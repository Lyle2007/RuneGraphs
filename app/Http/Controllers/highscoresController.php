<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\highscores;

class highscoresController extends Controller
{
    public function index(Request $request)
    {



        $player = request('player');
        $keys = array('Overall', 'Attack', 'Defence', 'Strength', 'Hitpoints', 'Ranged', 'Prayer', 'Magic', 'Cooking', 'Woodcutting', 'Fletching', 'Fishing', 'Firemaking', 'Crafting', 'Smithing', 'Mining', 'Herblore', 'Agility', 'Thieving', 'Slayer', 'Farming', 'Runecrafting', 'Hunter', 'Construction');

        $url = ("http://services.runescape.com/m=hiscore_oldschool/index_lite.ws?player=" . $player . "");
        $json = file_get_contents($url);
        $output = preg_split( "/(\n|,)/", $json, 93 );
        dd($output);
    }
}
