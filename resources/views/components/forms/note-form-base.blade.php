<label for="note-title">Title</label>
<input type="text" name="title" id="note-title">
    @if($isAdmin)
        <select name="type" id="">
            <option value="reminder">Reminder</option>
            <option value="warning">Warning</option>
        </select>
        <br>
    @endif
<br>
<label for="note-description">Description</label>
<textarea name="description" id="note-description" cols="30" rows="10"></textarea>