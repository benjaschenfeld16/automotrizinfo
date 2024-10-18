<?php
/* Smarty version 4.3.4, created on 2024-10-18 04:39:12
  from 'C:\xampp\htdocs\automotrizinfo\app\templates\form_categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6711ca50b5b4d9_19677484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04d996296df4a08cdea69fbb5cd74a41841978fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\automotrizinfo\\app\\templates\\form_categorias.tpl',
      1 => 1729183230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6711ca50b5b4d9_19677484 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
<h1 class="text-center shadow-sm p-3 mb-0 bg-body rounded">Formulario para categorias</h1>
<div class="container">
    <div class="p-4 bg-light mt-3">
        <form class="g-3 mt-2" method="POST" action="addCategoria">
            <div class="mb-4">
                <textarea type="text" class="form-control" name="nombre" placeholder="Nombre:"></textarea>
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" name="caracteristicas" placeholder="Caracteristicas:">
            </div>
            
            <button class="btn btn-badge text-bg-success">ENVIAR</button>
        </form>
    </div>
</div>
</section><?php }
}
