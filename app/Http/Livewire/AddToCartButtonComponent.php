<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Menu;
use Livewire\Component;

class AddToCartButtonComponent extends Component
{
    public Menu $menu;

    public Cart $cart;

    public function mount(Menu $menu)
    {
        $this->menu = $menu;

        if(auth()->check())
        {
            $this->cart = Cart::query()
            ->firstOrCreate([
                'status' => 'active',
                'user_id' => auth()->user()->id
            ],[
                'status' => 'active',
                'user_id' => auth()->user()->id
            ]);
        }
    }

    public function add(Menu $menu)
    {
        if(auth()->check())
        {
            $item = $this->cart->items()
                ->where('status','active')
                ->where('menu_id',$menu->id)
                ->first();

            if(empty($item))
            {
                $item = $this->cart->items()
                        ->create([
                            'status' => 'active',
                            'menu_id' => $menu->id,
                            'product_name' => $menu->nama,
                            'qty' => 1,
                            'product_price' => $menu->harga,
                            'total' => 1 * $menu->harga
                        ]);

                $this->cart->total = $this->cart->items()->where('status','active')->sum('total');
                $this->cart->save();
                $this->cart->refresh();

                return ;
            }

            $item->qty = $item->qty + 1;
            $item->total = $item->qty * $item->product_price;
            $item->save();

            $this->cart->total = $this->cart->items()->where('status','active')->sum('total');
            $this->cart->save();
            $this->cart->refresh();
        }
    }

    public function render()
    {
        return view('livewire.add-to-cart-button-component');
    }
}
