<?php /* Smarty version Smarty3-RC3, created on 2010-10-02 20:40:41
         compiled from "/home/desigency/web/dev/phpmyengine.dev/phpmyengine/var/templates/default/menu/_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9316908374ca76089e8d472-14424261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba23ae86bd66e5edc5194c91f2e8a59b934b10e8' => 
    array (
      0 => '/home/desigency/web/dev/phpmyengine.dev/phpmyengine/var/templates/default/menu/_tree.tpl',
      1 => 1286037641,
    ),
  ),
  'nocache_hash' => '9316908374ca76089e8d472-14424261',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_sitelink')) include '/home/desigency/web/dev/phpmyengine.dev/phpmyengine/lib/smartyplugins/modifier.sitelink.php';
?><?php if ($_smarty_tpl->getVariable('tree')->value){?>
<ul>
<?php  $_smarty_tpl->tpl_vars["href"] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tree')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["href"]->key => $_smarty_tpl->tpl_vars["href"]->value){
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["href"]->key;
?>
    <?php if ($_smarty_tpl->getVariable('name')->value!="#seporator#"){?>
    <li>
        <?php if (is_array($_smarty_tpl->getVariable('href')->value)){?>
        <?php echo $_smarty_tpl->getVariable('name')->value;?>

            <?php $_template = new Smarty_Internal_Template("/menu/_tree.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('tree',$_smarty_tpl->getVariable('href')->value); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
        <?php }else{ ?>
        <a href="<?php echo smarty_modifier_sitelink($_smarty_tpl->getVariable('href')->value);?>
"><?php echo $_smarty_tpl->getVariable('name')->value;?>
</a>
        <?php }?>
    </li>
   <?php }else{ ?>
    <li class="seporator"></li>
   <?php }?>

<?php }} ?>
</ul>
<?php }?>