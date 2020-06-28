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
        if (View::exists('vendor.menu.components.menu')):
            return view('vendor.menu.components.menu', ['items' => $items]);
        else:
            return view('SaeedSalem::components.menu', ['items' => $items]);
        endif;
    }
}