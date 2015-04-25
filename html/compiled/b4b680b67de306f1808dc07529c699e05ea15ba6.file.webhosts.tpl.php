<?php /* Smarty version Smarty-3.1.18, created on 2014-06-02 16:35:17
         compiled from "html/files/webhosts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11262085995389ca8511daa9-42795786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4b680b67de306f1808dc07529c699e05ea15ba6' => 
    array (
      0 => 'html/files/webhosts.tpl',
      1 => 1401709308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11262085995389ca8511daa9-42795786',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5389ca8519a972_36541185',
  'variables' => 
  array (
    'webhosts' => 0,
    'webhost' => 0,
    'plans' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5389ca8519a972_36541185')) {function content_5389ca8519a972_36541185($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <div class="header_form2" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Webhosts List</div>
      
    </div>
     <div class="pers_title">
        <ul>
            <li style="width:110px">Webhost User</li>
            <li style="width:110px">Host Plan</li>
            <li style="width:110px">Start date</li>
            <li style="width:110px">End date</li>
            <li style="width:110px">Action</li>
        </ul>
    </div>   
    <?php  $_smarty_tpl->tpl_vars['webhost'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['webhost']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['webhosts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['webhost']->key => $_smarty_tpl->tpl_vars['webhost']->value) {
$_smarty_tpl->tpl_vars['webhost']->_loop = true;
?>   
        <div class="pers_body">
        <ul>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['webhost']->value['name'];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->tpl_vars['webhost']->value['host_plan']];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['webhost']->value['start_date'];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['webhost']->value['end_date'];?>
</li>
            <li style="width:110px"><div class="foot_icon2" style="margin-left:40px;float:left"></div><div class="dele_cont" style="margin-left:5px;float:left"></div></li>
        </ul>
    </div>
    <?php } ?>
</div> <?php }} ?>
