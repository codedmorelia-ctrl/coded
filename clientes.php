<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>


<style>
    :root {
        --color-naranja: #ff7a00;
        --color-rojo: #ff1e1e;
        --color-gris: #4a5f73;
        --color-negro: #0d0d0d;
        --color-blanco: #ffffff;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Segoe UI", Tahoma, sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    /*    background: linear-gradient(135deg, var(--color-naranja), var(--color-rojo)); */
    }

    form {
        background: rgba(13, 13, 13, 0.85);
        backdrop-filter: blur(10px);
        padding: 40px 30px;
        border-radius: 16px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.3);
        width: 90%;
        max-width: 350px;
        display: flex;
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }

    input {
        padding: 14px;
        border-radius: 10px;
        border: 1px solid var(--color-gris);
        outline: none;
        font-size: 16px;
        background: transparent;
        color: var(--color-blanco);
        transition: 0.3s;
    }

    input::placeholder {
        color: #bbb;
    }

    input:focus {
        border-color: var(--color-naranja);
        box-shadow: 0 0 10px rgba(255,122,0,0.5);
    }

    button {
        padding: 14px;
        border-radius: 10px;
        border: none;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        background: linear-gradient(90deg, var(--color-naranja), var(--color-rojo));
        color: var(--color-blanco);
        transition: 0.3s;
    }

    button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(255, 30, 30, 0.5);
    }

    @media (max-width: 480px) {
        form {
            padding: 30px 20px;
        }
    }
</style>
</head>

<body>

<div style="display:flex; flex-direction:column; align-items:center;">

<h2 style="color: var(--color-naranja); text-align:center; margin-bottom:20px;">
    Ingresa tu numero de cliente
</h2>

<form method="POST" action="login.php">
    <?php if (isset($_GET['error'])): ?>
        <p style="color:#ff1e1e; font-size:14px;">Cliente no encontrado</p>
    <?php endif; ?>
    <input type="text" name="numero_acceso" placeholder="Ingresa tu número" value="">
    <button type="submit">Entrar</button>
</form>

</div>

<script>
    const params = new URLSearchParams(window.location.search);
    if (params.get("error")) {
        document.querySelector("input[name='numero_acceso']").value = "";
    }
</script>

</body>

</html>