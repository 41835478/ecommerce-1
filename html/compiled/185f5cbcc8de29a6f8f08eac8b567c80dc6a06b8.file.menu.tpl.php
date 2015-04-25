<?php /* Smarty version Smarty-3.1.18, created on 2014-05-31 13:00:16
         compiled from "html/files/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6443432835389a830244342-59794436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '185f5cbcc8de29a6f8f08eac8b567c80dc6a06b8' => 
    array (
      0 => 'html/files/menu.tpl',
      1 => 1399204914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6443432835389a830244342-59794436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'v' => 0,
    'sub' => 0,
    'y' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5389a830c83784_97595558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5389a830c83784_97595558')) {function content_5389a830c83784_97595558($_smarty_tpl) {?><div class="main-menu-wrapper">
  <div class="wrapper overflow">
  <div id='cssmenu'>
   <ul>
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <li>
           <a href="#" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['display'];?>
</a>
           <?php if ($_smarty_tpl->tpl_vars['v']->value['sub']) {?>
             <?php $_smarty_tpl->tpl_vars['sub'] = new Smarty_variable($_smarty_tpl->tpl_vars['v']->value['sub'], null, 0);?>
             <ul>
               <?php  $_smarty_tpl->tpl_vars['y'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['y']->_loop = false;
 $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sub']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['y']->key => $_smarty_tpl->tpl_vars['y']->value) {
$_smarty_tpl->tpl_vars['y']->_loop = true;
 $_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['y']->key;
?>
          	       <li><a href="#" id="<?php echo $_smarty_tpl->tpl_vars['y']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['y']->value['display'];?>
</a></li>
               <?php } ?>
             </ul> 
           <?php }?>
        </li>
     <?php } ?>
    </ul>
  </div>
  </div>
</div><?php }} ?>
