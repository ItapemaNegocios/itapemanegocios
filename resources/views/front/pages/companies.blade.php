@extends('front.master.main')

@section('master')
    <style>
        body {
            background-color: #f7f7f7;
        }

        .header.fixed {
            background-color: #172434;
        }

        .fullscreen-section {
            margin-top: 170px;
        }
    </style>

    <div class="fullscreen-section">
        <div class="container-fluid">
            <div class="inner">
                <div class="container-fluid">
                    <div class="directory-filters">
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select class="selectpicker" data-live-search="true">
                                            <option>Escolha uma cidade</option>
                                            <option value="">Itapema</option>
                                            <option value="">Balneário Camboriú</option>
                                            <option value="">Porto Belo</option>
                                            <option value="">Bombinhas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select class="selectpicker" data-live-search="true">
                                            <option>Escolha um bairro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select class="selectpicker" data-live-search="true">
                                            <option>Ramo de atuação</option>
                                            <option value="">Restaurante</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select name="preference[]" class="selectpicker" data-live-search="true" multiple>
                                            <option value="" selected>Preferencias</option>
                                            <option value="">Aceita Cartão de Crédito</option>
                                            <option value="">Estacionamento</option>
                                            <option value="">WI-FI</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="directory-tags">
                        <div class="tag">Aceita Cartão de Crédito<a href=""><i class="pe-7s-close"></i></a></div>
                        <div class="tag">Estacionamento<a href=""><i class="pe-7s-close"></i></a></div>
                        <div class="tag">WI-FI<a href=""><i class="pe-7s-close"></i></a></div>
                    </div>
                    <div class="directory-list-info">
                        <p>Mostrando todas empresas que "Aceita Cartão de Crédito", "Estacionamento", "WI-FI".</p>
                        <p class="results">79 Resultados - <a href="">Resetar</a></p>
                    </div>
                </div>
                <div class="directory-list">
                    @for ($i = 0; $i < 12; $i++)
                        <div class="col-sm-3">
                            <div class="directory-item">
                                <img src="{{ asset('assets/images/directory-slider01.jpg') }}" alt="bg" class="img-responsive">
                                <div class="overlay"></div>
                                <div class="rating">4.0</div>
                                <a href="" class="wishlist"><img src="{{ asset('assets/images/directory-heart.png') }}" alt="wishlist"></a>
                                <div class="content">
                                    <h3><a href="">Not Just Coffee</a></h3>
                                    <p>Suspendisse tristique orci justo</p>
                                    <div class="location"><img src="{{ asset('assets/images/directory-location.png') }}" alt="location">Thomas St , NewYork</div>
                                </div>
                                <div class="category">
                                    <a href=""><img src="{{ asset('assets/images/directory-category-food.png') }}" alt="food"></a>
                                    <a href=""><img src="{{ asset('assets/images/directory-category-drink.png') }}" alt="drink"></a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection