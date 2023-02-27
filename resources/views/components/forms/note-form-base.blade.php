<fieldset class="flex flex-col">
    <label for="note-title" class="text-xl font-semibold mb-4">Title</label>
    <input type="text" name="title" id="note-title" class="max-w-sm h-10">
</fieldset>
    @if($isAdmin)
        <select name="type" id="">
            <option value="reminder">Reminder</option>
            <option value="warning">Warning</option>
        </select>
        <br>
    @endif
<br>
<fieldset class="flex flex-col">
    <label for="note-description" class="text-xl font-semibold mb-4">Description</label>
    <textarea name="description" id="note-description" cols="30" rows="10"></textarea>
</fieldset>