<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 16:18:04
         compiled from "C:\laragon\www\multivendor\design\themes\responsive\templates\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5029837305cb4848c10dea5-82904474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b733209e64e5af92526bb6a5070b2b9868bfa9f7' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\themes\\responsive\\templates\\views\\index\\index.tpl',
      1 => 1555333688,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5029837305cb4848c10dea5-82904474',
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
  'unifunc' => 'content_5cb4848c16e6e8_96510762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb4848c16e6e8_96510762')) {function content_5cb4848c16e6e8_96510762($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/index/index.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/index/index.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
}?><?php }} ?>
