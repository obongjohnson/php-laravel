{if $product.extra.vendor_product_id}
    <input type="hidden"
           name="cart_products[{$key}][extra][company_id]"
           value="{$product.extra.company_id}"
    />
    <input type="hidden"
           name="cart_products[{$key}][extra][vendor_product_id]"
           value="{$product.extra.vendor_product_id}"
    />
{/if}

