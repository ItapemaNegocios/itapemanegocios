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
    <div class="page-title" style="background-image: url('{{ asset('assets/images/background.png') }}');">
        <div class="inner">
            <h2>Cadastrar Empresa</h2>
            <p>Aliquam ultrices iaculis auctor.</p>
        </div>
    </div>
    <div class="section boxed-section light">
        <div class="inner">
            <div class="container">
                <div class="box">
                    <form class="add-listing-form light-inputs">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Listing Name :</span>
                                <input type="text" placeholder="e.g Your listing name here ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Tagline (optional) :</span>
                                <input type="text" placeholder="e.g Vitae Labortis Restaurant">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Description" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Listing category :</span>
                                <select class="selectpicker" data-live-search="true">
                                    <option value="" disabled selected>Choose one or more categories</option>
                                    <option value="1">Option one</option>
                                    <option value="2">Option two</option>
                                    <option value="3">Option three</option>
                                    <option value="4">Option four</option>
                                </select>
                            </div>
                            <span class="help-block">Visitors can filter their search by the categories and amenities they want - so make sure you choose them wisely and include all the relevant ones</span>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Listing tags (optional) :</span>
                                <select class="selectpicker" data-live-search="true">
                                    <option value="" disabled selected>Add tags or amenties</option>
                                    <option value="1">Option one</option>
                                    <option value="2">Option two</option>
                                    <option value="3">Option three</option>
                                    <option value="4">Option four</option>
                                </select>
                            </div>
                            <span class="help-block">Visitors can filter their search by the amenities too, so make sure you include all the relevant ones.</span>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Listing Region :</span>
                                <select class="selectpicker" data-live-search="true">
                                    <option value="" disabled selected>City of USA</option>
                                    <option value="1">Option one</option>
                                    <option value="2">Option two</option>
                                    <option value="3">Option three</option>
                                    <option value="4">Option four</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Location (optional) :</span>
                                <input type="text" placeholder="e.g 79 Leonard St , NewYork">
                            </div>
                            <span class="help-block">Leave this blank if the location is not important.</span>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">PhoneNumber (optional) :</span>
                                <input type="text" placeholder="e.g +84 0939793979">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Website (optional) :</span>
                                <input type="text" placeholder="e.g themeforest.net/user/wecookcode/portfolio">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Facebook username (optional) :</span>
                                <input type="text" placeholder="e.g yournamecompany">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Twitter username (optional) :</span>
                                <input type="text" placeholder="e.g @yournamecompany">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Googleplus username (optional) :</span>
                                <input type="text" placeholder="e.g yournamecompany">
                            </div>
                        </div>
                        <div class="form-group add_photo">
                            <button type="button" class="button">Add Photo for Gallery</button>
                            <span>4 Photos ( 570px × 400px)</span>
                        </div>
                        <div class="form-group photo_thumbnails">
                            <div class="photo_preview_box"></div>
                            <div class="photo_preview_box"></div>
                            <div class="photo_preview_box"></div>
                            <div class="photo_preview_box"></div>
                        </div>
                        <div class="form-group listing-hours">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Days :</span>
                                        <input type="text" placeholder="e.g Monday - Sunday">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Hours :</span>
                                        <input type="text" placeholder="e.g 07:00 am – 22:00 pm">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <button type="button" class="button">Add Hours of Operation</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="hours">Monday - Sunday</div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="hours">07:00 am – 22:00 pm</div>
                                </div>
                                <div class="col-sm-4">
                                    <a href="" class="remove"><i class="pe-7s-close-circle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="submit">
                            <button type="submit" class="button">Add your Listing</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection