
    @csrf
    <input type="hidden" name="product_id" value="{{ $productId }}">
    <input type="hidden" name="unit_name" value="{{ $productUnitName }}">
    <input type="hidden" name="unit_id" value="{{ $productUnitId }}">
    <input type="hidden" name="rule_id" value="{{ $productRuleId}}">
    <button {{ $attributes->merge(['type' => 'button', 'class' => 'addtocart inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-900 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-900 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
        Add to Cart
    </button


