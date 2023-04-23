<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link: Css -->
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/product.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">

    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Link: Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link: Owl-Carousel -->
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">


    <title>StoreMaxx.Vn</title>
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <div id="top-header">
                <div class="container">
                    <div class="row">
                        <div class="top-header col-12 d-flex ai-center jc-between">
                            <div class="top-header__time">
                                <i class="far fa-clock"></i>
                                <span class="top-header__time__text">Thứ 2 - CN: 8:00 am-21:30 pm</span>
                            </div>

                            <div class="top-header__mail">
                                <i class="far fa-envelope"></i>
                                <span class="top-header__mail__text">suport.stroremax.vn</span>
                            </div>

                            <div class="top-header__phone">
                                <i class="fas fa-phone-alt"></i>
                                <span class="top-header__phone__text">1900.1234</span>
                            </div>
                            <div>
                                    <a href="?page=login" class="text-white text-decoration-none">
                                        <i class="fa-solid fa-lock"></i>
                                        <span>Đăng Nhập</span>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="middle-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 d-flex ai-center jc-between">
                            <a href="?page=home" class="logo d-block">
                                <img src="./assets/images/logo2.jpg" class="logo__img" alt="LOGO" title="LOGO" width="60px" >
                            </a>

                            <ul id="main-menu" class="ai-center jc-between">
                                <li class="main-menu__item">
                                    <a href="?page=home">trang chủ</a>
                                </li>
                                <li class="main-menu__item">
                                    <a href="#tivi">Tivi</a>
                                </li>
                                <li class="main-menu__item">
                                    <a href="#tivi">Điều hòa nhiệt độ</a>
                                </li>
                                <li class="main-menu__item">
                                    <a href="#sp_new">Thời trang <i class="fas fa-chevron-down"></i></a>
                                    <ul class="sub-main-menu">
                                        <li class="sub-main-menu__item">
                                            <a href="#sp_new">Túi xách tay nữ</a>
                                        </li>

                                        <li class="sub-main-menu__item">
                                            <a href="#sp_new">Áo thun</a>
                                        </li>

                                        <li class="sub-main-menu__item">
                                            <a href="#sp_new">Quần</a>
                                        </li>

                                        <li class="sub-main-menu__item">
                                            <a href="#sp_new">Giày</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="main-menu__item">
                                    <a href="#tivi">Giặt sấy</a>
                                </li>
                                <li class="main-menu__item">
                                    <a href="#tivi">đồng hồ</a>
                                </li>
                                <li class="main-menu__item">
                                    <a href="?page=blog">blog</a>
                                </li>
                                <li class="main-menu__item">
                                    <a href="#tivi">liên hệ</a>
                                </li>
                            </ul>

                            <div class="search-bought">
                                <a href="#" data-toggle="tooltip" title="Bạn muốn tìm kiếm gì đó?"><i
                                        class="fas fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Giỏ hàng">
                                    <i class="fas fa-cart-arrow-down" data-toggle="modal" data-target="#demo-modal"></i>
                                </a>
                                <!-- Kích hoạt -->

                                <!-- Cấu trúc Modal -->
                                <div class="modal fade" id="demo-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Sản phẩm đã thêm</h5>
                                                <button class="close" data-dismiss="modal">
                                                    <span class="x">&times;</span>
                                                </button>
                                            </div>
                                            <!-- end: Modal-header -->

                                            <div class="modal-body">
                                                <div class="card bg">
                                                    <div class="row">
                                                        <a href="" class="col-md-4">
                                                            <img src="./assets/images/product-2.png" alt=""
                                                                class="card-img img-hover">
                                                        </a>
                                                        <div class="col-md-8">
                                                            <p class="product-new__start-comment">
                                                                <span class="start">
                                                                    <i class="fas fa-star text-warning"></i>
                                                                    <i class="fas fa-star text-warning"></i>
                                                                    <i class="fas fa-star text-warning"></i>
                                                                    <i class="fas fa-star text-warning"></i>
                                                                    <i class="fas fa-star-half-alt text-warning"></i>
                                                                </span>
                                                                <span class="comment">(8 nhận xét)</span>
                                                            </p>
                                                            <p class="product-new__name">
                                                                <a href="#">Túi xách hiệu JAKA Nhật Bản</a>
                                                            </p>
                                                            <span class="product-new__price">1.200.000đ</span>
                                                            
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mt-4 bg">
                                                    <div class="row">
                                                        <a href="" class="col-md-4">
                                                            <img src="./assets/images/product-1.png" alt=""
                                                                class="card-img img-hover">
                                                        </a>
                                                        <div class="col-md-8">
                                                            <p class="product-new__start-comment">
                                                                <span class="start">
                                                                    <i class="fas fa-star text-warning"></i>
                                                                    <i class="fas fa-star text-warning"></i>
                                                                    <i class="fas fa-star text-warning"></i>
                                                                    <i class="fas fa-star text-warning"></i>
                                                                    <i class="fas fa-star-half-alt text-warning"></i>
                                                                </span>
                                                                <span class="comment">(8 nhận xét)</span>
                                                            </p>
                                                            <p class="product-new__name">
                                                                <a href="#">Túi xách hiệu JAKA Nhật Bản</a>
                                                            </p>
                                                            <span class="product-new__price">1.200.000đ</span>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <!-- end: Modal-body -->

                                            <div class="modal-footer">
                                                <a  href="?page=checkout" class="btn btn-primary">Thanh Toán</a>
                                            </div>
                                            <!-- end: Modal-footer -->
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <i class="navbar-responsive fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>


            <ul id="responsive-menu" class="ai-center jc-between">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <li class="responsive-menu__item">
                                <a href="?page=home" class="d-inline-block">trang chủ</a>
                            </li>
                            <li class="responsive-menu__item">
                                <a href="#tivi" class="d-inline-block">Tivi</a>
                            </li>
                            <li class="responsive-menu__item">
                                <a href="#tivi" class="d-inline-block">Điều hòa nhiệt độ</a>
                            </li>
                            <li class="responsive-menu__item">
                                <a href="#sp_new" class="d-inline-block">Thời trang</a>
                                <i class="fas fa-chevron-down arrow-down"></i>
                                <ul class="sub-responsive-menu">
                                    <li class="sub-responsive-menu__item">
                                        <a href="#sp_new" class="d-inline-block">Túi xách tay nữ</a>
                                    </li>

                                    <li class="sub-responsive-menu__item">
                                        <a href="#sp_new" class="d-inline-block">Áo thun</a>
                                    </li>

                                    <li class="sub-responsive-menu__item">
                                        <a href="#sp_new" class="d-inline-block">Quần</a>
                                    </li>

                                    <li class="sub-responsive-menu__item">
                                        <a href="#sp_new" class="d-inline-block">Giày</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="responsive-menu__item">
                                <a href="#tivi" class="d-inline-block">Giặt sấy</a>
                            </li>
                            <li class="responsive-menu__item">
                                <a href="#tivi" class="d-inline-block">đồng hồ</a>
                            </li>
                            <li class="responsive-menu__item">
                                <a href="?page=blog" class="d-inline-block">blog</a>
                            </li>
                            <li class="responsive-menu__item">
                                <a href="#tivi" class="d-inline-block">liên hệ</a>
                            </li>
                        </div>
                    </div>
                </div>
            </ul>

        </div>