<?php
// app/View/Components/SearchBar.php

namespace App\View\Components;

use Illuminate\View\Component;

class SearchBar extends Component
{
    public $searchTerm;

    public function __construct($searchTerm = '')
    {
        $this->searchTerm = $searchTerm;
    }

    public function render()
    {
        return view('components.search-bar');
    }
}
