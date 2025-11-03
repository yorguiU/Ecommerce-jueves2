<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto - Dell XPS 13</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ffffff 0%, #f9f9f9 100%);
            color: #333;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        .header {
            background-color: #ff6600;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .header h1 {
            margin: 0;
            font-size: 2.5em;
            font-weight: 300;
        }
        .product-container {
            max-width: 1200px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        @media (min-width: 768px) {
            .product-container {
                flex-direction: row;
            }
        }
        .product-image-section {
            flex: 1;
            position: relative;
            overflow: hidden;
        }
        .product-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .product-image:hover {
            transform: scale(1.05);
        }
        @media (min-width: 768px) {
            .product-image {
                height: 500px;
            }
        }
        .product-info {
            flex: 1;
            padding: 40px;
            background: linear-gradient(135deg, #ffffff 0%, #fefefe 100%);
        }
        .product-title {
            font-size: 2.5em;
            font-weight: bold;
            color: #ff6600;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }
        .product-description {
            font-size: 1.1em;
            margin-bottom: 30px;
            color: #555;
        }
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .feature {
            background-color: #fff5f0;
            border: 1px solid #ff6600;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(255, 102, 0, 0.3);
        }
        .feature-icon {
            font-size: 2em;
            color: #ff6600;
            margin-bottom: 10px;
        }
        .feature-title {
            font-weight: bold;
            color: #ff6600;
            margin-bottom: 5px;
        }
        .feature-desc {
            font-size: 0.9em;
            color: #666;
        }
        .product-details {
            margin-bottom: 30px;
        }
        .product-details h3 {
            color: #ff6600;
            font-size: 1.5em;
            margin-bottom: 15px;
            border-bottom: 2px solid #ff6600;
            padding-bottom: 5px;
        }
        .product-details ul {
            list-style-type: none;
            padding: 0;
        }
        .product-details li {
            background-color: #f9f9f9;
            margin-bottom: 10px;
            padding: 10px 15px;
            border-left: 4px solid #ff6600;
            border-radius: 5px;
        }
        .product-price {
            font-size: 2em;
            font-weight: bold;
            color: #ff6600;
            margin-bottom: 30px;
            text-align: center;
        }
        .buy-button {
            background: linear-gradient(135deg, #ff6600 0%, #e55a00 100%);
            color: #ffffff;
            border: none;
            padding: 15px 40px;
            border-radius: 25px;
            font-size: 1.2em;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 102, 0, 0.4);
            display: block;
            margin: 0 auto;
        }
        .buy-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 102, 0, 0.6);
        }
        .footer {
            background-color: #ff6600;
            color: #ffffff;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
        .footer p {
            margin: 0;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Detalles del Producto</h1>
    </div>
    <div class="product-container">
        <div class="product-image-section">
            <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Dell XPS 13" class="product-image">
        </div>
        <div class="product-info">
            <div class="product-title">Dell XPS 13</div>
            <div class="product-description">
                El Dell XPS 13 redefine la portabilidad y el rendimiento en una laptop ultradelgada. Diseñada para profesionales creativos y usuarios exigentes, combina una pantalla InfinityEdge inmersiva con hardware de vanguardia para ofrecer una experiencia incomparable en movilidad y productividad.
            </div>
            <div class="features">
                <div class="feature">
                    <div class="feature-icon">💻</div>
                    <div class="feature-title">Pantalla InfinityEdge</div>
                    <div class="feature-desc">Visualización sin bordes para una experiencia inmersiva.</div>
                </div>
                <div class="feature">
                    <div class="feature-icon">⚡</div>
                    <div class="feature-title">Rendimiento Superior</div>
                    <div class="feature-desc">Procesador Intel Core i7 con 16GB RAM para multitarea fluida.</div>
                </div>
                <div class="feature">
                    <div class="feature-icon">🔋</div>
                    <div class="feature-title">Batería Duradera</div>
                    <div class="feature-desc">Hasta 12 horas de uso continuo sin necesidad de carga.</div>
                </div>
            </div>
            <div class="product-details">
                <h3>Especificaciones Técnicas</h3>
                <ul>
                    <li><strong>Pantalla:</strong> 13.3" FHD+ (1920 x 1200) InfinityEdge</li>
                    <li><strong>Procesador:</strong> Intel Core i7-1165G7</li>
                    <li><strong>Memoria RAM:</strong> 16GB LPDDR4x</li>
                    <li><strong>Almacenamiento:</strong> SSD 512GB PCIe</li>
                    <li><strong>Gráficos:</strong> Intel Iris Xe Graphics</li>
                    <li><strong>Batería:</strong> 52Wh, hasta 12 horas</li>
                    <li><strong>Peso:</strong> 1.2 kg</li>
                    <li><strong>Sistema Operativo:</strong> Windows 11 Home</li>
                </ul>
            </div>
            <div class="product-price">$1,299</div>
            <button class="buy-button">Comprar Ahora</button>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2023 Universidad Autónoma de Bucaramanga. Todos los derechos reservados.</p>
    </div>
</body>
</html>
