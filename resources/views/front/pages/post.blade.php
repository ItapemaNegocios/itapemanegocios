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

    <div class="featured-section image" style="background-image: url('{{ asset('assets/images/background.png') }}');"></div>

    <div class="section light">
        <div class="inner">
            <div class="container">
                <div class="blog-box">
                    <div class="post-title text-center">
                        <h2>The Famous Streets of NewYork</h2>
                    </div>
                    <div class="blog-author text-center">
                        <img src="{{ asset('assets/images/blog-author01.jpg') }}" alt="author">
                        <span class="author-name">By Nulla Facilisi</span>
                    </div>
                    <div class="publish-date text-center">
                        <div class="button white">July 07,2016 - <span><a href="#0">Tips</a></span></div>
                    </div>
                    <div class="post-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non blandit massa. Maecenas sapien felis, lobortis non lobortis aliquet, lobortis id dolor. Aliquam erat volutpat. Nam ut efficitur metus, eget tincidunt nisi. Quisque ornare et ante in finibus. Mauris ante dolor, posuere ut venenatis nec, mattis eget est. In egestas eros quis aliquet gravida. Morbi euismod, orci vel sollicitudin fermentum, turpis mauris cursus lectus, ut sodales tellus mauris at metus. Etiam molestie massa et molestie tincidunt. Quisque commodo arcu ut orci imperdiet lobortis. Maecenas in nunc iaculis, molestie diam ac, vu lputate quam. In non lorem tempor est luctus dapibus. <br><br>
                            Vestibulum est velit, vestibulum a enim non, dictum luctus magna. Aliquam erat volutpat. Sed hendrerit, neque eu dapibus lacinia, justo ligula eleme ntum metus, eu pretium nibh ex non lorem. Nullam feugiat venenatis ligula, non sollicitudin mauris posuere ut. Nulla venenatis dignissim tortor eu con vallis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hime</p>
                    </div>
                    <div class="blog-tags text-center">
                        <div class="tags">
                            <div class="tag">Culture</div>
                            <div class="tag">lifestyle</div>
                            <div class="tag">tourism</div>
                            <div class="tag">travelling</div>
                            <div class="tag">vacation</div>
                        </div>
                    </div>
                    <div class="social-share-counter text-center">
                        <a href="#0" class="button white"><img src="{{ asset('assets/images/twitter.png') }}" alt="twitter">Twitter (3)</a>
                        <a href="#0" class="button white"><img src="{{ asset('assets/images/facebook.png') }}" alt="facebook">Facebook (7)</a>
                        <a href="#0" class="button white"><img src="{{ asset('assets/images/google-plus.png') }}" alt="google plus">Googleplus (9)</a>
                    </div>
                    <nav>
                        <ul class="pager">
                            <li class="previous">
                                <a href="">
                                    <i class="pe-7s-angle-left"></i>Anterior
                                </a>
                            </li>
                            <li class="next">
                                <a href="">
                                    Próximo<i class="pe-7s-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="comments">
                        <h4>3 Comentários</h4>
                        <div class="comment clearfix">
                            <div class="avatar"><img src="{{ asset('assets/images/avatar01.jpg') }}" alt="avatar"></div>
                            <ul class="meta list-unstyled">
                                <li class="name">Vitae Feugiat</li>
                                <li>on July 15, 2016</li>
                                <li class="reply"><a href="#">Reply</a></li>
                            </ul>
                            <div class="content">
                                <p>Nam ut ornare odio, eget eleifend turpis. Cras viverra, nulla id vehicula dictum, arcu nulla volutpat dolor, a pharetra lacus dui in eros. Sed nec fermentum nisi. Vestibulum blandit erat id purus commodo, vel luctus turpis vulputate. Quisque mauris risus, luctus nec .</p>
                            </div>
                        </div>
                        <div class="comment comment-reply clearfix">
                            <div class="avatar"><img src="{{ asset('assets/images/avatar02.jpg') }}" alt="avatar"></div>
                            <ul class="meta list-unstyled">
                                <li class="name">Cum Sociis</li>
                                <li>on July 15, 2016</li>
                                <li class="reply"><a href="#">Reply</a></li>
                            </ul>
                            <div class="content">
                                <p>Nam ut ornare odio, eget eleifend turpis. Cras viverra, nulla id vehicula dictum, arcu nulla volutpat dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="add-comment">
                        <h4>Comente Também</h4>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Name*" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="Your@email.com*" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Website">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea rows="3" placeholder="Your comment here ..." required=""></textarea>
                            </div>
                            <div class="clearfix text-right">
                                <button class="button">PUBLICAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection