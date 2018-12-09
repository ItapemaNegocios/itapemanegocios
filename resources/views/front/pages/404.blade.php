@extends('front.master.main')

@section('master')
    <div class="page-title" style="background-image: url('{{ asset('assets/images/background09.jpg') }}');">
        <div class="inner">
        </div>
    </div>
    <div class="section boxed-section light">
        <div class="inner">
            <div class="container">
                <div class="box text-center">
                    <div class="error-text">
                        <img src="{{ asset('assets/images/404.png') }}" alt="404" class="img-responsive center-block">
                        <h3>PÁGINA NÃO ENCONTRADA</h3>
                        <p>POR FAVOR, TENTE AS PÁGINAS SEGUINTES</p>
                        <a href="{{ url('/') }}" class="button">PÁGINA INICIAL</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection