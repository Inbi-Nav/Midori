<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Product;

class Cart extends Component
{
    public array $items = [];
    public string $debug = 'waiting';

    #[On('add-to-cart')]
    public function add(int $productId) {
        $product = Product::findOrFail($productId);

        if ($product->stock <= 0) {
            return;
        }

        if (isset($this->items[$productId])) {
            $this->items[$productId]['quantity']++;
        } else {
            $this->items[$productId] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
            ];
        }
    }

    public function remove(int $productId) {
        unset($this->items[$productId]);
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
