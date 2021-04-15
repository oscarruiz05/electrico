@section('title','Principal')

@extends('layouts.app')

@section('content')
    <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(/assets/images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">
                    <div class="row row-mt-15em">
                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                                
                                <!-- 
                                <picture>
                                <source media="(min-width: 60px)"
                                        srcset="images/logo.png" />
                                <source media="(min-width: 30px) and (max-width: 60px)"
                                        srcset="images/logo.png" />
                                <source media="(max-width: 5px)"
                                        srcset="images/logo.png" />
                                <img src="images/logo.png" alt="logo" />
                                </picture>
                                -->	
                            <img src="{{asset('assets/images/logo.png')}}" alt="" width="100%" height="100%" />
                            <!-- <span class="intro-text-small">Solicita Un Electricista</a></span> -->	
                        </div>
                    
                        <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                            <div class="form-wrap">
                                <div class="tab">      
                                    <div class="tab-content">
                                        <div class="tab-content-inner active" data-content="signup">
                                            <h3 class="letrafull">Solicita  Electricista</h3>
                                            <form action="#">
                                                <div class="row form-group">


                                                    <div class="col-md-12">
                                                    <div class="options-container">
                                                        <label for="activities">Departamento</label>
                                                
                                                        <select id="lista_departamento" name="lista_departamento" class="form-control"></select>
                                                    </div>
                                                    </div>



                                                    <div class="col-md-12">
                                                        <label for="activities">Ciudad</label>
                                                    
                                                        <select id="municipios" name="municipios" class="form-control"></select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="date-start">Fecha</label>
                                                        <input type="text" id="date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="date-start">Hora</label>
                                                        <input type="text" id="time" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <input type="submit" class="btn btn-primary btn-block" value="Solicitar">
                                                    </div>
                                                </div>
                                            </form>	
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </header>

    <div class="gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2 class="cursive-font primary-color">Servicios</h2>
                    <p>Nuestro portafolio de servicios</p>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/img_1.jpg" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="images/img_1.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Instalaciones</h2>
                            <p>Servicios profesionales - en la puerta de su casa</p>
                            <p><span class="price cursive-font"></span></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/img_2.jpg" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="images/img_2.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Arreglos</h2>
                            <p>Servicios profesionales - en la puerta de su casa</p>
                            <p><span class="price cursive-font"></span></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/img_3.jpg" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="images/img_3.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Revision</h2>
                            <p>Servicios profesionales - en la puerta de su casa</p>
                            <p><span class="price cursive-font"></span></p>

                        </div>
                    </a>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/img_4.jpg" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="images/img_4.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Visitas Tecnicas</h2>
                            <p>Servicios profesionales - en la puerta de su casa</p>
                            <p><span class="price cursive-font"></span></p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/img_5.jpg" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="images/img_5.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Soporte</h2>
                            <p>Servicios profesionales - en la puerta de su casa</p>
                            <p><span class="price cursive-font"></span></p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/img_6.jpg" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="images/img_6.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Soporte</h2>
                            <p>Servicios profesionales - en la puerta de su casa</p>
                            <p><span class="price cursive-font"></span></p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div id="gtco-features">
        <div class="gtco-container">
            <div class="row">
                <select id="lista_departamento" name="lista_departamento" class="form-control"></select>
                
                <select id="municipios" name="municipios" class="form-control"></select>
            
                <!-- js/index.js -->
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2 class="cursive-font">Servi - Quienes Somos</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="ti-face-smile"></i>
                        </span>
                        <h3>Happy People</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="ti-thought"></i>
                        </span>
                        <h3>Creative Culinary</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="ti-truck"></i>
                        </span>
                        <h3>Food Delivery</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="gtco-counter" class="gtco-section">
        <div class="gtco-container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2 class="cursive-font primary-color">Nuestras Estadisticas</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row">
                
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="5" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Avg. Rating</span>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="43" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Food Types</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="32" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Chef Cook</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="1985" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Year Started</span>

                    </div>
                </div>
                    
            </div>
        </div>
    </div>

    <footer id="gtco-footer" role="contentinfo" style="background-image: url(/assets/images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row row-pb-md">

                

                
                <div class="col-md-12 text-center">
                    <div class="gtco-widget">
                        <h3>Contactenos</h3>
                        <ul class="gtco-quick-contact">
                            <li><a href="#"><i class="icon-phone"></i> +57 322 467 1853</a></li>
                            <li><a href="#"><i class="icon-mail2"></i> yeselectico@eservi.com</a></li>
                            <li><a href="#"><i class="icon-chat"></i>Chat</a></li>
                        </ul>
                    </div>
                    <div class="gtco-widget">
                        <h3>Redes Sociales</h3>
                        <ul class="gtco-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 text-center copyright">
                    <p><small class="block">&copy; 2021 - Todos Los Derechos Reservados</small> 
                        <small class="block">Desarrollado Por <a href="" target="_blank">Deco Software</a></small></p>
                </div>

            </div>

            

        </div>
    </footer>
@endsection