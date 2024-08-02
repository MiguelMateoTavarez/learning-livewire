<div>
    Count: {{$count}}
    <button wire:click.throttle.1000="increment(2)" >+</button>
    <button wire:click.throttle.1000="decrement(2)" >-</button>
</div>
