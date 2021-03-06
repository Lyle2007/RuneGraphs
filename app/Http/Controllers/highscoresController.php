<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\highscores;
use phpDocumentor\Reflection\Types\Mixed_;
use GuzzleHttp\Client;
use vendor\project\StatusTest;

class highscoresController extends Controller
{
    public function index()
    {
        // Fetch the last 5 data points
        $highscores = highscores::latest()->paginate(5);
        // Calculate the amount of rows in the table
        $tableList = highscores::where('id', '>', 0)->get();
        $wordcount = count($tableList);
        // Fetch the 5 most common 99's
        $distinctNames = highscores::select('Character_Name')->distinct()->latest()->paginate(3);
        // Fetch the 5 least most common 99's


        return view('welcome', compact('highscores', 'wordcount', 'distinctNames'));
    }

    public function show(Request $request)
    {
        $user = request('Character_Name');
        highscores::where('Character_Name', $user)->exists();
        $chars = highscores::where('Character_Name', $user)->latest()->get();
        $charsLast5 = highscores::where('Character_Name', $user)->latest()->paginate(5);
        $charsCount = count($chars);

        return view('character.dashboard', compact('chars', 'charsCount', 'charsLast5'));

    }

    public function store(Request $request)
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

        $keys = array('Overall_Rank', 'Overall_Level', 'Overall_XP', 'Attack_Rank', 'Attack_Level', 'Attack_XP', 'Defence_Rank', 'Defence_Level', 'Defence_XP', 'Strength_Rank', 'Strength_Level', 'Strength_XP', 'Hitpoints_Rank', 'Hitpoints_Level', 'Hitpoints_XP', 'Ranged_Rank', 'Ranged_Level', 'Ranged_XP', 'Prayer_Rank', 'Prayer_Level', 'Prayer_XP', 'Magic_Rank', 'Magic_Level', 'Magic_XP', 'Cooking_Rank', 'Cooking_Level', 'Cooking_XP', 'Woodcutting_Rank', 'Woodcutting_Level', 'Woodcutting_XP', 'Fletching_Rank', 'Fletching_Level', 'Fletching_XP', 'Fishing_Rank', 'Fishing_Level', 'Fishing_XP', 'Firemaking_Rank', 'Firemaking_Level', 'Firemaking_XP', 'Crafting_Rank', 'Crafting_Level', 'Crafting_XP', 'Smithing_Rank', 'Smithing_Level', 'Smithing_XP', 'Mining_Rank', 'Mining_Level', 'Mining_XP', 'Herblore_Rank', 'Herblore_Level', 'Herblore_XP', 'Agility_Rank', 'Agility_Level', 'Agility_XP', 'Thieving_Rank', 'Thieving_Level', 'Thieving_XP', 'Slayer_Rank', 'Slayer_Level', 'Slayer_XP', 'Farming_Rank', 'Farming_Level', 'Farming_XP', 'Runecrafting_Rank', 'Runecrafting_Level', 'Runecrafting_XP', 'Hunter_Rank', 'Hunter_Level', 'Hunter_XP', 'Construction_Rank', 'Construction_Level', 'Construction_XP');
        // The input supplied by the user form
        $user_input = request('Character_Name');
        if (highscores::where('Character_Name', $user_input)->exists()) {

        }
        // Add required text before user input using concatenation.
        $user_concat = "index_lite.ws?player=" . $user_input;
        // The base url for Guzzle
        $client = new Client(['base_uri' => 'https://secure.runescape.com/m=hiscore_oldschool/']);
        // Take the concatenated user input and make the request
        $response = $client->request('GET', $user_concat);
        // Get the body of the request containing the users information
        $body = $response->getBody();
        // Use delimiters to sort the response
        $striped_response = preg_split("/(\n|,)/", $body, 93);
        // Assign key values to the response
        $keyed_response = array_combine_($keys, $striped_response);
        // This function uses array keys as variable names and values as variable values.
        extract($keyed_response);
        $highscores = new highscores;
        $highscores->Character_Name = $user_input;
        $highscores->Overall_XP = $Overall_XP;
        $highscores->Attack_XP = $Attack_XP;
        $highscores->Defence_XP = $Defence_XP;
        $highscores->Strength_XP = $Strength_XP;
        $highscores->Hitpoints_XP = $Hitpoints_XP;
        $highscores->Ranged_XP = $Ranged_XP;
        $highscores->Prayer_XP = $Prayer_XP;
        $highscores->Magic_XP = $Magic_XP;
        $highscores->Cooking_XP = $Cooking_XP;
        $highscores->Woodcutting_XP = $Woodcutting_XP;
        $highscores->Fletching_XP = $Fletching_XP;
        $highscores->Fishing_XP = $Fishing_XP;
        $highscores->Firemaking_XP = $Firemaking_XP;
        $highscores->Crafting_XP = $Crafting_XP;
        $highscores->Smithing_XP = $Smithing_XP;
        $highscores->Mining_XP = $Mining_XP;
        $highscores->Herblore_XP = $Herblore_XP;
        $highscores->Agility_XP = $Agility_XP;
        $highscores->Thieving_XP = $Thieving_XP;
        $highscores->Slayer_XP = $Slayer_XP;
        $highscores->Farming_XP = $Farming_XP;
        $highscores->Runecrafting_XP = $Runecrafting_XP;
        $highscores->Hunter_XP = $Hunter_XP;
        $highscores->Construction_XP = $Construction_XP;
        $highscores->saveOrFail();

        $user = $user_input;
        //Check to see if character exists, if they do return all their data points. If not refresh with alert.
        if (highscores::where('Character_Name', $user)->exists()) {
            $chars = highscores::where('Character_Name', $user)->latest()->get();
            $charsLast5 = highscores::where('Character_Name', $user)->latest()->paginate(5);
            $charsCount = count($chars);
            return view('character.dashboard', compact('chars', 'charsCount', 'charsLast5'));
        } else {
            return redirect()->home();
        }
    }

}


