@extends('layouts.app')

@section('title', 'Formulario de Creación de Producto')

{{-- Los estilos se inyectarán en <head> de layouts/app.blade.php --}}
@section('styles')
<style>
    /* Estilos específicos del formulario */
    /* IMPORTANTE: Quitamos el estilo 'body' de aquí */

    .form-container {
        max-width: 600px;
        margin: 40px auto; /* Centra el formulario y le da espacio */
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
        text-transform: uppercase;
        font-size: 2em;
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
        border-color: #e55a00; /* Naranja más oscuro al enfocar */
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
        margin-top: 10px;
    }
    button:hover {
        background-color: #e55a00; /* Naranja más oscuro al pasar el ratón */
    }

    /* Estilos adicionales para el formulario */
    .form-group.error input,
    .form-group.error textarea,
    .form-group.error select {
        border-color: #dc3545; /* Rojo para errores */
    }
    .error-message {
        color: #dc3545;
        font-size: 0.9em;
        margin-top: 5px;
        display: block;
    }
    input[type="file"] {
        padding: 5px; /* Ajuste para el input file */
    }
    input[type="file"]::-webkit-file-upload-button {
        background-color: #ff6600;
        color: white;
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    input[type="file"]::-webkit-file-upload-button:hover {
        background-color: #e55a00;
    }
    button:disabled {
        background-color: #cccccc;
        cursor: not-allowed;
    }
    @media (max-width: 768px) {
        .form-container {
            margin: 20px;
            padding: 20px;
        }
        h1 {
            font-size: 1.5em;
        }
    }
</style>
@endsection

@section('content')
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
@endsection
