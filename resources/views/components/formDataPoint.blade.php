<form action="/highscores" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="player">Character</label>
        <input type="text" class="form-control" name="user_input" id="player"
                placeholder="" required>
    </div>
    <button class="btn btn-primary" type="submit">Create</button>
</form>