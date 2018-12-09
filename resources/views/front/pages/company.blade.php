@extends('front.master.main')

@section('master')
    <style>
        body {
            background-color: #f7f7f7;
        }

        .header.fixed {
            background-color: #172434;
        }

        page-header {
            margin-top: 120px;
        }
    </style>

    <div class="page-header">
        <div class="container">
            <div class="breadcrumbs">
                <ul class="list-unstyled">
                    <li><a href="">Listings</a></li>
                    <li><a href="">Food</a></li>
                    <li><a href="">Restaurant</a></li>
                    <li>Vitae Lobortis Restaurant</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section light">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="directory-single-info">
                            <h2>Vitae Lobortis Restaurant
                                <img src="{{ asset('assets/images/heading.png') }}" alt="icon">
                            </h2>
                            <p>Curabitur mattis diam at erat luctus, quis porttitor elit facilisis.</p>
                            <ul class="meta list-unstyled">
                                <li><img src="{{ asset('assets/images/location.png') }}" alt="icon">Leonard St , NewYork</li>
                                <li><img src="{{ asset('assets/images/phone.png') }}" alt="icon">+84 987654321</li>
                                <li>
                                    <div class="social">
                                        <a href=""><img src="{{ asset('assets/images/facebook.png') }}" alt="facebook"></a>
                                        <a href=""><img src="{{ asset('assets/images/twitter.png') }}" alt="twitter"></a>
                                        <a href=""><img src="{{ asset('assets/images/google-plus.png') }}" alt="google plus"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="rating">4</div>
                                    <div class="number-of-ratings">( <span>3</span> )</div>
                                </li>
                            </ul>
                            <div class="buttons">
                                <a href="" class="button dark"><img src="{{ asset('assets/images/write.png') }}" alt="icon">Write a Review</a>
                                <a href="" class="button dark"><img src="{{ asset('assets/images/add.png') }}" alt="icon">Add to Favorites</a>
                                <div class="button dark share-button">
                                    <img src="{{ asset('assets/images/share.png') }}" alt="icon">Share
                                    <div class="social">
                                        <a href=""><img src="{{ asset('assets/images/facebook.png') }}" alt="facebook"></a>
                                        <a href=""><img src="{{ asset('assets/images/twitter.png') }}" alt="twitter"></a>
                                        <a href=""><img src="{{ asset('assets/images/google-plus.png') }}" alt="google plus"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <iframe width="100%" height="250" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Rua%20424%2C%20N%C2%BA%20168%2C%20Morretes%2C%20Itapema&amp;key=AIzaSyBya-2NwFk-Ygy0ajTawl8_auKAkmuuu8w" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="directory-single-slider-wrapper">
        <div class="directory-single-slider">
            <img src="{{ asset('assets/images/directory-single-slider01.jpg') }}" alt="image" class="img-responsive">
            <img src="{{ asset('assets/images/directory-single-slider02.jpg') }}" alt="image" class="img-responsive">
            <img src="{{ asset('assets/images/directory-single-slider03.jpg') }}" alt="image" class="img-responsive">
            <img src="{{ asset('assets/images/directory-single-slider04.jpg') }}" alt="image" class="img-responsive">
        </div>
        <div class="sliderNav">
            <div class="container">
                <div id="customNav"></div>
            </div>
        </div>
    </div>
    <div class="section light">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="directory-single">
                            <p>Aliquam erat volutpat. Curabitur sodales tellus sed arcu sagittis tincidunt. Curabitur ac pulvinar neque. In magna est, aliquam in viverra quis, molestie at nunc. Sed vel mauris sit amet leo porta dictum. Vestibulum iaculis euismod turpis ac blandit. Curabitur tristique efficitur justo, eget eleme ntum est imperdiet quis. Integer enim nisi, tincidunt eu ullamcorper ac, interdum nec sapien. Phase llus dolor odio, scelerisque id elit vel, aliquam hendrerit ex.</p>
                            <p>Nam eget eleifend justo, in gravida quam. Nam nec libero id nibh pellentesque aliquet. Cras rhoncus, tortor in eleifend commodo, lacus sem posuere nisl, ut porta enim ante eget magna. In vitae tincidunt orci. Pellentesque sit amet dui vel quam dapibus rhoncus. Praesent cursus placerat egestas.</p>
                            <div class="tags">
                                <div class="tag"><img src="{{ asset('assets/images/tag01.png') }}" alt="tag">Accepts Credit Cards</div>
                                <div class="tag"><img src="{{ asset('assets/images/tag02.png') }}" alt="tag">Parking Street</div>
                                <div class="tag"><img src="{{ asset('assets/images/tag03.png') }}" alt="tag">Pets Friendly</div>
                                <div class="tag"><img src="{{ asset('assets/images/tag04.png') }}" alt="tag">Bike Parking</div>
                                <div class="tag"><img src="{{ asset('assets/images/tag05.png') }}" alt="tag">Wireless Internet</div>
                            </div>
                        </div>
                        <div class="reviews">
                            <h4>3 reviews.</h4>
                            @for ($i = 0; $i < 9; $i++)
                                <div class="review clearfix">
                                    <div class="avatar"><img src="{{ asset('assets/images/avatar03.jpg') }}" alt="avatar"></div>
                                    <ul class="meta list-unstyled">
                                        <li class="name">Aliquam Tristique</li>
                                        <li class="rating">
                                            <img src="{{ asset('assets/images/star.png') }}" alt="star">
                                            <img src="{{ asset('assets/images/star.png') }}" alt="star">
                                            <img src="{{ asset('assets/images/star.png') }}" alt="star">
                                            <img src="{{ asset('assets/images/star.png') }}" alt="star">
                                            <img src="{{ asset('assets/images/star.png') }}" alt="star">
                                        <li>em 15 de maio, 2018</li>
                                    </ul>
                                    <div class="content">
                                        <p>Sed nec fermentum nisi. Vestibulum blandit erat id purus commodo vel luctus.</p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <div class="add-review">
                            <h4>Rate and write a review.</h4>
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Your Name*" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Your@email.com*" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea rows="3" placeholder="Your reviews here ..." required></textarea>
                                </div>
                                <div class="clearfix">
                                    <fieldset class="rating">
                                        <input type="radio" id="star5" name="rating" value="5"/><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                        <input type="radio" id="star4half" name="rating" value="4 and a half"/><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                        <input type="radio" id="star4" name="rating" value="4"/><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                        <input type="radio" id="star3half" name="rating" value="3 and a half"/><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                        <input type="radio" id="star3" name="rating" value="3"/><label class="full" for="star3" title="Meh - 3 stars"></label>
                                        <input type="radio" id="star2half" name="rating" value="2 and a half"/><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                        <input type="radio" id="star2" name="rating" value="2"/><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                        <input type="radio" id="star1half" name="rating" value="1 and a half"/><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                        <input type="radio" id="star1" name="rating" value="1"/><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                        <input type="radio" id="starhalf" name="rating" value="half"/><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                    </fieldset>
                                    <button class="button">Avaliar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar-widget">
                            <div class="category">
                                <h5><img src="{{ asset('assets/images/cutlery.png') }}" alt="icon">Cutlery</h5>
                                <h5><img src="{{ asset('assets/images/wine.png') }}" alt="icon">Bar</h5>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h5><img src="{{ asset('assets/images/clock.png') }}" alt="icon">Hours</h5>
                            <div class="hours clearfix">
                                <div class="left">Monday - Sunday</div>
                                <div class="right">07:00 am – 22:00 pm</div>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h5><img src="{{ asset('assets/images/email.png')  }}" alt="icon">Contact Us</h5>
                            <form method="post" action="" class="contact-form">
                                <div class="form-group">
                                    <input type="text" id="contact-name" name="contact-name" placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact-email" name="contact-email" placeholder="Your Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="contact-subject" name="contact-subject" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea name="contact-message" id="contact-message" required rows="3" placeholder="Your message here ..."></textarea>
                                </div>
                                <div class="clearfix">
                                    <button type="submit" class="button">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-widget">
                            <h5><img src="{{ asset('assets/images/instagram.png') }}" alt="icon">Instagram</h5>
                            <div class="instagram">
                                @for ($int = 1; $int < 9; $int++)
                                    <a href=""><img src="{{ asset("assets/images/instagram0{$int}.png") }}" alt="image"></a>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection