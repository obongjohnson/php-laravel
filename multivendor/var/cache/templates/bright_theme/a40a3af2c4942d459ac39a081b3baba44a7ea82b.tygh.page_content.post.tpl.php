<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 16:41:01
         compiled from "C:\laragon\www\multivendor\design\themes\responsive\templates\addons\tags\hooks\pages\page_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14147178025cb489ed098599-98035866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a40a3af2c4942d459ac39a081b3baba44a7ea82b' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\themes\\responsive\\templates\\addons\\tags\\hooks\\pages\\page_content.post.tpl',
      1 => 1555333711,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14147178025cb489ed098599-98035866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'page' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cb489ed14f8d4_45748901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb489ed14f8d4_45748901')) {function content_5cb489ed14f8d4_45748901($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_pages']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/tags/views/tags/components/tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"A",'object_id'=>$_smarty_tpl->tpl_vars['page']->value['page_id'],'object'=>$_smarty_tpl->tpl_vars['page']->value), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/tags/hooks/pages/page_content.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/tags/hooks/pages/page_content.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_pages']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/tags/views/tags/components/tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"A",'object_id'=>$_smarty_tpl->tpl_vars['page']->value['page_id'],'object'=>$_smarty_tpl->tpl_vars['page']->value), 0);?>

<?php }
}?><?php }} ?>
