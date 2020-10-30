<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Product;

class Productlistitem extends Component
{
    public $product;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($productId)
    {
        //
        $this->product = Product::findOrFail($productId);
    
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.productlistitem');
    }
}
