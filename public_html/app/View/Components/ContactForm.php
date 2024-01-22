<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContactForm extends Component
{
    
    public $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.contact-form');
    }
}
