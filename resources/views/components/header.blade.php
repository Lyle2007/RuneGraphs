<style>

.bg_img_photo {
    position: relative;
    background-size: cover;
    background-position: center;
}
.overlay {
    position: absolute;
    background: rgba(244,244,244,0.30);
}
.overlay_text_container {
    min-width: 800px;
    max-width: 932px;
    padding-right: 15px;
    padding-left: 15px;
    padding-bottom: 300px;
    margin-left: auto;
    margin-right: auto;
}
.justify-content-center {
    -ms-flex-pack: center!important;
    justify-content: center!important;
}
.text-muted {
    color: #f7f7f7!important;
    text-shadow: 1.5px 1.25px black;
    }
h1,h2,h3{
    font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: bold;
    text-shadow: 1px 1px grey;
}
</style>

<div class="bg_img_photo " style="background-image: url(img//GE.png); height: 936px;">
    <div class="overlay d-flex w-100 h-100">
        <div class="overlay_text_container">
            <div class="description d-flex flex-column h-100 w-100 justify-content-center" >
                <h1 class="text-muted" style="font-size:3.5rem;">RuneGraphs</h1>
                <div class="h3 text-muted">Its not healthy to be this informed.</div>
                <form action="/highscores" method="POST">
                    {{ csrf_field() }}
                    <div class="input-group" style="max-width:375px;">
                            <input type="text" class="form-control" name="user_input" id="player" placeholder="Character Name" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-light" type="submit">Search</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
