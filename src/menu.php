<?php

namespace SaeedSalem\menu;

use Illuminate\View\Component;
use Illuminate\Support\Facades\View;
use SaeedSalem\menu\Models\MenuModel;

class menu extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $items = MenuModel::tree();
        return view('SaeedSalem::components.menu', ['items' => $items]);
    }
}