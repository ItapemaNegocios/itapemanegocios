@extends('front.master.main')

@section('master')
    <div class="section large transparent dark text-center" style="background-image: url('{{ asset('assets/images/background01.jpg') }}');">
        <div class="inner">
            <div class="container">
                <h1>Procure tudo em Itapema.</h1>
                <p class="lead">Tudo que você procura em <b>Itapema</b> você encontra aqui.</p>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="form-group">
                                <input type="search" name="" placeholder="Procure pelo nome da empresa">
                                <i class="pe-7s-world"></i>
                            </div>
                        </div>
                    </div>
                    <button class="button">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="section light">
        <div class="inner">
            <div class="container">
                <h2 class="text-center">O que <b style="color: red;">você</b> tem interesse em fazer?
                    <small>Explore algumas das melhores dicas de toda a cidade de nossos parceiros e amigos.</small>
                </h2>
                <div class="row">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-md-{{ ($i == 2 || $i == 3 ? '6' : '3') }} col-sm-6">
                            <a href="" class="category-box" style="background-image: url('{{ asset('assets/images/category01.jpg') }}');">
                                <div class="inner">
                                    <img src="{{ asset('assets/images/category-icon01.png') }}" alt="icon">
                                    <span class="number">8</span>
                                    <span class="title">Cinema</span>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
                <div class="text-center">
                    <a href="" class="button">Todas Empresas</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section white">
        <div class="inner">
            <div class="container-fluid">
                <h2 class="text-center">Melhores coisas para fazer na cidade
                    <small>Explore algumas das melhores dicas de toda a cidade de nossos parceiros e amigos.</small>
                </h2>
                <div class="directory-slider">
                    @for ($item1 = 1; $item1 < 35; $item1++)
                        <div class="directory-item">
                            <img src="{{ asset('assets/images/directory-slider01.jpg') }}" alt="bg" class="img-responsive">
                            <div class="overlay"></div>
                            <div class="rating">4.0</div>
                            <a href="" class="wishlist"><img src="{{ asset('assets/images/directory-heart.png') }}" alt="wishlist"></a>
                            <div class="content">
                                <h3><a href="">Not Just Coffee</a></h3>
                                <p>Suspendisse tristique orci justo</p>
                                <div class="location">
                                    <img src="{{ asset('assets/images/directory-location.png') }}" alt="location">
                                    Thomas St , NewYork
                                </div>
                            </div>
                            <div class="category">
                                <a href=""><img src="{{ asset('assets/images/directory-category-food.png') }}" alt="food"></a>
                                <a href=""><img src="{{ asset('assets/images/directory-category-drink.png') }}" alt="drink"></a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <div class="section light transparent" style="background-image: url('{{ asset('assets/images/background02.jpg') }}');">
        <div class="inner">
            <div class="container">
                <h2 class="text-center">Como funciona
                    <small>Descubra como o <b>Itapema Negócios</b> pode ajudar você a encontrar tudo o que deseja.</small>
                </h2>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="services">
                            <img src="{{ asset('assets/images/services-icon01.png') }}" alt="icon" class="img-responsive center-block">
                            <h3>Escolha<br> o que fazer</h3>
                            <p>À procura de um hotel acolhedor para ficar, um restaurante para comer, um museu para visitar ou um shopping para fazer compras?</p>
                            <div class="process"><i class="pe-7s-angle-right-circle"></i></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services">
                            <img src="{{ asset('assets/images/services-icon02.png') }}" alt="icon" class="img-responsive center-block">
                            <h3>Encontrar <br> O que você quer</h3>
                            <p>Pesquise e filtre centenas de empresas, leia comentários, explore fotos e encontre o local perfeito.</p>
                            <div class="process"><i class="pe-7s-angle-right-circle"></i></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services">
                            <img src="{{ asset('assets/images/services-icon03.png') }}" alt="icon" class="img-responsive center-block">
                            <h3>Explore Lugares incríveis</h3>
                            <p>Vá e divirta-se ou faça uma reserva diretamente na página da empresa. Tudo isso, graças ao Itapema Negócios</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section dark">
        <div class="inner">
            <div class="container">
                <h2 class="text-center">Compartilhe suas experiências
                    <small>Navegue pelos artigos e dicas mais recentes do nosso blog.</small>
                </h2>
                <div class="row">
                    <?php for ($item2 = 0; $item2 < 3; $item2++): ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="blog-post quote">
                            <img src="{{ asset('assets/images/basic_plan_bg.jpg') }}" alt="image" class="img-responsive">
                            <div class="overlay"></div>
                            <div class="avatar"><img src="{{ asset('assets/images/blog-author01.jpg') }}" alt="author"></div>
                            <div class="content">
                                <p>por Breno Rodrigues</p>
                                <h3><a href="">“Conheça o canto da praia”</a></h3>
                                <div class="meta">09 Dezembro, 2018 - <a href="">Praias</a></div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
                <div class="blog-view-more"><a href="" class="button">Ver Todos</a></div>
            </div>
        </div>
    </div>
    <div class="section light">
        <div class="inner">
            <div class="container">
                <h2 class="text-center">Cupons de descontos
                    <small>Assine nossa newsletter e recebe cupons de descontos para almoços e promoções.</small>
                </h2>
                <form method="post" action="" class="newsletter-form">
                    <input type="email" id="mce-EMAIL" name="email" placeholder="seuemail@gmail.com">
                    <button id="mc-embedded-subscribe" name="subscribe" class="button">Inscrever</button>
                </form>
            </div>
        </div>
    </div>
@endsection