@extends('layouts.master')

@section('body')

<style>
    .skill_icon{
        max-width: 16px;
    }
    .table th, .table td {
    padding: 0.25rem;
    vertical-align: unset;
    border-top: 1px solid #dee2e6;
    }
</style>
<?php
function getLevel($xp)
{
    $levels = array(
        0, 0, 83, 174, 276, 388, 512, 650, 801, 969, 1154, 1358, 1584, 1833, 2107, 2411, 2746, 3115, 3523, 3973,
        4470, 5018, 5624, 6291, 7028, 7842, 8740, 9730, 10824, 12031, 13363, 14833, 16456, 18247, 20224, 22406,
        24815, 27473, 30408, 33648, 37224, 41171, 45529, 50339, 55649, 61512, 67983, 75127, 83014, 91721, 101333,
        111945, 123660, 136594, 150872, 166636, 184040, 203254, 224466, 247886, 273742, 302288, 333804, 368599,
        407015, 449428, 496254, 547953, 605032, 668051, 737627, 814445, 899257, 992895, 1096278, 1210421, 1336443,
        1475581, 1629200, 1798808, 1986068, 2192818, 2421087, 2673114, 2951373, 3258594, 3597792, 3972294, 4385776,
        4842295, 5346332, 5902831, 6517253, 7195629, 7944614, 8771558, 9684577, 10692629, 11805606, 13034431
    );

    foreach ($levels as $x => $x_value) {
        if ($x_value >= $xp) {
            return $x;
        }
    }
    return $x;
}
?>
@php
$table_headers = array();


 $levels = array(
            0, 0, 83, 174, 276, 388, 512, 650, 801, 969, 1154, 1358, 1584, 1833, 2107, 2411, 2746, 3115, 3523, 3973,
            4470, 5018, 5624, 6291, 7028, 7842, 8740, 9730, 10824, 12031, 13363, 14833, 16456, 18247, 20224, 22406,
            24815, 27473, 30408, 33648, 37224, 41171, 45529, 50339, 55649, 61512, 67983, 75127, 83014, 91721, 101333,
            111945, 123660, 136594, 150872, 166636, 184040, 203254, 224466, 247886, 273742, 302288, 333804, 368599,
            407015, 449428, 496254, 547953, 605032, 668051, 737627, 814445, 899257, 992895, 1096278, 1210421, 1336443,
            1475581, 1629200, 1798808, 1986068, 2192818, 2421087, 2673114, 2951373, 3258594, 3597792, 3972294, 4385776,
            4842295, 5346332, 5902831, 6517253, 7195629, 7944614, 8771558, 9684577, 10692629, 11805606, 13034431
        );
