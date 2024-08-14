<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Página HTML</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1, h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <h1>Bienvenido a Mi Página</h1>

    <h2>Tabla de Datos</h2>
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Ciudad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ana</td>
                <td>25</td>
                <td>Madrid</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Carlos</td>
                <td>30</td>
                <td>Barcelona</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Lucía</td>
                <td>28</td>
                <td>Sevilla</td>
            </tr>
        </tbody>
    </table>

    <h2>Información</h2>
    <p>
        Esta es una página de ejemplo para demostrar cómo se puede estructurar una página HTML con varios elementos.
        Aquí puedes ver cómo se utilizan las tablas, listas y formularios.</p>

    <h2>Lista de Elementos</h2>
    <ul>
        <li>Elemento 1</li>
        <li>Elemento 2</li>
        <li>Elemento 3</li>
    </ul>

    <h2>Formulario de Contacto</h2>
    <form>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="5"></textarea>
        </div>
        <button type="submit" class="btn">Enviar</button>
    </form>

</body>
</html>
