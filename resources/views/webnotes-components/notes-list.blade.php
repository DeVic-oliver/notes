@if (is_countable($notes) && count($notes) > 0)
    <div class="grid grid-cols-1 gap-y-5">
        @foreach ($notes as $note)
            <x-notes.card   :id="$note->id" 
                            :title="$note->title" 
                            :description="$note->description" 
                            :can-show-delete="true"/>
        @endforeach    
    </div>
@endif