@endphp
<div style="margin:10px;">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Loop 1</div>
                @foreach ($chars as $char)
                    @if ($loop->first)
                        {{ $char }}
                    @endif

                    @if ($loop->last)
                        {{ $char }}
                    @endif
                <p>This is user {{ $char->id }}</p>
                @endforeach
                {{ $charsCount }}
            </div>
        </div>
        <div class="col-3" style="max-width:200px;">
            <div class="card">
                <div class="card-header">Current Skills</div>
                <table style="margin:5px;">
                    <tbody>
                        <tr><td><img src="/img/skills/attack.gif" class="skill_icon">      </td>   <td>{{$char->Attack_XP}}       </td>   <td> {{getLevel($char->Attack_XP)}}       </td>   </tr>
                        <tr><td><img src="/img/skills/defence.gif" class="skill_icon">     </td>   <td>{{$char->Defence_XP}}      </td>   <td> {{getLevel($char->Defence_XP)}}      </td>   </tr>
                        <tr><td><img src="/img/skills/strength.gif" class="skill_icon">    </td>   <td>{{$char->Strength_XP}}     </td>   <td> {{getLevel($char->Strength_XP)}}     </td>   </tr>
                        <tr><td><img src="/img/skills/hitpoints.gif" class="skill_icon">   </td>   <td>{{$char->Hitpoints_XP}}    </td>   <td> {{getLevel($char->Hitpoints_XP)}}    </td>   </tr>
                        <tr><td><img src="/img/skills/ranged.gif" class="skill_icon">      </td>   <td>{{$char->Ranged_XP}}       </td>   <td> {{getLevel($char->Ranged_XP)}}       </td>   </tr>
                        <tr><td><img src="/img/skills/prayer.gif" class="skill_icon">      </td>   <td>{{$char->Prayer_XP}}       </td>   <td> {{getLevel($char->Prayer_XP)}}       </td>   </tr>
                        <tr><td><img src="/img/skills/magic.gif" class="skill_icon">       </td>   <td>{{$char->Magic_XP}}        </td>   <td> {{getLevel($char->Magic_XP)}}        </td>   </tr>
                        <tr><td><img src="/img/skills/cooking.gif" class="skill_icon">     </td>   <td>{{$char->Cooking_XP}}      </td>   <td> {{getLevel($char->Cooking_XP)}}      </td>   </tr>
                        <tr><td><img src="/img/skills/woodcutting.gif" class="skill_icon"> </td>   <td>{{$char->Woodcutting_XP}}  </td>   <td> {{getLevel($char->Woodcutting_XP)}}  </td>   </tr>
                        <tr><td><img src="/img/skills/fletching.gif" class="skill_icon">   </td>   <td>{{$char->Fletching_XP}}    </td>   <td> {{getLevel($char->Fletching_XP)}}    </td>   </tr>
                        <tr><td><img src="/img/skills/fishing.gif" class="skill_icon">     </td>   <td>{{$char->Fishing_XP}}      </td>   <td> {{getLevel($char->Fishing_XP)}}      </td>   </tr>
                        <tr><td><img src="/img/skills/firemaking.gif" class="skill_icon">  </td>   <td>{{$char->Firemaking_XP}}   </td>   <td> {{getLevel($char->Firemaking_XP)}}   </td>   </tr>
                        <tr><td><img src="/img/skills/crafting.gif" class="skill_icon">    </td>   <td>{{$char->Crafting_XP}}     </td>   <td> {{getLevel($char->Crafting_XP)}}     </td>   </tr>
                        <tr><td><img src="/img/skills/smithing.gif" class="skill_icon">    </td>   <td>{{$char->Smithing_XP}}     </td>   <td> {{getLevel($char->Smithing_XP)}}     </td>   </tr>
                        <tr><td><img src="/img/skills/mining.gif" class="skill_icon">      </td>   <td>{{$char->Mining_XP}}       </td>   <td> {{getLevel($char->Mining_XP)}}       </td>   </tr>
                        <tr><td><img src="/img/skills/herblore.gif" class="skill_icon">    </td>   <td>{{$char->Herblore_XP}}     </td>   <td> {{getLevel($char->Herblore_XP)}}     </td>   </tr>
                        <tr><td><img src="/img/skills/agility.gif" class="skill_icon">     </td>   <td>{{$char->Agility_XP}}      </td>   <td> {{getLevel($char->Agility_XP)}}      </td>   </tr>
                        <tr><td><img src="/img/skills/thieving.gif" class="skill_icon">    </td>   <td>{{$char->Thieving_XP}}     </td>   <td> {{getLevel($char->Thieving_XP)}}     </td>   </tr>
                        <tr><td><img src="/img/skills/slayer.gif" class="skill_icon">      </td>   <td>{{$char->Slayer_XP}}       </td>   <td> {{getLevel($char->Slayer_XP)}}       </td>   </tr>
                        <tr><td><img src="/img/skills/farming.gif" class="skill_icon">     </td>   <td>{{$char->Farming_XP}}      </td>   <td> {{getLevel($char->Farming_XP)}}      </td>   </tr>
                        <tr><td><img src="/img/skills/runecrafting.gif" class="skill_icon"></td>   <td>{{$char->Runecrafting_XP}} </td>   <td> {{getLevel($char->Runecrafting_XP)}} </td>   </tr>
                        <tr><td><img src="/img/skills/hunter.gif" class="skill_icon">      </td>   <td>{{$char->Hunter_XP}}       </td>   <td> {{getLevel($char->Hunter_XP)}}       </td>   </tr>
                        <tr><td><img src="/img/skills/construction.gif" class="skill_icon"></td>   <td>{{$char->Construction_XP}} </td>   <td> {{getLevel($char->Construction_XP)}} </td>   </tr>
                    </tbody>
                </div>
        </div>
    </div>
</div>
</div>
@endsection