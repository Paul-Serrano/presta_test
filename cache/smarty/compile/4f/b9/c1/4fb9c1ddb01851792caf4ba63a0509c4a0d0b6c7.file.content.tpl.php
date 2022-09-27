<?php /* Smarty version Smarty-3.1.19, created on 2022-09-27 17:33:37
         compiled from "C:\xampp\htdocs\presta_test\admin770gzgmzk\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:961632ce7af04cbe1-58488316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb9c1ddb01851792caf4ba63a0509c4a0d0b6c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta_test\\admin770gzgmzk\\themes\\default\\template\\content.tpl',
      1 => 1664291714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '961632ce7af04cbe1-58488316',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_632ce7af051fc0_87884653',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_632ce7af051fc0_87884653')) {function content_632ce7af051fc0_87884653($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
