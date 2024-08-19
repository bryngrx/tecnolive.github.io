
<!DOCTYPE html>
<html lang="en">

<head>
    <title>TecnoLive</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:lyzbethalbiter@gmail.com">lyzbethalbiter@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:52 1 56 5468 6404">52 1 56 5468 6404</a>
                </div>
                <div>
                    <a class="text-light" href="https://www.facebook.com/profile.php?id=61555688743403" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                TecnoLive
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contacto</a>
                        </li>
                    </ul>
                </div>
                    <a class="nav-icon position-relative text-decoration-none" href="registrate.php">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                    
                </div>
            </form>
        </div>
    </div>
    
    


    <!-- Start Content -->
<div class="container">
<br>
<div class="alert alert-success">
Mensaje...
<a href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
class="badge badge-success">VER CARRITO</a>
</div>
<style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        #search {
            width: 100%;
            padding: 10px;
            margin: 20px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .product {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }
        .product img {
            max-width: 100px;
            margin-right: 20px;
        }
        .product h2 {
            margin: 0 0 10px;
        }
        .product p {
            margin: 5px 0;
        }
        .product button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .product button:hover {
            background-color: #218838;
        }

    </style>
</head>
<body>
    <input type="text" id="search" placeholder="Buscar productos..." onkeyup="searchProducts()">
    <div id="product-list">
        <!-- Aquí se insertarán los productos -->
    </div>

    <script>
        const products = [
            {
                name: "Regadera electrica",
                price: 499,
                description: "RX-021, Regulacion de la temperatura del agua",
                img: "assets/img/regadera.jpg"
            },
            {
                name: "QIGO 1",
                price: 400,
                description: "Camara de seguridad aprueba de agua, Sin memoria",
                img: "assets/img/QIGO1.jpg"
            },
            {
                name: "QIGO 2",
                price: 950,
                description: "Para interiores y exteriores, Con memoria incluida",
                img: "assets/img/QIGO2.jpg"
            },
            {
                name: "QIGO 4",
                price: 400,
                description: "Con camara de 1080p y microfono IL265, Sin memoria",
                img: "assets/img/QIGO3.jpg"
            },
            {
                name: "CCTV",
                price: 1700,
                description: "Funcionamiento las 24 horas, Con instalacion $2,750",
                img: "assets/img/CCTV.jpg"
            },
            {
                name: "QIGO 5",
                price: 650,
                description: "Servicio las 24 horas con camara de 1080p, Con memoria",
                img: "assets/img/QIGO4.jpg"
            },
            {
                name: "Masajeador de pies",
                price: 1600,
                description: "Aire comprimido y vibracion, MAS DE 5 PROGRAMAS",
                img: "assets/img/MASAGEADOR.jpg"
            },
            {
                name: "Android TV box",
                price: 499,
                description: "Compatible con bluetooth y con USB 3.0, Android 13",
                img: "assets/img/REPRODUCTOR.jpg"
            },
            {
                name: "Colchon inflable",
                price: 1300,
                description: "Maxima comodidad, inflacion y desinflacion rapida en 30s",
                img: "assets/img/COLCHON.jpg"
            },
            {
                name: "MAGCUBE",
                price: 1360,
                description: "Camara compacta y facil de instalar, Con serviciio las 24hrs del dia",
                img: "assets/img/CAM1.jpg"
            },
            {
                name: "Proyector",
                price: 1700,
                description: "Maxima resolucion, Con control incluido",
                img: "assets/img/VIDEO.jpg"
            },
            {
                name: "QIGO MEMORIA",
                price: 100,
                description: "64g, Pro",
                img: "assets/img/MEMORIA.jpg"
            },
            {
                name: "QUIGO 6",
                price: 850,
                description: "Ahora se puede ver desde la comodidad de tu celular, Vigilancia las 24hrs del dia",
                img: "assets/img/CAM2.jpg"
            },
            {
                name: "Ansuelo de rana",
                price: 400,
                description: "Diseo de rana, Gancho de doble piel, plomo de metal",
                img: "assets/img/ANSUELO.jpg"
            },
            {
                name: "QIGO 7",
                price: 950,
                description: "Perfecta oara todos los espacio de tu hogar, 5mp",
                img: "assets/img/CAM3.jpg"
            },
            {
                name: "QIGO 8",
                price: 1100,
                description: "Compacta y facil de usar, Diseño negro y plateado",
                img: "assets/img/CAM4.jpg"
            }
        ];

        function searchProducts() {
            const query = document.getElementById('search').value.toLowerCase();
            const productList = document.getElementById('product-list');
            productList.innerHTML = '';

            products.forEach(product => {
                if (product.name.toLowerCase().includes(query) || product.description.toLowerCase().includes(query)) {
                    const productDiv = document.createElement('div');
                    productDiv.classList.add('product');
                    productDiv.innerHTML = `
                        <h2>${product.name}</h2>
                        <p>Precio: $${product.price} MXN</p>
                        <p>Descripcion: ${product.description}</p>
                        <img src="${product.img}" alt="${product.name}">
                        <button onclick="addToCart('${product.name}', ${product.price})">Agregar al carrito</button>
                    `;
                    productList.appendChild(productDiv);
                }
            });
        }

        function addToCart(name, price) {
            alert(`${name} agregado al carrito por $${price} MXN`);
        }

        // Inicializar la lista de productos
        searchProducts();
    </script>


    
<h1>Carrito de Compras</h1>
<div class="cart" id="cart">
    <p>Tu carrito está vacío.</p>
</div>
<button onclick="buyCart()">Comprar carrito</button>
<script>
        document.getElementById('verCarrito').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('cart').scrollIntoView({ behavior: 'smooth' });
        });

        function buyCart() {
            alert('Carrito comprado!');
        }
    </script>
<script>
    function buyCart() {
        document.getElementById('paypalForm').submit();
    }
</script>

<form id="paypalForm" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick" />
    <input type="hidden" name="hosted_button_id" value="XML4F6NMCP4BN" />
    <input type="hidden" name="currency_code" value="MXN" />
    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" title="PayPal es una forma segura y fácil de pagar en línea." alt="Comprar ahora" />
</form>
<script>
    const cart = [];

    function addToCart(product, price) {
        cart.push({ product, price });
        displayCart();
    }

    function removeFromCart(index) {
        cart.splice(index, 1);
        displayCart();
    }

    function displayCart() {
        const cartDiv = document.getElementById('cart');
        cartDiv.innerHTML = '';
        if (cart.length === 0) {
            cartDiv.innerHTML = '<p>Tu carrito está vacío.</p>';
        } else {
            let total = 0;
            cart.forEach((item, index) => {
                cartDiv.innerHTML += `<p>${item.product} - $${item.price} <button onclick="removeFromCart(${index})">Eliminar</button></p>`;
                total += item.price;
            });
            cartDiv.innerHTML += `<p>Total: $${total}</p>`;
        }
    }
    
    </script>
</body>>
<footer>              

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">TecnoLive</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="index.php">Inicio</a></li>
                        <li><a class="text-decoration-none" href="about.php">Acerca de</a></li>
                        <li><a class="text-decoration-none" href="shop.php">Productos</a></li>
                        <li><a class="text-decoration-none" href="contact.php">Contacto</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/profile.php?id=61555688743403"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>