<?php /* Smarty version Smarty3-RC3, created on 2010-10-08 15:28:51
         compiled from "/home/desigency/web/dev/phpmyengine.dev/phpmyengine/opt/articles/usr/templates/controlpanel/articles/statuschanged.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2939236544caf007394b9c8-56564411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30ae849efedb6c4d9911875b2727c9f3c8bed820' => 
    array (
      0 => '/home/desigency/web/dev/phpmyengine.dev/phpmyengine/opt/articles/usr/templates/controlpanel/articles/statuschanged.tpl',
      1 => 1286529939,
    ),
  ),
  'nocache_hash' => '2939236544caf007394b9c8-56564411',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
    <?php if ($_smarty_tpl->getVariable('_messages')->value){?>
        <?php $_template = new Smarty_Internal_Template("_messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <?php }?>