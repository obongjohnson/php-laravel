<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

use Tygh\Registry;

defined('BOOTSTRAP') or die('Access denied');

/** @var array $schema */

require_once Registry::get('config.dir.addons') . '/master_products/schemas/block_manager/blocks.functions.php';

$schema['products']['content']['items']['fillings']['master_products.vendor_products_filling'] = [
    'params' => [
        'sort_by'                    => 'price',
        'merge_with_master_products' => false,
        'product_type'               => '',
        'is_vendor_products_list'    => true,
        'request'                    => [
            'parent_product_id' => '%PRODUCT_ID%',
            'product_data'      => '%PRODUCT_DATA%',
        ],
    ],
];

$schema['main']['cache_overrides_by_dispatch']['products.view']['request_handlers'][] = 'company_id';

return $schema;
