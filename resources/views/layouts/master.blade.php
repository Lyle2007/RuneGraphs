<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RuneGraphs</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
{{--NAV BAR TOP--}}
<div class="container-fluid mb-2" id="nav-bar-top" style="background: #343a40; height: 3rem;">

</div>
{{--CHARACTER SEARCH BOX--}}
<div class="row m-2">
    <div class="col-lg-2">
        <div class="card">
            <div class="card-body">
                <form  action="/highscores" method="get">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="character_nm">Character</label>
                        <input type="text" class="form-control" name="player" id="player" >
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
                        <th scope="col">Skill</th>
                        <th scope="col">Rank</th>
                        <th scope="col">Level</th>
                        <th scope="col">Last Updated</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>


