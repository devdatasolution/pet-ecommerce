<form action="{{ route('vendor.product.store', ['action_type' => 'detailed']) }}" method="post" enctype="multipart/form-data">
    @csrf
    
    <div class="row">
        <div class="col-lg-6">
            <div class="ol-card">
                <div class="pt-3">
                    <h5 class="title fs-14px ps-3">{{ get_phrase('Product Info') }}</h5>
                </div>
                <div class="ol-card-body p-3 mb-5">
                    <div class="mb-3">
                        <label for="title" class="form-label ol-form-label">{{ get_phrase('Product title') }}</label>
                        <input type="text" value="{{ old('title') }}" name="title" class="form-control ol-form-control" id="title" placeholder="{{ get_phrase('Enter product title') }}" aria-label="{{ get_phrase('Enter product title') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="brand_id" class="form-label ol-form-label">{{ get_phrase('Brand') }}</label>
                        <select class="ol-select2" name="brand_id" id="brand_id" required>
                            <option value="">{{ get_phrase('Select a brand') }}</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="label" class="form-label ol-form-label">{{ get_phrase('Popular label') }}</label>
                        <select class="ol-select2" name="label" id="label" required>
                            <option value="">{{ get_phrase('Select a label') }}</option>
                            <option value="top-seller">{{ get_phrase('Top seller') }}</option>
                            <option value="best-seller">{{ get_phrase('Best seller') }}</option>
                            <option value="featured">{{ get_phrase('Featured') }}</option>
                            <option value="trendy">{{ get_phrase('Trendy') }}</option>
                            <option value="new-arrival">{{ get_phrase('New arrival') }}</option>
                            <option value="hot">{{ get_phrase('Hot') }}</option>
                            <option value="exclusive">{{ get_phrase('Exclusive') }}</option>
                            <option value="limited-edition">{{ get_phrase('Limited edition') }}</option>
                            <option value="bestselling">{{ get_phrase('Bestselling') }}</option>
                            <option value="customer-favorite">{{ get_phrase('Customer favorite') }}</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="quality_label" class="form-label ol-form-label">{{ get_phrase('Quality Assurance Label') }}</label>
                        <select class="ol-select2" name="quality_label" id="quality_label" required>
                            <option value="">{{ get_phrase('Select a label of quality') }}</option>
                            <option value="certified">{{ get_phrase('Certified') }}</option>
                            <option value="premium">{{ get_phrase('Premium') }}</option>
                            <option value="authentic">{{ get_phrase('Authentic') }}</option>
                            <option value="handmade">{{ get_phrase('Handmade') }}</option>
                            <option value="organic">{{ get_phrase('Organic') }}</option>
                            <option value="sustainable">{{ get_phrase('Sustainable') }}</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="summary" class="form-label ol-form-label">{{ get_phrase('Short summary') }}</label>
                        <textarea name="summary" rows="4" class="form-control ol-form-control" id="summary" placeholder="{{ get_phrase('Write short summary') }}">{{ old('summary') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label ol-form-label">{{ get_phrase('Product description') }}</label>
                        <textarea name="description" rows="4" class="form-control ol-form-control text_editor" id="description" placeholder="{{ get_phrase('Write description') }}">{{ old('description') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="visibility_status_active" class="form-label ol-form-label">{{ get_phrase('Visibility') }} - </label>
                        <div class="eRadios d-flex align-items-center">
                            <div class="form-check">
                                <input type="radio" value="1" name="status" class="form-check-input eRadioSuccess" id="visibility_status_active" required="" checked>
                                <label for="visibility_status_active" class="form-check-label">{{ get_phrase('Active') }}</label>
                            </div>

                            <div class="form-check ms-3">
                                <input type="radio" value="0" name="status" class="form-check-input eRadioPrimary" id="visibility_status_inactive" required="">
                                <label for="visibility_status_inactive" class="form-check-label">{{ get_phrase('Draft') }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ol-card">
                <div class="pt-3">
                    <h5 class="title fs-14px ps-3">{{ get_phrase('Stock & Related Attriutes') }}</h5>
                </div>
                <div class="ol-card-body p-3 mb-5">
                    <div class="mb-3">
                        <label for="unit" class="form-label ol-form-label">{{ get_phrase('Total stock') }}</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">{{ get_phrase('Unit') }}</span>
                            <select class="ol-form-control form-control" onchange="$('#selected_unit').text($(this).val().toUpperCase());" name="unit" id="unit" required>
                                <option value="">{{ get_phrase('Select product unit') }}</option>
                                <option value="kg">{{ get_phrase('Kilogram') }} (kg)</option>
                                <option value="g">{{ get_phrase('Gram') }} (g)</option>
                                <option value="lb">{{ get_phrase('Pound') }} (lb)</option>
                                <option value="oz">{{ get_phrase('Ounce') }} (oz)</option>
                                <option value="L">{{ get_phrase('Liter') }} (L)</option>
                                <option value="mL">{{ get_phrase('Milliliter') }} (mL)</option>
                                <option value="gal">{{ get_phrase('Gallon') }}</option>
                                <option value="qt">{{ get_phrase('Quart') }}</option>
                                <option value="pt">{{ get_phrase('Pint') }}</option>
                                <option value="fl-oz">{{ get_phrase('Fluid Ounce') }} (fl oz)</option>
                                <option value="package">{{ get_phrase('Package') }}</option>
                                <option value="box">{{ get_phrase('Box') }}</option>
                                <option value="bundle">{{ get_phrase('Bundle') }}</option>
                                <option value="piece">{{ get_phrase('Piece') }}</option>
                                <option value="set">{{ get_phrase('Set') }}</option>
                                <option value="dozen">{{ get_phrase('Dozen') }}</option>
                                <option value="pair">{{ get_phrase('Pair') }}</option>
                                <option value="case">{{ get_phrase('Case') }}</option>
                                <option value="carton">{{ get_phrase('Carton') }}</option>
                                <option value="pallet">{{ get_phrase('Pallet') }}</option>
                                <option value="bag">{{ get_phrase('Bag') }}</option>
                                <option value="sack">{{ get_phrase('Sack') }}</option>
                                <option value="bottle">{{ get_phrase('Bottle') }}</option>
                                <option value="can">{{ get_phrase('Can') }}</option>
                                <option value="jar">{{ get_phrase('Jar') }}</option>
                                <option value="tube">{{ get_phrase('Tube') }}</option>
                                <option value="strip">{{ get_phrase('Strip') }}</option>
                                <option value="roll">{{ get_phrase('Roll') }}</option>
                                <option value="sheet">{{ get_phrase('Sheet') }}</option>
                                <option value="tablet">{{ get_phrase('Tablet') }}</option>
                                <option value="capsule">{{ get_phrase('Capsule') }}</option>
                                <option value="vial">{{ get_phrase('Vial') }}</option>
                                <option value="unit">{{ get_phrase('Unit') }}</option>
                                <option value="each">{{ get_phrase('Each') }}</option>
                            </select>
                            <span class="input-group-text" id="selected_unit">{{ get_phrase('Quantity') }}</span>
                            <input type="number" min="0" value="{{ old('total_stock') }}" name="total_stock" class="form-control ol-form-control" id="total_stock" placeholder="{{ get_phrase('Enter total stock') }}" aria-label="{{ get_phrase('Enter total stock') }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label ol-form-label">{{ get_phrase('Product category') }}</label>
                        <select class="ol-select2" name="category_id" id="category_id" onchange="load_view('{{ route('view', ['path' => 'store.product.attributes_dropdown_list']) }}?category_id='+$(this).val(), '#attributes_dropdown_list'); $('.appended-attributes').html('');" required>
                            <option value="">{{ get_phrase('Select a category') }}</option>
                            @foreach ($product_categories as $product_category)
                                <optgroup label=" {{ $product_category->title }} ">
                                    <option value="{{ $product_category->id }}">{{ $product_category->title }}</option>
                                    @foreach ($product_category->childs as $sub_category)
                                        <option value="{{ $sub_category->id }}"> - {{ $sub_category->title }}</option>
                                        @foreach ($sub_category->childs as $sub_sub_category)
                                            <option value="{{ $sub_sub_category->id }}"> &nbsp;&nbsp;&nbsp;&nbsp;-- {{ $sub_sub_category->title }}</option>
                                        @endforeach
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 d-flex align-items-center">
                        <label for="extra_cost" class="form-label ol-form-label mb-0">{{ get_phrase('Add new attributes') }}</label>

                        <div class="btn-group dropstart ms-auto">
                            <button type="button" class="btn ol-btn-primary btn-icon radius-8px" data-bs-toggle="dropdown" aria-expanded="false" data-bs-toggle="tooltip" title="{{ get_phrase('Add attribute') }}">
                                <i class="fi-rr-plus-small"></i>
                            </button>
                            <ul class="dropdown-menu" id="attributes_dropdown_list">
                                <li><button class="dropdown-item" type="button">{{ get_phrase('Please select a category') }}</button></li>
                            </ul>
                        </div>
                    </div>

                    <div class="appended-attributes"></div>
                </div>
            </div>

            <div class="ol-card">
                <div class="pt-3">
                    <h5 class="title fs-14px ps-3">{{ get_phrase('Pricing & Status') }}</h5>
                </div>
                <div class="ol-card-body p-3 mb-5">
                    <div class="mb-3">
                        <label for="price" class="form-label ol-form-label">{{ get_phrase('Price') }} ({{ currency() }})</label>
                        <input type="number" step="0.01" value="{{ old('price') }}" name="price" class="form-control ol-form-control" id="price" placeholder="{{ get_phrase('Enter product price') }}" aria-label="{{ get_phrase('Enter product price') }}" required>
                    </div>

                    <hr class="my-4">

                    <div class="mb-3">
                        <label for="discount_type" class="form-label ol-form-label">{{ get_phrase('Discount type') }}</label>
                        <select class="ol-select2" name="discount_type" id="discount_type">
                            <option value="flat">{{ get_phrase('Flat') }}</option>
                            <option value="percentage">{{ get_phrase('Percentage') }}</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="discount_value" class="form-label ol-form-label">{{ get_phrase('Amount of discount') }}</label>
                        <input type="number" min="0" step="0.01" value="{{ old('discount_value') }}" name="discount_value" class="form-control ol-form-control" id="discount_value" placeholder="{{ get_phrase('Enter amount of discount') }}" aria-label="{{ get_phrase('Enter amount of discount') }}" required>
                    </div>

                    <div class="mb-3 pb-5">
                        <label for="discount_period" class="form-label ol-form-label">{{ get_phrase('Discount Period') }}</label>
                        <div class="position-relative position-relative">
                            <input type="text" value="{{ old('discount_period') }}" name="discount_period" class="form-control ol-form-control daterangepicker w-100" id="discount_period" placeholder="{{ get_phrase('Select date range of discount period') }}" aria-label="{{ get_phrase('Select date range of discount period') }}" required>
                        </div>
                    </div>

                    <div class="mb-3 pb-5">
                        <label for="discount_status_active" class="form-label ol-form-label">{{ get_phrase('Discount Status') }}</label>
                        <div class="eRadios d-flex align-items-center">
                            <div class="form-check">
                                <input type="radio" value="1" name="discount_status" class="form-check-input eRadioSuccess" id="discount_status_active" required="" checked>
                                <label for="discount_status_active" class="form-check-label">{{ get_phrase('Active') }}</label>
                            </div>

                            <div class="form-check ms-3">
                                <input type="radio" value="0" name="discount_status" class="form-check-input eRadioPrimary" id="discount_status_inactive" required="">
                                <label for="discount_status_inactive" class="form-check-label">{{ get_phrase('Inactive') }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ol-card">
                <div class="pt-3">
                    <h5 class="title fs-14px ps-3">{{ get_phrase('Banner & Thumbnail Section') }}</h5>
                </div>
                <div class="ol-card-body p-3 mb-5">
                    <div class="mb-3">
                        <label for="thumbnail" class="form-label ol-form-label">{{ get_phrase('Thumbnail') }}</label>
                        <input type="file" name="thumbnail[]" class="form-control ol-form-control" id="thumbnail" accept="image/*" multiple>
                    </div>

                    <div class="mb-3">
                        <label for="banner" class="form-label ol-form-label">{{ get_phrase('Banner') }}</label>
                        <input type="file" name="banner" class="form-control ol-form-control" id="banner" accept="image/*">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
