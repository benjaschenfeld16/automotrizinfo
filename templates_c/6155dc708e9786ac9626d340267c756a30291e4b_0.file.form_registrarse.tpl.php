<?php
/* Smarty version 4.3.4, created on 2024-10-18 04:38:43
  from 'C:\xampp\htdocs\automotrizinfo\app\templates\form_registrarse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6711ca339d5651_95179009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6155dc708e9786ac9626d340267c756a30291e4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\automotrizinfo\\app\\templates\\form_registrarse.tpl',
      1 => 1729183230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/templates/layout/header.tpl' => 1,
    'file:app/templates/layout/footer.tpl' => 1,
  ),
),false)) {
function content_6711ca339d5651_95179009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:app/templates/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center shadow-sm p-3 mb-0 bg-body rounded">Registrarse</h1>
<div class="container">
    <div class="p-4 bg-dark mt-3">
        <form class="g-3 mt-2" method="POST" action="addCuenta">
            <div class="mb-4">
                <label for="email" class="form-label text-white fs-4">EMAIL</label>
                <input type="text" class="form-control" name="email" placeholder="Tu Email:" id="email">
            </div>
            <div class="mb-4">
                <label for="password" class="form-label text-white fs-4">PASSWORD</label>
                <input type="password" class="form-control" name="password" placeholder="Escribe tu contraseña:"
                    id="password">
            </div>
            <button class="btn btn-primary">REGISTRARSE</button>
        </form>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:app/templates/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
