{include file='app/templates/layout/header.tpl'}

<h1 class="text-center shadow-sm p-3 mb-0 bg-body rounded">Accede a tu Cuenta</h1>
<div class="container">
    <div class="p-4 bg-dark mt-3">
        <form class="g-3 mt-2" method="POST" action="validar">
            <div class="mb-4">
                <label for="nombre" class="form-label text-white fs-4">EMAIL</label>
                <input type="text" class="form-control" name="email" placeholder="@:" id="email">
            </div>
            <div class="mb-4">
                <label for="password" class="form-label text-white fs-4">PASSWORD</label>
                <input type="password" class="form-control" name="password" placeholder="Escribe tu contraseña:" id="password">
            </div>

            <button class="btn btn-primary">LOGIN</button>
        </form>
    </div>
</div>

{include file='app/templates/layout/footer.tpl'}