<fieldset class="flex flex-col">
    <label for="note-title" class="text-xl font-semibold mb-4">Título</label>
    <input type="text" name="title" id="note-title" class="max-w-sm h-10" placeholder="Qual o tópico?" value="{{$titleValue}}">
</fieldset>
    @if($isAdmin)
    <fieldset class="flex flex-col">
        <label for="note-type" class="text-xl font-semibold mb-4">Tipo</label>
        <select name="type" id="note-type" class="max-w-sm h-10">
            <option value="reminder">Lembrete</option>
            <option value="warning">Aviso</option>
        </select>
    </fieldset>
    @endif
<fieldset class="flex flex-col">
    <label for="note-description" class="text-xl font-semibold mb-4">Descrição</label>
    <textarea name="description" id="note-description" cols="30" rows="10" placeholder="Digita tudo aqui!">{{$descriptionValue}}</textarea>
</fieldset>