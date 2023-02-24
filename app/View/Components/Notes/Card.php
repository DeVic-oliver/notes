<?php

namespace App\View\Components\Notes;

use Illuminate\View\Component;

class Card extends Component
{
    private static bool $permissionDelete;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public int $id, public string $title, public string $description)
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
        return function (array $data) {
            $data['permissionDelete'] = Card::$permissionDelete;
            return view('components.notes.card');
        };
    }

    public function showDelete(bool $show){
        $this->permissionDelete = $show;
    }
}
