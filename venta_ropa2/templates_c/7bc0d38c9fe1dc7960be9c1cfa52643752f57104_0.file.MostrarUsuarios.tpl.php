<?php
/* Smarty version 3.1.33, created on 2018-11-21 22:40:41
  from 'C:\xampp\htdocs\ventaRopa\paginaWeb2\venta_ropa2\templates\MostrarUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf5d0d99ca173_40631759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bc0d38c9fe1dc7960be9c1cfa52643752f57104' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ventaRopa\\paginaWeb2\\venta_ropa2\\templates\\MostrarUsuarios.tpl',
      1 => 1542829756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf5d0d99ca173_40631759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>

    <div class="container">
      <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>

                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['usuario']->value['pass'];?>
 <?php if ($_smarty_tpl->tpl_vars['usuario']->value['admin'] == 0) {?> Es usuario  <a href="permitir/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
/1">Conceder permisos</a> <?php } else { ?> Es adminitrador  <a href="permitir/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
/0">Quitar permisos</a><?php }?></li>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
