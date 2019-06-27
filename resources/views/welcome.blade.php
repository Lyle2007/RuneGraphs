@extends('layouts.master')

@section('content')


{{--CHARACTER SEARCH BOX--}}
<div class="row m-2">
    <div class="col-lg-2">
        <div class="card">
            <div class="card-body">
                <form  action="/highscores" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="character_nm">Character</label>
                        <input type="text" class="form-control" name="user_input" id="player" >
                    </div>
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form  action="/level" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="character_nm">Character</label>
                        <input type="text" class="form-control" name="user_input" id="player" >
                    </div>
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th></th>
                        <th><img src="img/skills/overall.gif" alt="Overall"></th>
                        <th><img src="img/skills/attack.gif" alt="Attack"></th>
                        <th><img src="img/skills/defence.gif" alt="Defence"></th>
                        <th>Strength</th>
                        <th>Hitpoints</th>
                        <th>Ranged</th>
                        <th>Prayer</th>
                        <th>Magic</th>
                        <th>Cooking</th>
                        <th>Woodcutting</th>
                        <th>Fletching</th>
                        <th>Fishing</th>
                        <th>Firemaking</th>
                        <th>Crafting</th>
                        <th>Smithing</th>
                    </thead>

                    <tbody>


                        @foreach ($highscores as $highscore)
                            <tr>
                                    <td scoped='row'>{{$highscore->Character_Name}}</td>
                                    <td>{{$highscore->Overall_XP}}</td>
                                    <td >{{$highscore->Attack_XP  }}</td>
                                    <td>{{$highscore->Defence_XP }}</td>
                                    <td>{{$highscore->Strength_XP }}</td>
                                    <td>{{$highscore->Hitpoints_XP }}</td>
                                    <td>{{$highscore->Ranged_XP }}</td>
                                    <td>{{$highscore->Prayer_XP }}</td>
                                    <td>{{$highscore->Magic_XP}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>

    document.getElementById('level').innerHtml = "3";


</script>

@endsection
