<link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/frontPage.css">

    <div class="bg_img_photo " style="background-image: url(img//GE.png); height: 936px;">
        <div class="overlay d-flex w-100 h-100">
            <div class="overlay_text_container">
                <div class="description d-flex flex-column h-100 w-100 justify-content-center" >
                    <h1 class="text-muted" id='front-page-title'>RuneGraphs</h1>
                    <div class="h3 text-muted" id='front-page-subtitle'>Its not healthy to be this informed.</div>
                    <form action="/highscores" method="POST">
                        {{ csrf_field() }}
                        <div class="input-group" style="max-width:375px;">
                                <input type="text" class="form-control" name="user_input" id="player" placeholder="Character Name" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-light" type="submit">Search</button>
                                </div>
                        </div>
                    </form>
                <div>
                    <a href="https://github.com/Lyle2007/RuneGraphs"><i class="fab fa-github fa-2x" style="color:white;" onmouseover="btnMouse(this)" onmouseout="normalBtn(this)" ></i></a>
                    <a href="https://www.twitter.com/RuneGraphs"><i class="fab fa-twitter fa-2x pl-3" style="color:white;" onmouseover="btnMouse(this)" onmouseout="normalBtn(this)" ></i></a>
                </div>
                </div>
            </div>
        </div>
    </div>

        <script>
            function btnMouse(x) {
          x.style.color = "#ccc";
          x.style.color = "#ccc";
        }

        function normalBtn(x) {
          x.style.color = "white";
          x.style.color = "white";
        }
        </script>