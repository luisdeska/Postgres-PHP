<!DOCTYPE html>
<html lang="es">
<head>
        <title>INVITAB | INICIAR SESION</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        
    </head>
<body>
    
    <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Invitab</span>
            </div>
        </nav>
        <div class="text-center row align-items-center justify-content-center vh-100 container-fluid">
            <form action="javascript:void(0);">
                <div>
                    <h1>INICIAR SESION</h1>
                    <h5>Rellena los campos para iniciar sesion</h5>
                </div>
            <div class="mt-2">  
                <label for="email" class="form-label p-1">Correo eléctronico</label><input class="form-control-sm" type="email" name="email" id="email">
            </div>
            <div class="mt-2">
                <label for="pass" id="lbl" class="form-label p-1">Contraseña</label><input class="form-control-sm" type="password" name="pass" id="pass">
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-outline-dark">Entrar</button>
            </div>
            <div class="form-text">
                <p>Recuerda ingresar tus datos correctamente</p>
            </div>
            
        </form>

        <table class="table" style="width: 400px;">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody id="tbody"></tbody>
        </table>
        </div>




        <script src="../assets/code.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
</body>
</html>