@extends('layouts.master')

@section('body')

{{--NAV BAR TOP--}}
<div class="container-fluid mb-2" id="nav-bar-top" style="background: #343a40; height: 3rem;">

</div>
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
    </div>
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                            <th scope="col">Character Name</th>
                            <th scope="col">Overall</th>
                            <th scope="col">Attack</th>
                            <th scope="col">Defence</th>
                            <th scope="col">Strength</th>
                            <th scope="col">Hitpoints</th>
                            <th scope="col">Ranged</th>
                            <th scope="col">Prayer</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($highscores as $highscore)
                            <tr>
                                <th scope="row">{{$highscore->Character_Name}}</th>
                                <td>{{$highscore->Overall_XP}}</td>
                                <td>{{$highscore->Attack_XP}}</td>
                                <td>{{$highscore->Defence_XP }}</td>
                                <td>{{$highscore->Strength_XP }}</td>
                                <td>{{$highscore->Hitpoints_XP }}</td>
                                <td>{{$highscore->Ranged_XP }}</td>
                                <td>{{$highscore->Prayer_XP }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
