<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 16:17:31
         compiled from "C:\laragon\www\multivendor\design\themes\responsive\templates\addons\discussion\hooks\companies\data_block.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:905029745cb4846b721881-44244109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5e30276668134b458ac69530f57aedc1bb485a5' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\themes\\responsive\\templates\\addons\\discussion\\hooks\\companies\\data_block.pre.tpl',
      1 => 1555333747,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '905029745cb4846b721881-44244109',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_rating' => 0,
    'addons' => 0,
    'company' => 0,
    'average_rating' => 0,
    'show_posts_count' => 0,
    'show_links' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cb4846b8bb5b8_04083508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb4846b8bb5b8_04083508')) {function content_5cb4846b8bb5b8_04083508($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('reviews','reviews'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['show_rating']->value&&in_array($_smarty_tpl->tpl_vars['addons']->value['discussion']['company_discussion_type'],array('B','R'))) {?>

    <?php if ($_smarty_tpl->tpl_vars['company']->value['average_rating']) {?>
        <?php $_smarty_tpl->tpl_vars['average_rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['company']->value['average_rating'], null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['company']->value['discussion']['average_rating']) {?>
        <?php $_smarty_tpl->tpl_vars['average_rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['company']->value['discussion']['average_rating'], null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['average_rating']->value>0) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['average_rating']->value),'link'=>"companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])."&selected_section=discussion#discussion"), 0);?>

    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['company']->value['discussion']['posts_count']&&(($tmp = @$_smarty_tpl->tpl_vars['show_posts_count']->value)===null||$tmp==='' ? true : $tmp)) {?>
        <?php if ($_smarty_tpl->tpl_vars['show_links']->value) {?><a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])."&selected_section=discussion#discussion"), ENT_QUOTES, 'UTF-8');?>
" class="ty-discussion__review-quantity"><?php } else { ?><p><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['discussion']['posts_count'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['company']->value['discussion']['posts_count']));
if ($_smarty_tpl->tpl_vars['show_links']->value) {?></a><?php } else { ?></p><?php }?>
    <?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/companies/data_block.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/companies/data_block.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_rating']->value&&in_array($_smarty_tpl->tpl_vars['addons']->value['discussion']['company_discussion_type'],array('B','R'))) {?>

    <?php if ($_smarty_tpl->tpl_vars['company']->value['average_rating']) {?>
        <?php $_smarty_tpl->tpl_vars['average_rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['company']->value['average_rating'], null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['company']->value['discussion']['average_rating']) {?>
        <?php $_smarty_tpl->tpl_vars['average_rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['company']->value['discussion']['average_rating'], null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['average_rating']->value>0) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['average_rating']->value),'link'=>"companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])."&selected_section=discussion#discussion"), 0);?>

    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['company']->value['discussion']['posts_count']&&(($tmp = @$_smarty_tpl->tpl_vars['show_posts_count']->value)===null||$tmp==='' ? true : $tmp)) {?>
        <?php if ($_smarty_tpl->tpl_vars['show_links']->value) {?><a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])."&selected_section=discussion#discussion"), ENT_QUOTES, 'UTF-8');?>
" class="ty-discussion__review-quantity"><?php } else { ?><p><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['discussion']['posts_count'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['company']->value['discussion']['posts_count']));
if ($_smarty_tpl->tpl_vars['show_links']->value) {?></a><?php } else { ?></p><?php }?>
    <?php }?>
<?php }?>
<?php }?><?php }} ?>
