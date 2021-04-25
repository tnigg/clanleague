<?php

namespace App\View\Components\teams\create;

use Illuminate\View\Component;

class CreateTeamButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
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
        return view('components.teams.create.create-team-button');
    }
}
