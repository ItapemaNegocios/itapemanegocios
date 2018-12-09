@extends('front.master.main')

@section('master')
    <div class="page-title" style="background-image: url('{{ asset('assets//images/background.png') }}');">
        <div class="inner">
            <h2>Artigos e Dicas</h2>
            <p>Navegue pelos artigos e dicas mais recentes do nosso blog.</p>
        </div>
    </div>
    <div class="section boxed-section light">
        <div class="inner">
            <div class="container">
                <div class="box transparent blog-grid">
                    <div class="row">
                        @for ($i = 1; $i < 20; $i++)
                            <div class="col-md-4 col-sm-6">
                                <div class="blog-post image">
                                    <img src="{{ asset('assets/images/basic_plan_bg.jpg') }}" alt="image" class="img-responsive">
                                    <div class="overlay"></div>
                                    <div class="avatar"><img src="{{ asset('assets/images/avatar.jpg') }}" alt="author"></div>
                                    <div class="content">
                                        <p>By Sagittis Tempor</p>
                                        <h3><a href="">Etiquette tips for travellers.</a></h3>
                                        <div class="meta">July 09, 2016 - <a href="">Travelling</a></div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="text-center">
                        <a href="" id="blog-load-more" class="button">Carregar Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection