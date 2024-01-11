<div>
    <input type="text" wire:model.live="hobi" placeholder="properti hobi">
    <input type="text" wire:model.live="warna_favorit" placeholder="properti warna_favorit">
    <div>
        <div>Hobi : {{ $hobi }}</div>
        <div>Warna Favorit : {{ $warna_favorit }}</div>
    </div>

    <ul>
        @foreach ($proses as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
