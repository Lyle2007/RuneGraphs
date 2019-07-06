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
                        @if (session('status'))
                            <div class="alert alert-danger" style="max-width:375px;">
                                {{ session('status') }}
                            </div>
                        @endif
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
    
@endsection
