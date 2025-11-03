<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra de Computadores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff; /* Blanco */
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #ff6600; /* Naranja */
            margin-bottom: 40px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .computer-card {
            background-color: #ffffff;
            border: 2px solid #ff6600; /* Naranja */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .computer-card:hover {
            transform: translateY(-5px);
        }
        .computer-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .computer-info {
            padding: 20px;
        }
        .computer-title {
            font-size: 1.2em;
            font-weight: bold;
            color: #ff6600; /* Naranja */
            margin-bottom: 10px;
        }
        .computer-description {
            font-size: 0.9em;
            margin-bottom: 15px;
            line-height: 1.4;
        }
        .computer-price {
            font-size: 1.1em;
            font-weight: bold;
            color: #ff6600; /* Naranja */
            margin-bottom: 20px;
        }
        .buy-button {
            background-color: #ff6600; /* Naranja */
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .buy-button:hover {
            background-color: #e55a00; /* Naranja más oscuro */
        }
    </style>
</head>
<body>
    <h1>Muestra de Computadores</h1>
    <div class="container">
        <div class="computer-card">
            <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Dell XPS 13" class="computer-image">
            <div class="computer-info">
                <div class="computer-title">Dell XPS 13</div>
                <div class="computer-description">Laptop ultraportátil con pantalla InfinityEdge de 13.3 pulgadas, procesador Intel Core i7, 16GB RAM y SSD de 512GB. Ideal para profesionales en movimiento.</div>
                <div class="computer-price">$1,299</div>
                <button class="buy-button">Comprar</button>
            </div>
        </div>
        <div class="computer-card">
            <img src="https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="MacBook Air" class="computer-image">
            <div class="computer-info">
                <div class="computer-title">MacBook Air</div>
                <div class="computer-description">Laptop ligera con chip M1 de Apple, pantalla Retina de 13.3 pulgadas, 8GB RAM y SSD de 256GB. Rendimiento excepcional y batería de larga duración.</div>
                <div class="computer-price">$1,099</div>
                <button class="buy-button">Comprar</button>
            </div>
        </div>
        <div class="computer-card">
            <img src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="HP Pavilion" class="computer-image">
            <div class="computer-info">
                <div class="computer-title">HP Pavilion</div>
                <div class="computer-description">Computadora de escritorio con procesador AMD Ryzen 5, 16GB RAM, SSD de 1TB y tarjeta gráfica integrada. Perfecta para tareas diarias y gaming ligero.</div>
                <div class="computer-price">$799</div>
                <button class="buy-button">Comprar</button>
            </div>
        </div>
        <div class="computer-card">
            <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3adef?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Lenovo ThinkPad" class="computer-image">
            <div class="computer-info">
                <div class="computer-title">Lenovo ThinkPad X1 Carbon</div>
                <div class="computer-description">Laptop empresarial con pantalla de 14 pulgadas, procesador Intel Core i5, 8GB RAM y SSD de 256GB. Durabilidad y seguridad de nivel empresarial.</div>
                <div class="computer-price">$1,499</div>
                <button class="buy-button">Comprar</button>
            </div>
        </div>
        <div class="computer-card">
            <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Acer Aspire" class="computer-image">
            <div class="computer-info">
                <div class="computer-title">Acer Aspire 5</div>
                <div class="computer-description">Laptop asequible con pantalla de 15.6 pulgadas, procesador AMD Ryzen 3, 8GB RAM y HDD de 1TB. Excelente opción para estudiantes y uso cotidiano.</div>
                <div class="computer-price">$499</div>
                <button class="buy-button">Comprar</button>
            </div>
        </div>
        <div class="computer-card">
            <img src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Asus ROG" class="computer-image">
            <div class="computer-info">
                <div class="computer-title">Asus ROG Strix</div>
                <div class="computer-description">Laptop gaming con pantalla de 15.6 pulgadas, procesador Intel Core i7, 16GB RAM, SSD de 512GB y tarjeta gráfica NVIDIA RTX 3060. Para gamers exigentes.</div>
                <div class="computer-price">$1,799</div>
                <button class="buy-button">Comprar</button>
            </div>
        </div>
    </div>
</body>
</html>
