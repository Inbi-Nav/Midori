<?php
namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Product;

class Cart extends Component
{
    public array $items = [];

    public function mount()
    {
        $this->items = session()->get('cart', []);
    }

    #[On('add-to-cart')]
    public function add(int $productId)
    {
        $this->items = session()->get('cart', []);

        $product = Product::findOrFail($productId);

        if ($product->stock <= 0) return;

        if (isset($this->items[$productId])) {
            if ($this->items[$productId]['quantity'] < $product->stock) {
                $this->items[$productId]['quantity']++;
            }
        } else {
            $this->items[$productId] = [
                'id'       => $product->id,
                'name'     => $product->name,
                'price'    => $product->price,
                'image'    => $product->image_url,
                'quantity' => 1,
            ];
        }
        session()->put('cart', $this->items);
        $this->dispatch('cart-updated');
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
