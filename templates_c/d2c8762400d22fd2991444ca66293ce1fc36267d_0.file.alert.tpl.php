<?php
/* Smarty version 4.3.4, created on 2024-10-18 04:38:36
  from 'C:\xampp\htdocs\automotrizinfo\app\templates\alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6711ca2c048ae0_31125534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2c8762400d22fd2991444ca66293ce1fc36267d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\automotrizinfo\\app\\templates\\alert.tpl',
      1 => 1729183230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6711ca2c048ae0_31125534 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<div class="small-box text-center mt-5 p-5 alert alert-danger">
    <h1 class="fs-2">ALERTA!!</h1>
    <div class="fs-4">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
    <a href="home" class="btn btn-primary mt-5">VOLVER</a>
</div><?php }
}
