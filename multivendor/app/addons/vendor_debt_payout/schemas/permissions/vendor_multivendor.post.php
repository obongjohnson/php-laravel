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

defined('BOOTSTRAP') or die('Access denied');

if (isset($schema['controllers']['auth'])) {
    $schema['controllers']['auth']['permissions_blocked'] = true;
}

if (isset($schema['controllers']['index'])) {
    $schema['controllers']['index']['permissions_blocked'] = true;
}

$schema['controllers']['notifications']
    = isset($schema['controllers']['notifications'])
    ? $schema['controllers']['notifications']
    : array('permissions' => true);
$schema['controllers']['notifications']['permissions_blocked'] = true;

if (isset($schema['controllers']['profiles'])) {
    $schema['controllers']['profiles']['permissions_blocked'] = true;
}

if (isset($schema['controllers']['profiles']['modes']['manage'])) {
    $schema['controllers']['profiles']['modes']['manage']['permissions_blocked'] = false;
}

if (isset($schema['controllers']['companies']['modes'])) {
    $schema['controllers']['companies']['modes']['get_companies_list']
        = isset($schema['controllers']['companies']['modes']['get_companies_list'])
        ? $schema['controllers']['companies']['modes']['get_companies_list']
        : array('permissions' => true);
    $schema['controllers']['companies']['modes']['get_companies_list']['permissions_blocked'] = true;
}

return $schema;