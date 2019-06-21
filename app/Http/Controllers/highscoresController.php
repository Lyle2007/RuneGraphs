<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\highscores;
use phpDocumentor\Reflection\Types\Mixed_;

class highscoresController extends Controller
{
    public function index(Request $request)
    {
        function array_combine_($keys, $values)
        {
            $result = array();
            foreach ($keys as $i => $k) {
                $result[$k][] = $values[$i];
            }
            array_walk($result, function (&$v) {
                $v = (count($v) == 1) ? array_pop($v) : $v;
            });
            return $result;
        }
        $player = request('player'); //User Input
        // These are the values returned from the OSRS website.
        $keys = array(
            'Overall_Rank','Overall_Level','Overall_XP',
            'Attack_Rank','Attack_Level','Attack_XP',
            'Defence_Rank','Defence_Level','Defence_XP',
            'Strength_Rank','Strength_Level','Strength_XP',
            'Hitpoints_Rank','Hitpoints_Level','Hitpoints_XP',
            'Ranged_Rank','Ranged_Level','Ranged_XP',
            'Prayer_Rank','Prayer_Level','Prayer_XP',
            'Magic_Rank','Magic_Level','Magic_XP',
            'Cooking_Rank','Cooking_Level','Cooking_XP',
            'Woodcutting_Rank','Woodcutting_Level','Woodcutting_XP',
            'Fletching_Rank','Fletching_Level','Fletching_XP',
            'Fishing_Rank','Fishing_Level','Fishing_XP',
            'Firemaking_Rank','Firemaking_Level','Firemaking_XP',
            'Crafting_Rank','Crafting_Level','Crafting_XP',
            'Smithing_Rank','Smithing_Level','Smithing_XP',
            'Mining_Rank','Mining_Level','Mining_XP',
            'Herblore_Rank','Herblore_Level','Herblore_XP',
            'Agility_Rank','Agility_Level','Agility_XP',
            'Thieving_Rank','Thieving_Level','Thieving_XP',
            'Slayer_Rank','Slayer_Level','Slayer_XP',
            'Farming_Rank','Farming_Level','Farming_XP',
            'Runecrafting_Rank','Runecrafting_Level','Runecrafting_XP',
            'Hunter_Rank','Hunter_Level','Hunter_XP',
            'Construction_Rank','Construction_Level','Construction_XP'
        );
        // This is the link to the Web API with the User Input attached to the end.
        $url = ("http://services.runescape.com/m=hiscore_oldschool/index_lite.ws?player=" . $player . "");
        // Take the values from the website and assign them to a variable.
        $json = @file_get_contents($url, true);
        if($json === false){
            return "That character you entered does not exist.";
        }
        // Use two delimiters ',' and '\n' to separate all the values and get them inline.
        $output = preg_split( "/(\n|,)/", $json, 93 );
        // Use our function to Combine both Keys and Output array containing the users information.
        $result = array_combine_($keys, $output);
        // Die and Dump information
        dd($result);
    }
}

