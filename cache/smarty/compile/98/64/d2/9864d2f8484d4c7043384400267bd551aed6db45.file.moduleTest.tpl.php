<?php /* Smarty version Smarty-3.1.19, created on 2022-09-26 23:14:35
         compiled from "C:\xampp\htdocs\presta_test\modules\moduleTest\views\templates\hook\moduleTest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1703663321151496474-24712526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9864d2f8484d4c7043384400267bd551aed6db45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta_test\\modules\\moduleTest\\views\\templates\\hook\\moduleTest.tpl',
      1 => 1664226301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1703663321151496474-24712526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_633211514d5285_86639648',
  'variables' => 
  array (
    'title' => 0,
    'descirption' => 0,
    'number' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633211514d5285_86639648')) {function content_633211514d5285_86639648($_smarty_tpl) {?><div class="block test">
   <h4><?php echo smartyTranslate(array('s'=>'Testing Module','mod'=>'test'),$_smarty_tpl);?>
</h4>
   <div class="block_content">
       <p class="test"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
       <p class="test"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['descirption']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
       <p class="test"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
   </div>
</div><?php }} ?>
