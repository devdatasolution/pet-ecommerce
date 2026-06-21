{{-- Example of think: Color is a attribute and Green, Red, Blak is the attribute values --}}
@foreach (App\Models\Attribute_type::where('id', $attribute_type_id)->first()->attributes as $attribute)
    @php
        if (isset($product_id) && $product_id > 0) {
            $product_attribute = App\Models\Product_attribute::where('attribute_id', $attribute->id)->where('product_id', $product_id)->firstOrNew();
            $product_quantity = $product_attribute->quantity;
        } else {
            $product_quantity = '';
        }
    @endphp

    <div class="input-group mb-3">
        <span class="input-group-text">
            {{ $attribute->name }}
        </span>
        <input value="{{ $product_quantity }}" name="product_attributes[{{ $attribute_type_id }}][{{ $attribute->id }}]" type="number" min="0" class="ol-form-control form-control" placeholder="{{ get_phrase('Quantity of ____', strtolower($attribute->name)) }}" aria-label="Quantity" aria-describedby="basic-addon1">
    </div>
@endforeach
