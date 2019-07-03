@extends('layouts.master')
@section('body')
    <div class="container-fluid">
        <div class="bg_img_photo " style="background-image: url(img//GE.png); height: 936px;">
            <div class="overlay d-flex w-100 h-100">
                <div class="overlay_text_container">
                    <div class="description d-flex flex-column h-100 w-100 justify-content-center" >
                        <h1 class="text-muted" id='front-page-title'>RuneGraphs</h1>
                        <div class="h3 text-muted" id='front-page-subtitle'>Its not healthy to be this informed.</div>
                        {{-- Takes user info and then checks DB for existing data --}}
                        <form action="/highscores/{Character_Name}" method="get">
                            {{ csrf_field() }}
                            <div class="input-group" style="max-width:375px;">
                            <input type="text" class="form-control" name="Character_Name" id="Character_Name" placeholder="Character Name" value="{{ old('Character_Name') }}" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-light" type="submit">Search</button>
                                    </div>
                                </div>
                        </form>
                    <div>
                        <a href="https://github.com/Lyle2007/RuneGraphs"><i class="fab fa-github fa-2x" style="color:white;" onmouseover="btnMouse(this)" onmouseout="normalBtn(this)" ></i></a>
                        <a href="https://twitter.com/GraphsRune"><i class="fab fa-twitter fa-2x pl-3" style="color:white;" onmouseover="btnMouse(this)" onmouseout="normalBtn(this)" ></i></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
@endsection