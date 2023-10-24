<div>
    {{-- In work, do what you enjoy. --}}
    <label for="prefectures">都道府県：</label>
    <select wire:model="selectedPrefecture" id="prefectures" wire:change="updateShippingCost">
        @foreach($prefectures as $code => $prefecture)
            <option value="{{ $code }}">{{ $prefecture }}</option>
        @endforeach
    </select><br>

    <p>送料: ¥{{ $shippingCost }}</p>
    <p>合計金額: ¥{{ $totalPrice }}</p>
    <p>お届け目安： {{ $deliveryDay }}</p>
</div>
