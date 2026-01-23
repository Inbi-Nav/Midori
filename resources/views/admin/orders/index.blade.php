@extends('layouts.admin')

@section('content')
<h1 class="zen-font text-2xl font-bold mb-8 text-green-400">
    Orders
</h1>

@foreach($orders as $order)

    @php
        $isCancelled = $order->status === 'cancelled';
        $isDelivered = $order->status === 'delivered';
    @endphp

    <div class="
        rounded-xl p-5 mb-4 border
        {{ $isCancelled ? 'bg-red-950/40 border-red-800' : '' }}
        {{ $isDelivered ? 'bg-green-950/30 border-green-800' : '' }}
        {{ (!$isCancelled && !$isDelivered) ? 'bg-gray-900 border-gray-800' : '' }}
    ">

        <div class="flex justify-between items-center mb-4">
            <div>
                <p class="text-xs text-gray-400">Order</p>
                <p class="font-semibold">
                    #{{ $order->id }}
                </p>

                <p class="text-xs text-gray-400 mt-1">User</p>
                <p class="font-medium">
                    {{ $order->user->name }}
                </p>
            </div>

            <div class="text-right">
                <p class="text-xs text-gray-400">Total</p>
                <p class="font-semibold text-green-400">
                    €{{ number_format($order->total_amount, 2) }}
                </p>

                <span class="inline-block mt-2 px-3 py-1 rounded-full text-xs font-semibold
                    @if($order->status === 'paid') bg-yellow-900/40 text-yellow-400
                    @elseif($order->status === 'pending') bg-blue-900/40 text-blue-400
                    @elseif($order->status === 'shipped') bg-purple-900/40 text-purple-400
                    @elseif($order->status === 'delivered') bg-green-900/40 text-green-400
                    @endif">
                </span>
            </div>
        </div>

        @if(!$isCancelled && !$isDelivered)
            <form method="POST"
                  action="{{ route('admin.orders.status', $order) }}"
                  class="flex items-center gap-3">
                @csrf
                @method('PATCH')

                <select name="status"
                        class="bg-gray-800 border border-gray-700 rounded px-3 py-1.5 text-sm">
                    @foreach(\App\Models\Order::STATUSES as $status)
                        <option value="{{ $status }}" @selected($order->status === $status)>
                            {{ ($status) }}
                        </option>
                    @endforeach
                </select>

                <button
                    class="bg-green-600 hover:bg-green-700 transition px-4 py-1.5 rounded text-sm">
                    Save
                </button>
            </form>
        @else
            <div class="flex justify-end">
                <form method="POST"
                      action="{{ route('admin.orders.delete', $order) }}">
                    @csrf
                    @method('DELETE')
                    <button
                        onclick="return confirm('Are you sure you want to delete this order?')"
                        class="text-sm text-red-400 hover:underline">
                        Delete order
                    </button>
                </form>
            </div>
        @endif
    </div>
@endforeach
@endsection
