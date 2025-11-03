<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Creación de Producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff; /* Blanco */
            color: #333;
            margin: 0;
            padding: 0;
        }
        .form-container {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background-color: #ffffff;
            border: 2px solid #ff6600; /* Naranja */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #ff6600; /* Naranja */
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            color: #ff6600; /* Naranja */
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #ff6600; /* Naranja */
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus,
        input[type="number"]:focus,
        textarea:focus,
        input[type="file"]:focus {
            border-color: #e55a00; /* Naranja más oscuro */
            outline: none;
        }
        textarea {
            resize: vertical;
        }
        button {
            background-color: #ff6600; /* Naranja */
            color: #ffffff;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        button:hover {
            background-color: #e55a00; /* Naranja más oscuro */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>FORMULARIO DE CREACIÓN DE PRODUCTO</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" required>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" name="brand" id="brand" required>
            </div>
            <button type="submit">Crear Producto</button>
        </form>
    </div>
</body>
</html>

