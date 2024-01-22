<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $color;
    public $title;
    public $description;
    public $image;

    public function __construct($color, $title, $description, $image)
    {
        $this->color = $color;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.breadcrumb');
    }
}
