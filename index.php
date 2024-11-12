<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Soluciones Integrales JB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- ICONO DE LA PAGINA WEB -->
    <link rel="icon" href="assets/img/Logo-SolucionesWeb.svg">

    <!-- CSS -->
    <link href="assets/css/product-item-img.css" rel="stylesheet">

</head>

<!-- ProductManager -->
<?php include('controllers/ProductManager.php'); ?>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span
                            class="text-primary font-weight-bold border px-3 mr-1">
                            <!-- IMAGEN DEL LOGO DE SOLUCIONES INTEGRALES JB -->
                            <img src="assets/img/Logo-SolucionesWeb.svg" alt="" style="width:45px; height:45px;"></span>JB S.A.C.</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Busqueda de Productos">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="#" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="carrito.html" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <?php include('models/topbar-end.php'); ?>

    <!-- Navbar Start -->
    <?php include('models/navbar-star.php'); ?>

    <div class="container-fluid">
        <div class="row border-top px-xl-5">


            <!-- Menú principal de navegación -->
            <div class="col-lg-9" style="min-height: 70px">
                <nav class="navbar navbar-expand-lg bg-light navbar-light">
                    <div class="collapse navbar-collapse justify-content-end">
                        <div class="navbar-nav">
                            <a href="index.php" class="nav-item nav-link">Inicio</a>
                            <a href="" class="nav-item nav-link">Nosotros</a>
                            <a href="" class="nav-item nav-link">Conctactenos</a>
                            <a href="" class="nav-item nav-link">Productos</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- <hr> -->
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px;">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Productos</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Inicio</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Productos</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- ETIQUETAS -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">CATEGORIAS</h5>
                    <form>
                        <?php foreach ($categoriesOrganized as $category): ?>
                            <?php if (!empty($category['subcategories'])): ?>

                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link" data-toggle="dropdown"
                                        data-category-id="<?= htmlspecialchars($category['id']) ?>">
                                        <?= htmlspecialchars($category['name']) ?>
                                        <i class="fa fa-angle-down float-right mt-1"></i>
                                    </a>
                                    <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                        <?php foreach ($category['subcategories'] as $subcategory): ?>

                                            <a href="#" class="dropdown-item"
                                                data-subcategory-id="<?= htmlspecialchars($subcategory['id']) ?>">
                                                <?= htmlspecialchars($subcategory['name']) ?>
                                            </a>

                                        <?php endforeach; ?>
                                    </div>
                                </div>

                            <?php else: ?>

                                <a href="#" class="nav-item nav-link"
                                    data-category-id="<?= htmlspecialchars($category['id']) ?>">
                                    <?= htmlspecialchars($category['name']) ?>
                                </a>

                            <?php endif; ?>
                        <?php endforeach; ?>

                    </form>
                </div>
                </form>

                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">ETIQUETAS</h5>
                    <div class="labels-container">
                        <?php foreach ($labels as $label): ?>
                            <a href="#" class="btn mb-1 mr-1 label-filter"
                                data-label-id="<?= htmlspecialchars($label['id']) ?>"
                                style="background-color: <?= htmlspecialchars($label['color']) ?>; color: #fff;">
                                <?= htmlspecialchars($label['name']) ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">

                        </div>
                    </div>
                </div>
                
                 <!--aca estaba  -->
                 <!-- Título de la sección actual -->
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 id="current-section" class="text-center">Todos los productos</h2>
                    </div>
                </div>
                <!-- Spinner de carga -->
                <div id="loading-spinner" class="d-none text-center py-4">
                    <div class="spinner-border text-primary" role="status">
                    </div><br><br>
                    <span class="visually-hidden">Cargando...</span>
                </div>

            </div>
                <div id="product-container" class="row">
                </div>
        </div>

    </div>
    </div>
    </div>
    </div>
    <!-- Shop Product End -->
    </div>
    </div>
    </div>
    <!-- Shop Product End -->
    </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
    <?php include('views/footer.html'); ?>
    <!-- Footer End -->

    <!-- Modal Detalles Producto -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
        aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- El contenido del producto se insertará aquí -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!--FILTRADO DE PRODUCTOS -->
    <script src="assets/js/productos.js"></script>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>

    <!-- JS -->
    <script src="assets/js/index.js"></script>
    <script src="assets/js/labels.js"></script>
</body>

</html>
