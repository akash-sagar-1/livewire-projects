<div class="p-16 flex justify-center gap-6 items-center">
   <button wire:click="increment" class="px-4 py-4 bg-indigo-500 hover:bg-indigo-600 text-white rounded">+</button>
    <span>{{ $count }}</span>
   <button wire:click="decrement" class="px-4 py-4 bg-indigo-500 hover:bg-indigo-600 text-white rounded">-</button>
</div>
