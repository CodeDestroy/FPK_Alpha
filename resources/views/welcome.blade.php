<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- DBF3FC -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ООО "ФПК Альфа"</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico');}}" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background: #f2f2f2;">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand text-white" style="padding-top:0!important" href="#page-top"><img src="{{ asset('assets/img/alpha_logotyp.svg'); }}"/></a>
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" id="menuToggle" style = "padding: 0.2em!important; border: 2px solid white">
                    
                    <!-- <div class="sandwich"></div>
                    <div class="sandwich"></div>
                    <div class="sandwich"></div> -->
                    <!-- <i class="fas fa-bars"></i> -->
                    <img class="img-fluid mb-lg-0" src="{{ asset('assets/icons8-menu.svg'); }}"/>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item"><a class="nav-link text-dark" style="font-size:1.3em; font-weight: 400" href="#about">О нас</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" style="font-size:1.3em; font-weight: 400" href="#projects">Проекты</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" style="font-size:1.3em; font-weight: 400" href="#contacts">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-dark mb-4">О нас</h2>
                        <p class="text-dark ">
                            <!-- <ul>
                                <li>Поставка, настройка, техническое обслуживание и ремонт любого компьютерного, цифрового, офисного и прочего оборудования. </li>
                                <li>Поставка офисной, металлической и прочей мебели, канцтоваров, средств дезинфекции и прочих офисных принадлежностей.</li>
                                <li>Монтаж пожарно-охранной сигнализации. Установка систем пожарной безопасности, сигнализаций и систем видеонаблюдения. </li>
                                <li>Поставка, установка и настройка любого программного обеспечения.</li>
                                <li>Прокладка и администрирование сетей. Написание и внедрение БД. </li>
                                <li>Написание сайтов, интернет-магазинов, а также реализация online-проектов любой сложности. </li>
                                <li>CEO, продвижение и раскрутка в сети интернет. Проведение рекламных кампаний.</li>
                                <li>Изготовление любой рекламной продукции, POS-материалов, выставочных стендов, сувенирной и полиграфической продукции. </li>
                                <li>Разработка фирменного стиля, брендбука, логотипа.</li>
                            </ul> -->
                            ООО ФПК Альфа
                        </p>
                    </div>
                </div>
              <!--   <img class="img-fluid" src="assets/img/ipad.png" alt="..." /> -->
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects" style="background-color: #434343!important;">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="{{ asset('assets/img/bg-masthead.jpg'); }}" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left text-light">
                            <h4>Заголовок к тексту к картинке</h4>
                            <p class="text-light-50 mb-0">Текст к картинке</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('assets/img/demo-image-01.jpg')}}" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Заголовок</h4>
                                    <p class="mb-0 text-white-50">Текст к картинке</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('assets/img/demo-image-02.jpg')}}" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Заголовок</h4>
                                    <p class="mb-0 text-white-50">Текст к картинке</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
     <!--   <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                        
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">

                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>

                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>

                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- Contact-->
        <section class="contact-section" id="contacts" style="background: #f2f2f2">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Адрес</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">394036, Воронежская обл., г. Воронеж,<br> ул. Сакко и Ванцетти, дом 61</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">fpk-alfa@mail.ru</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Телефоны</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+7 473 2222 566<br>+7 920 2256 666</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div> -->
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer small text-center text-black" style="background: #f2f2f2"><div class="container px-4 px-lg-5">"ООО "ФПК Альфа"<br>Все права защищены</div></footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
