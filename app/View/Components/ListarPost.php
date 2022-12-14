<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListarPost extends Component
{
    public $posts;
    
    public function __construct($posts)
    {
        // hace que la informacion pase a un componente
        $this->posts = $posts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.listar-post');
    }
}
