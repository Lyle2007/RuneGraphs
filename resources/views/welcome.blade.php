@extends('layouts.master')

@section('content')
    {{-- Function that turns XP into Levels --}}
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

    <link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">

    <style>
        .skill-table {
            padding: 0.25rem;
        }

        .card-img-top {
            max-height: 75px;
            min-width: 250px;

        }

        .card-img-overlay {
            max-height: 75px;
            min-width: 250px;
            background-color: #8b7860;
        }

        .card {
            min-width: 250px;
        }

        .osrs-text {
            font-family: 'VT323', monospace;
            color: palegoldenrod;
            text-shadow: 2px 1px #1d2124;
        }

        .pagination {
            align-self: flex-end;
            padding-right: 1rem;
        }
    </style>

@section('title', 'Dashboard')

<div class="content-wrapper">
    <div class="row">
        <div class="card-deck ml-auto mr-auto col-12">
            <div class="card">
                <img src="img/card_images/scroll.png" class="card-img-top" alt="...">
                <div class="card-img-overlay">
                    <h2 class="text-center align-middle m-0 osrs-text">TRACK CHARACTER</h2>
                </div>
                <div class="card-body">
                    <form action="/highscores" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="player">Character</label>
                            <input type="text" class="form-control" name="user_input" id="player"
                                   placeholder="Character Name...">
                        </div>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <img src="img/card_images/scroll.png" class="card-img-top" alt="...">
                <div class="card-img-overlay">
                    <h2 class="text-center align-middle m-0 osrs-text">LATEST INFO</h2>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="img/card_images/scroll.png" class="card-img-top" alt="...">
                <div class="card-img-overlay">
                    <h2 class="text-center align-middle m-0 osrs-text">POPULAR LINKS</h2>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional
                        content.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-12">
            <div class="card">
                <table class="table">
                    <thead>
                        <th></th>
                        <th><img src="img/skills/overall.gif" alt="Overall"></th>
                        <th><img src="img/skills/attack.gif" alt="Attack"></th>
                        <th><img src="img/skills/defence.gif" alt="Defence"></th>
                        <th><img src="img/skills/strength.gif"></th>
                        <th><img src="img/skills/hitpoints.gif"></th>
                        <th><img src="img/skills/ranged.gif"></th>
                        <th><img src="img/skills/prayer.gif"></th>
                        <th><img src="img/skills/magic.gif"></th>
                        <th><img src="img/skills/cooking.gif"></th>
                        <th><img src="img/skills/woodcutting.gif"></th>
                        <th><img src="img/skills/fletching.gif"></th>
                        <th><img src="img/skills/fishing.gif"></th>
                        <th><img src="img/skills/firemaking.gif"></th>
                        <th><img src="img/skills/crafting.gif"></th>
                        <th><img src="img/skills/smithing.gif"></th>
                        <th><img src="img/skills/mining.gif"></th>
                        <th><img src="img/skills/herblore.gif"></th>
                        <th><img src="img/skills/agility.gif"></th>
                        <th><img src="img/skills/thieving.gif"></th>
                        <th><img src="img/skills/slayer.gif"></th>
                        <th><img src="img/skills/farming.gif"></th>
                        <th><img src="img/skills/runecrafting.gif"></th>
                        <th><img src="img/skills/hunter.gif"></th>
                        <th><img src="img/skills/construction.gif"></th>
                    </thead>
                    <tbody>
                        @foreach ($highscores as $highscore)
                            <tr>
                                <td class="skill-table" scoped='row'>{{$highscore->Character_Name}}</td>
                                <td class="skill-table" scoped='row'>{{$highscore->Overall_XP}}</td>
                                <td class="skill-table">{{ getLevel($highscore->Attack_XP)  }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Defence_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Strength_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Hitpoints_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Ranged_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Prayer_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Magic_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Cooking_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Woodcutting_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Fletching_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Fishing_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Firemaking_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Crafting_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Smithing_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Mining_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Herblore_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Agility_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Thieving_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Slayer_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Farming_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Runecrafting_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Hunter_XP) }}</td>
                                <td class="skill-table">{{ getLevel($highscore->Construction_XP) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $highscores->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
