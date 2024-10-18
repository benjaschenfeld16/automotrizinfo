<?php
/* Smarty version 4.3.4, created on 2024-10-18 04:39:12
  from 'C:\xampp\htdocs\automotrizinfo\app\templates\form_autos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6711ca50aadb28_27572000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54e7f9841ba4b2493b1afb36393bcb691a3d28b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\automotrizinfo\\app\\templates\\form_autos.tpl',
      1 => 1729183230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6711ca50aadb28_27572000 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
<h1 class="text-center shadow-sm p-3 mb-0 bg-body rounded">Formulario para Autos</h1>
<div class="container">
    <div class="p-4 bg-light mt-3">
        <form class="g-3 mt-2" method="POST" action="addItem">
            <div class="mb-4">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre:">
            </div>
            <div class="mb-4">
               <textarea type="text" class="form-control" name="anio" placeholder="Anio:"></textarea>
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" name="motor" placeholder="Motor:">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" name="marca" placeholder="Marca:">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" name="caracteristicas" placeholder="Caracteristicas:">
            </div>
            <div class="mb-4">
                <label for="categoria" class="form-label fs-5">CATEGORIA</label>
                <select class="form-select" name="categoria">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>

            <button class="btn btn-badge text-bg-success">ENVIAR</button>
        </form>
    </div>
</div>
</section><?php }
}
