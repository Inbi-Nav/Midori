<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class CartPage extends Component
{
    public array $items = [];
    public float $total = 0;

    public function mount()
    {
        $this->items = session()->get('cart', []);
        $this->calculateTotal();
    }

    public function increment($productId)
    {
        $product = Product::findOrFail($productId);

        if ($this->items[$productId]['quantity'] < $product->stock) {
            $this->items[$productId]['quantity']++;
            $this->sync();
        }
    }

    public function decrement($productId)
    {
        if ($this->items[$productId]['quantity'] > 1) {
            $this->items[$productId]['quantity']--;
        } else {
            unset($this->items[$productId]);
        }

        $this->sync();
    }

    public function remove($productId)
    {
        unset($this->items[$productId]);
        $this->sync();
    }

    protected function sync()
    {
        session()->put('cart', $this->items);
        $this->calculateTotal();
    }

    protected function calculateTotal()
    {
        $this->total = collect($this->items)->sum(
            fn ($item) => $item['price'] * $item['quantity']
        );
    }

    public function render()
    {
        return view('livewire.cart-page');
    }
}
