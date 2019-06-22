<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\highscores;
use phpDocumentor\Reflection\Types\Mixed_;
use GuzzleHttp\Client;

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
        $keys = array('Overall_Rank','Overall_Level','Overall_XP','Attack_Rank','Attack_Level','Attack_XP','Defence_Rank','Defence_Level','Defence_XP','Strength_Rank','Strength_Level','Strength_XP','Hitpoints_Rank','Hitpoints_Level','Hitpoints_XP','Ranged_Rank','Ranged_Level','Ranged_XP','Prayer_Rank','Prayer_Level','Prayer_XP','Magic_Rank','Magic_Level','Magic_XP','Cooking_Rank','Cooking_Level','Cooking_XP','Woodcutting_Rank','Woodcutting_Level','Woodcutting_XP','Fletching_Rank','Fletching_Level','Fletching_XP','Fishing_Rank','Fishing_Level','Fishing_XP','Firemaking_Rank','Firemaking_Level','Firemaking_XP','Crafting_Rank','Crafting_Level','Crafting_XP','Smithing_Rank','Smithing_Level','Smithing_XP','Mining_Rank','Mining_Level','Mining_XP','Herblore_Rank','Herblore_Level','Herblore_XP','Agility_Rank','Agility_Level','Agility_XP','Thieving_Rank','Thieving_Level','Thieving_XP','Slayer_Rank','Slayer_Level','Slayer_XP','Farming_Rank','Farming_Level','Farming_XP','Runecrafting_Rank','Runecrafting_Level','Runecrafting_XP','Hunter_Rank','Hunter_Level','Hunter_XP','Construction_Rank','Construction_Level','Construction_XP');
        // The input supplied by the user form
        $user_input = request('user_input');
        // Add required text before user input using concatenation.
        $user_concat = "index_lite.ws?player=" . $user_input;
        // The base url for Guzzle
        $client = new Client(['base_uri' => 'https://secure.runescape.com/m=hiscore_oldschool/']);
        // Take the concatenated user input and make the request
        $response = $client->request('GET', $user_concat);
        // Get the body of the request containing the users information
        $body = $response->getBody();
        // Use delimiters to sort the response
        $striped_response = preg_split( "/(\n|,)/", $body, 93 );
        // Assign key values to the response
        $keyed_response = array_combine_($keys, $striped_response);
        dd($keyed_response);
    }
}

