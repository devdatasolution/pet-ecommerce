@foreach (App\Models\Category::where('id', $category_id)->first()->attribute_types as $attribute_type)
    <li><button class="dropdown-item" onclick="appendAttribute('{{$attribute_type->name}}', '{{$attribute_type->id}}')" type="button">{{$attribute_type->name}}</button></li>
@endforeach