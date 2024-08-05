<div>
    Count: {{$count}}
    <button @class(['border', 'rounded', 'p-2', 'bg-green-300']) wire:click.throttle.1000="increment(2)" >+</button>
    <button @class(['border', 'rounded', 'p-2', 'bg-green-300']) wire:click.throttle.1000="decrement(2)" >-</button>
</div>
