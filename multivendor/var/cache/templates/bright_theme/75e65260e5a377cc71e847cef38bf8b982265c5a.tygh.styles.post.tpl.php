<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 16:17:08
         compiled from "C:\laragon\www\multivendor\design\themes\responsive\templates\addons\social_buttons\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17576849785cb48454b30c29-79277266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75e65260e5a377cc71e847cef38bf8b982265c5a' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\themes\\responsive\\templates\\addons\\social_buttons\\hooks\\index\\styles.post.tpl',
      1 => 1555333710,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17576849785cb48454b30c29-79277266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cb48454ba2962_12005826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb48454ba2962_12005826')) {function content_5cb48454ba2962_12005826($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\function.style.php';
if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_style(array('src'=>"addons/social_buttons/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/social_buttons/responsive.less"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_style(array('src'=>"addons/social_buttons/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/social_buttons/responsive.less"),$_smarty_tpl);
}?><?php }} ?>
