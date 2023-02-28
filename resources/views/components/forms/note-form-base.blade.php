<fieldset class="flex flex-col">
    <label for="note-title" class="text-xl font-semibold mb-4">Title</label>
    <input type="text" name="title" id="note-title" class="max-w-sm h-10" placeholder="What's is the topic?">
</fieldset>
    @if($isAdmin)
    <fieldset class="flex flex-col">
        <label for="note-type" class="text-xl font-semibold mb-4">Type</label>
        <select name="type" id="note-type" class="max-w-sm h-10">
            <option value="reminder">Reminder</option>
            <option value="warning">Warning</option>
        </select>
    </fieldset>
    @endif
<fieldset class="flex flex-col">
    <label for="note-description" class="text-xl font-semibold mb-4">Description</label>
    <textarea name="description" id="note-description" cols="30" rows="10" placeholder="Type the fully description here!"></textarea>
</fieldset>