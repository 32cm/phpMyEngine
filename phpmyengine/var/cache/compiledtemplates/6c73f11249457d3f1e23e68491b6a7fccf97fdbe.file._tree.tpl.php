<?php /* Smarty version Smarty3-RC3, created on 2010-10-03 23:40:57
         compiled from "/home/desigency/web/dev/phpmyengine.dev/phpmyengine/usr/templates/controlpanel/sidebarmenu/_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9369865154ca8dc499fd151-25662171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c73f11249457d3f1e23e68491b6a7fccf97fdbe' => 
    array (
      0 => '/home/desigency/web/dev/phpmyengine.dev/phpmyengine/usr/templates/controlpanel/sidebarmenu/_tree.tpl',
      1 => 1286130745,
    ),
  ),
  'nocache_hash' => '9369865154ca8dc499fd151-25662171',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_cplink')) include '/home/desigency/web/dev/phpmyengine.dev/phpmyengine/lib/smartyplugins/modifier.cplink.php';
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
        <b><?php echo $_smarty_tpl->getVariable('name')->value;?>
</b>
            <?php $_template = new Smarty_Internal_Template("/sidebarmenu/_tree.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('tree',$_smarty_tpl->getVariable('href')->value); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
        <?php }else{ ?>
        <a href="<?php echo smarty_modifier_cplink($_smarty_tpl->getVariable('href')->value);?>
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