<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class NoteFormBase extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public bool $isAdmin)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.note-form-base');
    }
}