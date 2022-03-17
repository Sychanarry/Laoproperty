@extends('web.index')

@section('content')
    <section>
        <div class="container shadow-sm-2 rounded bg-white position-relative top-lg-n50px py-lg-0 py-6"
            data-animate="fadeInUp">
            <form class="property-search py-lg-0 d-none d-lg-block">
                <div class="row align-items-center ml-lg-0" id="accordion-3">
                    <div class="col-md-6 col-lg-3 order-1">
                        <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Home Type</label>
                        <select class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input"
                            title="Select" data-style="p-0 h-24 lh-17 text-dark" name="type">
                            <option>Condominium</option>
                            <option>Single-Family Home</option>
                            <option>Townhouse</option>
                            <option>Multi-Family Home</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-5 pt-6 pt-md-0 order-2">
                        <label class="text-uppercase font-weight-500 letter-spacing-093">Search</label>
                        <div class="position-relative">
                            <input type="text" name="search"
                                class="form-control bg-transparent shadow-none border-top-0 border-right-0 border-left-0 border-bottom rounded-0 h-24 lh-17 pl-0 pr-4 font-weight-600 border-color-input placeholder-muted"
                                placeholder="Find something...">
                            <i class="far fa-search position-absolute pos-fixed-right-center pr-0 fs-18 mt-n3"></i>
                        </div>
                    </div>
                    <div class="col-sm pr-lg-0 pt-6 pt-lg-0 order-3">
                        <a href="#advanced-search-filters-3"
                            class="btn advanced-search btn-accent h-lg-100 w-100 shadow-none text-secondary rounded-0 fs-14 fs-sm-16 font-weight-600 text-left d-flex align-items-center collapsed"
                            data-toggle="collapse" data-target="#advanced-search-filters-3" aria-expanded="true"
                            aria-controls="advanced-search-filters-3">
                            Advanced Search
                        </a>
                    </div>
                    <div class="col-sm pt-6 pt-lg-0 order-sm-4 order-5">
                        <button type="submit" class="btn btn-primary shadow-none fs-16 font-weight-600 w-100 py-lg-3">
                            Search
                        </button>
                    </div>
                    <div id="advanced-search-filters-3" class="col-12 py-sm-4 order-4 order-sm-5 collapse"
                        data-parent="#accordion-3">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3 pt-6">
                                <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Bedrooms</label>
                                <select
                                    class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input"
                                    name="bedroom" title="All Bedrooms" data-style="p-0 h-24 lh-17 text-dark">
                                    <option>All Bedrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <div class="col-sm-6 col-lg-3 pt-6">
                                <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Bathrooms</label>
                                <select
                                    class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input"
                                    title="All Bathrooms" data-style="p-0 h-24 lh-17 text-dark" name="bathroom">
                                    <option>All Bathrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <div class="col-sm-6 col-lg-3 pt-6">
                                <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Cities</label>
                                <select
                                    class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input"
                                    name="city" title="All Cities" data-style="p-0 h-24 lh-17 text-dark">
                                    <option>All Cities</option>
                                    <option>New York</option>
                                    <option>Los Angeles</option>
                                    <option>Chicago</option>
                                    <option>Houston</option>
                                    <option>San Diego</option>
                                    <option>Las Vegas</option>
                                    <option>Las Vegas</option>
                                    <option>Atlanta</option>
                                </select>
                            </div>
                            <div class="col-sm-6 col-lg-3 pt-6">
                                <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">All Areas</label>
                                <select
                                    class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input"
                                    name="areas" title="All Areas" data-style="p-0 h-24 lh-17 text-dark">
                                    <option>All Areas</option>
                                    <option>Albany Park</option>
                                    <option>Altgeld Gardens</option>
                                    <option>Andersonville</option>
                                    <option>Beverly</option>
                                    <option>Brickel</option>
                                    <option>Central City</option>
                                    <option>Coconut Grove</option>
                                </select>
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-md-6 col-lg-4 pt-6 slider-range slider-range-secondary">
                                <label for="price-1-3" class="mb-4 text-gray-light">Price Range</label>
                                <div data-slider="true"
                                    data-slider-options='{"min":0,"max":1000000,"values":[100000,700000],"type":"currency"}'>
                                </div>
                                <div class="text-center mt-2">
                                    <input id="price-1-3" type="text" readonly name="price"
                                        class="border-0 amount text-center text-body font-weight-500">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 pt-6 slider-range slider-range-secondary">
                                <label for="area-size-3" class="mb-4 text-gray-light">Area Size</label>
                                <div data-slider="true"
                                    data-slider-options='{"min":0,"max":15000,"values":[0,13000],"type":"sqrt"}'></div>
                                <div class="text-center mt-2">
                                    <input id="area-size-3" type="text" readonly name="price"
                                        class="border-0 amount text-center text-body font-weight-500">
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 pt-6">
                                <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Property
                                    ID</label>
                                <input type="text" name="search"
                                    class="form-control bg-transparent shadow-none border-top-0 border-right-0 border-left-0 border-bottom rounded-0 h-24 lh-17 p-0 font-weight-600 border-color-input"
                                    placeholder="Enter ID...">
                            </div>
                            <div class="col-12 pt-6 pb-2">
                                <a class="lh-17 d-inline-block other-feature collapsed" data-toggle="collapse"
                                    href="#other-feature-3" role="button" aria-expanded="false"
                                    aria-controls="other-feature-3">
                                    <span class="fs-15 text-heading font-weight-500 hover-primary">Other Features</span>
                                </a>
                            </div>
                            <div class="collapse row mx-0 w-100" id="other-feature-3">
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check1-3" name="features[]">
                                        <label class="custom-control-label" for="check1-3">Air Conditioning</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check2-3" name="features[]">
                                        <label class="custom-control-label" for="check2-3">Laundry</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check4-3" name="features[]">
                                        <label class="custom-control-label" for="check4-3">Washer</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check5-3" name="features[]">
                                        <label class="custom-control-label" for="check5-3">Barbeque</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check6-3" name="features[]">
                                        <label class="custom-control-label" for="check6-3">Lawn</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check7-3" name="features[]">
                                        <label class="custom-control-label" for="check7-3">Sauna</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check8-3" name="features[]">
                                        <label class="custom-control-label" for="check8-3">WiFi</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check9-3" name="features[]">
                                        <label class="custom-control-label" for="check9-3">Dryer</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check10-3"
                                            name="features[]">
                                        <label class="custom-control-label" for="check10-3">Microwave</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check11-3"
                                            name="features[]">
                                        <label class="custom-control-label" for="check11-3">Swimming Pool</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check12-3"
                                            name="features[]">
                                        <label class="custom-control-label" for="check12-3">Window Coverings</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check13-3"
                                            name="features[]">
                                        <label class="custom-control-label" for="check13-3">Gym</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check14-3"
                                            name="features[]">
                                        <label class="custom-control-label" for="check14-3">Outdoor Shower</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check15-3"
                                            name="features[]">
                                        <label class="custom-control-label" for="check15-3">TV Cable</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check16-3"
                                            name="features[]">
                                        <label class="custom-control-label" for="check16-3">Refrigerator</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form class="property-search property-search-mobile d-lg-none">
                <div class="row align-items-lg-center" id="accordion-3-mobile">
                    <div class="col-12">
                        <div class="form-group mb-0 position-relative">
                            <a href="#advanced-search-filters-3-mobile"
                                class="text-secondary btn advanced-search shadow-none pr-3 pl-0 d-flex align-items-center position-absolute pos-fixed-left-center py-0 h-100 border-right collapsed"
                                data-toggle="collapse" data-target="#advanced-search-filters-3-mobile" aria-expanded="true"
                                aria-controls="advanced-search-filters-3-mobile">
                            </a>
                            <input type="text"
                                class="form-control form-control-lg border shadow-none pr-9 pl-11 bg-white placeholder-muted"
                                name="key-word" placeholder="Search...">
                            <button type="submit"
                                class="btn position-absolute pos-fixed-right-center p-0 text-heading fs-20 px-3 shadow-none h-100 border-left">
                                <i class="far fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div id="advanced-search-filters-3-mobile" class="col-12 pt-2 collapse"
                        data-parent="#accordion-3-mobile">
                        <div class="row mx-n2">
                            <div class="col-sm-6 pt-4 px-2">
                                <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                    title="Select" data-style="btn-lg py-2 h-52 bg-transparent" name="type">
                                    <option>All status</option>
                                    <option>For Rent</option>
                                    <option>For Sale</option>
                                </select>
                            </div>
                            <div class="col-sm-6 pt-4 px-2">
                                <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                    title="All Types" data-style="btn-lg py-2 h-52 bg-transparent" name="type">
                                    <option>Condominium</option>
                                    <option>Single-Family Home</option>
                                    <option>Townhouse</option>
                                    <option>Multi-Family Home</option>
                                </select>
                            </div>
                            <div class="col-sm-6 pt-4 px-2">
                                <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                    name="bedroom" title="Bedrooms" data-style="btn-lg py-2 h-52 bg-transparent">
                                    <option>All Bedrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <div class="col-sm-6 pt-4 px-2">
                                <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                    name="bathrooms" title="Bathrooms" data-style="btn-lg py-2 h-52 bg-transparent">
                                    <option>All Bathrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <div class="col-sm-6 pt-4 px-2">
                                <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                    title="All Cities" data-style="btn-lg py-2 h-52 bg-transparent" name="city">
                                    <option>All Cities</option>
                                    <option>New York</option>
                                    <option>Los Angeles</option>
                                    <option>Chicago</option>
                                    <option>Houston</option>
                                    <option>San Diego</option>
                                    <option>Las Vegas</option>
                                    <option>Las Vegas</option>
                                    <option>Atlanta</option>
                                </select>
                            </div>
                            <div class="col-sm-6 pt-4 px-2">
                                <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                    name="areas" title="All Areas" data-style="btn-lg py-2 h-52 bg-transparent">
                                    <option>All Areas</option>
                                    <option>Albany Park</option>
                                    <option>Altgeld Gardens</option>
                                    <option>Andersonville</option>
                                    <option>Beverly</option>
                                    <option>Brickel</option>
                                    <option>Central City</option>
                                    <option>Coconut Grove</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pt-6 slider-range slider-range-secondary">
                                <label for="price-3-mobile" class="mb-4 text-white">Price Range</label>
                                <div data-slider="true"
                                    data-slider-options='{"min":0,"max":1000000,"values":[100000,700000],"type":"currency"}'>
                                </div>
                                <div class="text-center mt-2">
                                    <input id="price-3-mobile" type="text" readonly
                                        class="border-0 amount text-center bg-transparent font-weight-500" name="price">
                                </div>
                            </div>
                            <div class="col-md-6 pt-6 slider-range slider-range-secondary">
                                <label for="area-size-3-mobile" class="mb-4">Area Size</label>
                                <div data-slider="true"
                                    data-slider-options='{"min":0,"max":15000,"values":[0,12000],"type":"sqrt"}'></div>
                                <div class="text-center mt-2">
                                    <input id="area-size-3-mobile" type="text" readonly
                                        class="border-0 amount text-center bg-transparent font-weight-500" name="area">
                                </div>
                            </div>
                            <div class="col-12 pt-4 pb-2">
                                <a class="lh-17 d-inline-block other-feature collapsed" data-toggle="collapse"
                                    href="#other-feature-3-mobile" role="button" aria-expanded="false"
                                    aria-controls="other-feature-3-mobile">
                                    <span class="fs-15 font-weight-500 hover-primary">Other Features</span>
                                </a>
                            </div>
                            <div class="collapse row mx-0 w-100" id="other-feature-3-mobile">
                                <div class="col-sm-6 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check1-3-mobile"
                                            name="feature[]">
                                        <label class="custom-control-label" for="check1-3-mobile">Air
                                            Conditioning</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check2-3-mobile"
                                            name="feature[]">
                                        <label class="custom-control-label" for="check2-3-mobile">Laundry</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check4-3-mobile"
                                            name="feature[]">
                                        <label class="custom-control-label" for="check4-3-mobile">Washer</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check5-3-mobile"
                                            name="feature[]">
                                        <label class="custom-control-label" for="check5-3-mobile">Barbeque</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check6-3-mobile"
                                            name="feature[]">
                                        <label class="custom-control-label" for="check6-3-mobile">Lawn</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check7-3-mobile"
                                            name="feature[]">
                                        <label class="custom-control-label" for="check7-3-mobile">Sauna</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check8-3-mobile"
                                            name="feature[]">
                                        <label class="custom-control-label" for="check8-3-mobile">WiFi</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check9-3-mobile"
                                            name="feature[]">
                                        <label class="custom-control-label" for="check9-3-mobile">Dryer</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check10-3-mobile"
                                            name="feature[]">
                                        <label class="custom-control-label" for="check10-3-mobile">Microwave</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check11-3-mobile"
                                            name="feature[]">
                                        <label class="custom-control-label" for="check11-3-mobile">Swimming
                                            Pool</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check12-3-mobile"
                                            name="feature[]">
                                        <label class="custom-control-label" for="check12-3-mobile">Window
                                            Coverings</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check13-3-mobile"
                                            name="feature[]">
                                        <label class="custom-control-label" for="check13-3-mobile">Gym</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check14-3-mobile"
                                            name="feature[]">
                                        <label class="custom-control-label" for="check14-3-mobile">Outdoor
                                            Shower</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check15-3-mobile"
                                            name="feature[]">
                                        <label class="custom-control-label" for="check15-3-mobile">TV Cable</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check16-3-mobile"
                                            name="feature[]">
                                        <label class="custom-control-label" for="check16-3-mobile">Refrigerator</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="py-11">
        <div class="container">
            <p
                class="text-primary font-weight-500 letter-spacing-263 text-center text-uppercase mb-5 fontfamily fontweight">
                ຊັບສິນທີ່ນິຍົມ</p>
            <h2 class="text-dark text-center mb-8"></h2>
            <div class="row">
                @foreach ($postimage as $item)
                    <a href="{{ route('sale_properties_detail', $item->post_id) }}">
                        <div class="col-lg-4 col-sm-6 mb-6 fontfamily" data-animate="zoomIn">

                            <div class="card shadow-hover-1">

                                <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    @php
                                        $images = explode('|', $item->image);
                                        $imagearray = $images[0];
                                    @endphp
                                    <image src="{{ URL::to($imagearray) }}" style="height: 200px;width:100%">

                                        <div class="card-img-overlay p-2 d-flex flex-column">
                                            @php
                                                $postestates = DB::table('post_estates')
                                                    ->join('provinces', 'provinces.id', '=', 'post_estates.province_id')
                                                    ->join('districts', 'districts.district_id', '=', 'post_estates.district_id')
                                                    ->select('post_estates.*', 'provinces.*', 'districts.*')
                                                    ->where('post_id', $item->post_id)
                                                    ->get();
                                            @endphp
                                            <div>
                                                @if ($postestates[0]->property_mode == '1')
                                                    <span class="badge badge-danger mr-2">ສຳລັບຂາຍ</span>
                                                @elseif($postestates[0]->property_mode == '2')
                                                    <span class="badge badge-indigo mr-2">ສຳລັບເຊົ່າ</span>
                                                @else
                                                    <span class="badge badge-indigo mr-2">ສຳລັບຂາຍ ຫຼື ເຊົ່າ</span>
                                                @endif
                                            </div>
                                            <ul class="list-inline mb-0 mt-auto hover-image">
                                                <li class="list-inline-item mr-2 fontfamily" data-toggle="tooltip"
                                                    title="ເບິ່ງ">
                                                    <a href="{{ route('sale_properties_detail', $item->post_id) }}"
                                                        class="text-white hover-primary">
                                                        <i class="far fa-images fontfamily"></i><span
                                                            class="pl-1">ເບິ່ງ</span>
                                                </li>
                                            </ul>
                                        </div>
                                </div>
                                <div class="card-footer bg-transparent ">
                                    <h2 class="fs-25 font-weight-bold text-heading mb-0"> <a
                                            href="{{ route('sale_properties_detail', $item->post_id) }}"
                                            class="text-dark hover-primary">{{ $postestates[0]->title }}</a></h2>
                                    <p class="fs-10 font-weight-bold text-heading mb-0">
                                        ເມືອງ:{{ $postestates[0]->district_name }},
                                        ແຂວງ:{{ $postestates[0]->province_name }}</p>
                                    @php
                                        $postestatedetail = DB::table('post_estate_details')
                                            ->select('post_estate_details.*')
                                            ->where('post_id', $item->post_id)
                                            ->get();
                                    @endphp
                                    <p class="fs-10 font-weight-bold text-heading mb-0">ມື້ໂພສ
                                        {{ date('d/m/Y', strtotime($postestates[0]->post_date)) }}</p>
                                    @if ($postestates[0]->sale_price && $postestates[0]->rent_price)
                                        <p class="fs-10 font-weight-bold text-heading mb-0">ລາຄາຂາຍ:
                                            {{ number_format($postestates[0]->sale_price) }}
                                            {{ $postestates[0]->rate_sale_price }}
                                        </p>
                                        <p class="fs-10 font-weight-bold text-heading mb-0">ລາຄາເຊົ່າ:
                                            {{ number_format($postestates[0]->rent_price) }}
                                            {{ $postestates[0]->rate_rent_price }}
                                        </p>
                                    @elseif($postestates[0]->sale_price)
                                        <p class="fs-10 font-weight-bold text-heading mb-0">ລາຄາຂາຍ:
                                            {{ number_format($postestates[0]->sale_price) }}
                                            {{ $postestates[0]->rate_sale_price }}
                                        </p>
                                    @elseif($postestates[0]->rent_price)
                                        <p class="fs-10 font-weight-bold text-heading mb-0">ລາຄາເຊົ່າ:
                                            {{ number_format($postestates[0]->rent_price) }}
                                            {{ $postestates[0]->rate_rent_price }}
                                        </p>
                                    @else
                                        <p class="fs-17 font-weight-bold text-heading mb-0">ລາຄາ:
                                            {{ number_format($postestates[0]->sale_price) }}
                                            {{ $postestates[0]->rate_sale_price }}
                                        </p>
                                    @endif
                                    <div class="row favorite_data">
                                        <div class="col-12 text-end">

                                            @if (!Session()->has('registerId'))

                                            @else
                                            <img src="{{ asset('image/heart-white.png') }}" id="#1"
                                            class="nav-toggle" style="width: 30px;height:30px"
                                            onclick="getaxios('{{ $item->post_id }}')">
                                         <input type="hidden" id="1">
                                            @foreach ($haveheart as $reachhaveheart)
                                                    @if($reachhaveheart->post_id == $item->post_id)
                                                    <img src="{{ asset('image/heart.png') }}" id="#1"
                                                    class="nav-toggle" style="width: 30px;height:30px"
                                                    onclick="getaxios('{{ $item->post_id }}')">
                                                <input type="hidden" id="1">
                                                    @elseif($reachhaveheart->post_id != $item->post_id)
                                                    <img src="{{ asset('image/heart-white.png') }}" id="#1"
                                                    class="nav-toggle" style="width: 30px;height:30px"
                                                    onclick="getaxios('{{ $item->post_id }}')">
                                                <input type="hidden" id="1">
                                                @else
                                                <img src="{{ asset('image/heart.png') }}" id="#1"
                                                class="nav-toggle" style="width: 30px;height:30px"
                                                onclick="getaxios('{{ $item->post_id }}')">
                                            <input type="hidden" id="1">
                                                    @endif
                                                    @endforeach
                                            @endif
                                            <a href="{{ route('sale_properties_detail', $item->post_id) }}">
                                                ເບິ່ງລາຍລະອຽດ
                                            </a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                    </a>
            </div>
            </a>
            @endforeach
            <div class="text-center">
                <a href="{{ route('weballproperties') }}"
                    class="btn btn-lg text-secondary btn-accent rounded-lg mt-4 fontweight fontfamily">ເພີ່ມເຕີມ
                    <i class="far fa-long-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
        <hr>


        <br>
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('image/fordannouncement.jpeg') }}" style="width: 100%">
            </div>
        </div>
        </div>
    </section>
    <section class="bg-gray-02 pt-9 mt-1 pb-lg-8">
        <div class="container">
            <h2 class="text-heading text-center">Services Offered</h2>
            <span class="heading-divider mx-auto"></span>
            <div class="slick-slider arrow-haft-inner mt-2 mx-0"
                data-slick-options='{"slidesToShow": 4, "autoplay":true,"dots":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":3}},{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"autoplay":true}}]}'>
                <div class="box px-0 py-6" data-animate="fadeInUp">
                    <div class="card border-0 py-7 px-4 shadow-hover-3 bg-transparent bg-hover-white">
                        <div class="d-flex justify-content-center card-img-top">
                            <img src="{{ asset('assets/vendors/images/house.png') }}" alt="Property Management">
                        </div>
                        <div class="card-body px-0 pt-5 pb-0 text-center">
                            <h4 class="card-title fs-16 lh-13 text-dark mb-2 px-10">Property Management</h4>
                            <p class="card-text text-body px-lg-8">Sed ut perspiciatis unde omnis iste natus error</p>
                        </div>
                    </div>
                </div>
                <div class="box px-0 py-6" data-animate="fadeInUp">
                    <div class="card border-0 py-7 px-4 shadow-hover-3 bg-transparent bg-hover-white">
                        <div class="d-flex justify-content-center card-img-top">
                            <img src="{{ asset('assets/vendors/images/mortgage.png') }}" alt="Mortgage Service">
                        </div>
                        <div class="card-body px-0 pt-5 pb-0 text-center">
                            <h4 class="card-title fs-16 lh-13 text-dark mb-2 px-10">Mortgage Service</h4>
                            <p class="card-text text-body px-lg-8">Sed ut perspiciatis unde omnis iste natus error</p>
                        </div>
                    </div>
                </div>
                <div class="box px-0 py-6" data-animate="fadeInUp">
                    <div class="card border-0 py-7 px-4 shadow-hover-3 bg-transparent bg-hover-white">
                        <div class="d-flex justify-content-center card-img-top">
                            <img src="{{ asset('assets/vendors/images/clipboard.png') }}" alt="Consulting Service">
                        </div>
                        <div class="card-body px-0 pt-5 pb-0 text-center">
                            <h4 class="card-title fs-16 lh-13 text-dark mb-2 px-10">Consulting Service</h4>
                            <p class="card-text text-body px-lg-8">Sed ut perspiciatis unde omnis iste natus error</p>
                        </div>
                    </div>
                </div>
                <div class="box px-0 py-6" data-animate="fadeInUp">
                    <div class="card border-0 py-7 px-4 shadow-hover-3 bg-transparent bg-hover-white">
                        <div class="d-flex justify-content-center card-img-top">
                            <img src="{{ asset('assets/vendors/images/building.png') }}" alt="Recover Asset Value">
                        </div>
                        <div class="card-body px-0 pt-5 pb-0 text-center">
                            <h4 class="card-title fs-16 lh-13 text-dark mb-2 px-10">Recover Asset Value</h4>
                            <p class="card-text text-body px-lg-8">Sed ut perspiciatis unde omnis iste natus error</p>
                        </div>
                    </div>
                </div>
                <div class="box px-0 py-6" data-animate="fadeInUp">
                    <div class="card border-0 py-7 px-4 shadow-hover-3 bg-transparent bg-hover-white">
                        <div class="d-flex justify-content-center card-img-top">
                            <img src="{{ asset('assets/vendors/images/house.png') }}" alt="Property Management">
                        </div>
                        <div class="card-body px-0 pt-5 pb-0 text-center">
                            <h4 class="card-title fs-16 lh-13 text-dark mb-2 px-10">Property Management</h4>
                            <p class="card-text text-body px-lg-8">Sed ut perspiciatis unde omnis iste natus error</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-02 pt-10 pb-11">
        <div class="container">
            <p class="text-primary letter-spacing-263 text-uppercase lh-186 text-center mb-0">testimonials</p>
            <h2 class="text-center lh-1625 text-dark mb-5">
                What Our Clients Say About Us
            </h2>
            <div class="slick-slider testimonials"
                data-slick-options='{"slidesToShow": 3, "autoplay":true,"dots":true,"arrows":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>
                <div class="box">
                    <div class="card p-6" data-animate="fadeInUp">
                        <div class="card-body p-0 text-center">
                            <span class="text-primary fs-26 lh-1 mb-4 d-block">
                                <i class="fas fa-quote-left"></i>
                            </span>
                            <p class="card-text fs-15 lh-2 mb-4">
                                Working with @homeID is like having a family member who can fix everything. They know what
                                you need, exactly when you need it.
                            </p>
                            <span class="mx-auto divider mb-5"></span>
                            <img src="{{ asset('assets/vendors/images/testimonial-3.jpg') }}"
                                class="rounded-circle d-inline-block mb-2" alt="Lydia Wise">
                            <p class="fs-16 lh-214 text-dark font-weight-500 mb-0">Lydia Wise</p>
                            <p class="mb-0">Manchester</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card p-6" data-animate="fadeInUp">
                        <div class="card-body p-0 text-center">
                            <span class="text-primary fs-26 lh-1 mb-4 d-block">
                                <i class="fas fa-quote-left"></i>
                            </span>
                            <p class="card-text fs-15 lh-2 mb-4">
                                Working with @homeID is like having a family member who can fix everything. They know what
                                you need, exactly when you need it.
                            </p>
                            <span class="mx-auto divider mb-5"></span>
                            <img src="{{ asset('assets/vendors/images/testimonial-4.jpg') }}"
                                class="rounded-circle d-inline-block mb-2" alt="Olive Erickson">
                            <p class="fs-16 lh-214 text-dark font-weight-500 mb-0">Olive Erickson</p>
                            <p class="mb-0">New Mexico</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card p-6" data-animate="fadeInUp">
                        <div class="card-body p-0 text-center">
                            <span class="text-primary fs-26 lh-1 mb-4 d-block">
                                <i class="fas fa-quote-left"></i>
                            </span>
                            <p class="card-text fs-15 lh-2 mb-4">
                                Working with @homeID is like having a family member who can fix everything. They know what
                                you need, exactly when you need it.
                            </p>
                            <span class="mx-auto divider mb-5"></span>
                            <img src="{{ asset('assets/vendors/images/testimonial-5.jpg') }}"
                                class="rounded-circle d-inline-block mb-2" alt="Carl Knight">
                            <p class="fs-16 lh-214 text-dark font-weight-500 mb-0">Carl Knight</p>
                            <p class="mb-0">Washington, D.C.</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card p-6" data-animate="fadeInUp">
                        <div class="card-body p-0 text-center">
                            <span class="text-primary fs-26 lh-1 mb-4 d-block">
                                <i class="fas fa-quote-left"></i>
                            </span>
                            <p class="card-text fs-15 lh-2 mb-4">
                                Working with @homeID is like having a family member who can fix everything. They know what
                                you need, exactly when you need it.
                            </p>
                            <span class="mx-auto divider mb-5"></span>
                            <img src="{{ asset('assets/vendors/images/testimonial-3.jpg') }}"
                                class="rounded-circle d-inline-block mb-2" alt="Lydia Wise">
                            <p class="fs-16 lh-214 text-dark font-weight-500 mb-0">Lydia Wise</p>
                            <p class="mb-0">Manchester</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card p-6" data-animate="fadeInUp">
                        <div class="card-body p-0 text-center">
                            <span class="text-primary fs-26 lh-1 mb-4 d-block">
                                <i class="fas fa-quote-left"></i>
                            </span>
                            <p class="card-text fs-15 lh-2 mb-4">
                                Working with @homeID is like having a family member who can fix everything. They know what
                                you need, exactly when you need it.
                            </p>
                            <span class="mx-auto divider mb-5"></span>
                            <img src="{{ asset('assets/vendors/images/testimonial-4.jpg') }}"
                                class="rounded-circle d-inline-block mb-2" alt="Olive Erickson">
                            <p class="fs-16 lh-214 text-dark font-weight-500 mb-0">Olive Erickson</p>
                            <p class="mb-0">New Mexico</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card p-6" data-animate="fadeInUp">
                        <div class="card-body p-0 text-center">
                            <span class="text-primary fs-26 lh-1 mb-4 d-block">
                                <i class="fas fa-quote-left"></i>
                            </span>
                            <p class="card-text fs-15 lh-2 mb-4">
                                Working with @homeID is like having a family member who can fix everything. They know what
                                you need, exactly when you need it.
                            </p>
                            <span class="mx-auto divider mb-5"></span>
                            <img src="{{ asset('assets/vendors/images/testimonial-5.jpg') }}"
                                class="rounded-circle d-inline-block mb-2" alt="Carl Knight">
                            <p class="fs-16 lh-214 text-dark font-weight-500 mb-0">Carl Knight</p>
                            <p class="mb-0">Washington, D.C.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-02 pt-9 pb-9 pb-lg-11">
        <div class="container">
            <h2 class="text-center text-dark line-height-base">
                Meet Our Agents
            </h2>
            <span class="heading-divider mx-auto mb-7"></span>
            <div class="row no-gutters">
                <div class="col-lg-6" data-animate="fadeInLeft">
                    <div class="card bg-overlay-gradient-4 rounded-0 border-0 bg-overlay-opacity-74">
                        <img src="{{ asset('assets/vendors/images/agent-creative-03.jpg') }}" class="card-img rounded-0"
                            alt="Tommy Wolfe">
                        <div class="card-img-overlay d-flex flex-column justify-content-end p-6 position-relative-sm">
                            <div class="border-white-opacity-03 border-bottom">
                                <h2 class="mb-1"><a href="#" class="fs-22 text-white">Tommy Wolfe</a></h2>
                                <p class="text-lighter mb-1">/ Sales Excutive</p>
                                <p class="text-lighter mb-4">Lorem ipsum dolor sit amet, consecte tur cing elit. Suspe
                                    ndisse suscipit sagittis leo sit met condim entum, consecte tur cineoi</p>
                            </div>
                            <div class="d-sm-flex mt-5 align-items-sm-center">
                                <ul class="list-inline mb-0 mr-sm-auto mb-sm-0 mb-3 d-flex">
                                    <li class="list-inline-item mr-2">
                                        <a href="#"
                                            class="w-40px h-40 rounded-circle bg-white text-body bg-hover-primary hover-white d-flex align-items-center justify-content-center"><i
                                                class="fab fa-twitter"></i></a>

                                    </li>
                                    <li class="list-inline-item mr-2">
                                        <a href="#"
                                            class="w-40px h-40 rounded-circle bg-white text-body bg-hover-primary hover-white d-flex align-items-center justify-content-center"><i
                                                class="fab fa-facebook-f"></i></a>

                                    </li>
                                    <li class="list-inline-item mr-2">
                                        <a href="#"
                                            class="w-40px h-40 rounded-circle bg-white text-body bg-hover-primary hover-white d-flex align-items-center justify-content-center">
                                            <i class="fab fa-instagram"></i></a>

                                    </li>
                                    <li class="list-inline-item mr-2">
                                        <a href="#"
                                            class="w-40px h-40 rounded-circle bg-white text-body bg-hover-primary hover-white d-flex align-items-center justify-content-center"><i
                                                class="fab fa-linkedin-in"></i></a>

                                    </li>
                                </ul>
                                <a href="#"
                                    class="d-flex bg-white rounded p-2 mxw-253 w-100 fs-13 font-weight-500 text-heading justify-content-center align-items-center">
                                    <span
                                        class="badge w-28px h-28 bg-gray-01 rounded-circle border d-inline-flex align-items-center justify-content-center">5</span>
                                    <span class="mx-2">Listed Properties</span>
                                    <i class="fas fa-long-arrow-alt-right text-primary"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-6 mt-lg-0">
                    <div class="card border-md-0 mb-6 mb-md-0" data-animate="fadeInRight">
                        <div class="row no-gutters d-flex align-items-center h-100">
                            <div class="col-md-6 bg-overlay-gradient-2 bg-overlay-opacity-44">
                                <img src="{{ asset('assets/vendors/images/agent-creative-01.jpg') }}"
                                    class="card-img rounded-0" alt="Pearl Sanders">
                                <div class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                    <a href="#"
                                        class="d-flex bg-white rounded p-2 mxw-253 w-100 fs-13 font-weight-500 text-heading justify-content-center align-items-center">
                                        <span
                                            class="badge w-28px h-28 bg-gray-01 rounded-circle border d-inline-flex align-items-center justify-content-center">5</span>
                                        <span class="mx-2">Listed Properties</span>
                                        <i class="fas fa-long-arrow-alt-right text-primary"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body pl-xl-6 pr-xl-7 arrow-box">
                                    <h2 class="mb-1"><a href="#"
                                            class="fs-18 font-weight-500 text-dark hover-primary">Pearl
                                            Sanders</a></h2>
                                    <p class="text-gray mb-2">/ Real Estate Broker</p>
                                    <p class="text-gray mb-xl-7 mb-lg-3 mb-md-7 mb-3">Suspe ndisse suscipit sagittis leo
                                        sit
                                        met condim entum eipsum
                                        dolor sit amet</p>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item mr-5">
                                            <a href="#" class="text-heading opacity-7 fs-16 opacity-hover-10"><i
                                                    class="fab fa-twitter"></i></a>

                                        </li>
                                        <li class="list-inline-item mr-5">
                                            <a href="#" class="text-heading opacity-7 fs-16 opacity-hover-10"><i
                                                    class="fab fa-facebook-f"></i></a>

                                        </li>
                                        <li class="list-inline-item mr-5">
                                            <a href="#" class="text-heading opacity-7 fs-16 opacity-hover-10"><i
                                                    class="fab fa-instagram"></i></a>

                                        </li>
                                        <li class="list-inline-item mr-0">
                                            <a href="#" class="text-heading opacity-7 fs-16 opacity-hover-10"><i
                                                    class="fab fa-linkedin-in"></i></a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-md-0" data-animate="fadeInRight">
                        <div class="row no-gutters d-flex align-items-center flex-md-row flex-column-reverse h-100">
                            <div class="col-md-6">
                                <div class="card-body pr-xl-6 pl-xl-7 text-md-right arrow-box arrow-right">
                                    <h2 class="mb-1"><a href="#"
                                            class="fs-18 font-weight-500 text-dark hover-primary">Pearl
                                            Sanders</a></h2>
                                    <p class="text-gray mb-2">/ Real Estate Broker</p>
                                    <p class="text-gray mb-xl-7 mb-lg-3 mb-md-7 mb-3">Suspe ndisse suscipit sagittis leo
                                        sit
                                        met condim entum eipsum
                                        dolor sit amet</p>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item mr-5">
                                            <a href="#" class="text-heading opacity-7 fs-16 opacity-hover-10"><i
                                                    class="fab fa-twitter"></i></a>

                                        </li>
                                        <li class="list-inline-item mr-5">
                                            <a href="#" class="text-heading opacity-7 fs-16 opacity-hover-10"><i
                                                    class="fab fa-facebook-f"></i></a>

                                        </li>
                                        <li class="list-inline-item mr-5">
                                            <a href="#" class="text-heading opacity-7 fs-16 opacity-hover-10"><i
                                                    class="fab fa-instagram"></i></a>

                                        </li>
                                        <li class="list-inline-item mr-0">
                                            <a href="#" class="text-heading opacity-7 fs-16 opacity-hover-10"><i
                                                    class="fab fa-linkedin-in"></i></a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('assets/vendors/images/agent-creative-02.jpg') }}"
                                    class="card-img rounded-0" alt="Pearl Sanders">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('image/fordannouncement.jpeg') }}" style="width: 100%">
                </div>
            </div>
        </div>
    </section>

    <section class="py-lg-11 pt-8 pb-lg-10 position-relative bg-cover"
        style="background-image: url('{{ asset('assets/vendors/images/bg-contact-form-01.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <h2 class="text-white fs-32 lh-163 mb-6 fontfamily">ສົ່ງຂໍ້ຄວາມຫາພວກເຮົາ</h2>
                    <form action="{{ route('commentcreate') }}" method="POST" class="form fontfamily">
                        @csrf
                        <div class="form row">
                            <div class="col-md-6 pr-md-2">
                                <input type="search" name="name"
                                    class="form-control form-control-lg border-0 shadow-none bg-gray-03 placeholder-muted"
                                    placeholder="ຊື່"  required="required">
                            </div>
                            <div class="col-md-6 pl-md-2 pt-md-0 pt-4">
                                <input type="search" name="tel"
                                    class="form-control form-control-lg border-0 shadow-none bg-gray-03 placeholder-muted"
                                    placeholder="ເບີໂທລະສັບ"  required="required">
                            </div>
                            <div class="col-12 pt-4">
                                <textarea class="form-control border-0 shadow-none bg-gray-03 placeholder-muted h-145"
                                    name="message" id="exampleFormControlTextarea1" placeholder="ເນື້ອໃນ" required="required"></textarea>
                            </div>
                            <div class="col-12 pt-6">
                                <button type="submit" class="btn btn-primary font-weight-600 btn-lg">
                                    ສົ່ງ
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 offset-xl-1 custom-lg-map-height-full pr-lg-0 pt-8 pt-lg-0">
                    <div class="h-lg-full">
                        <div class="position-relative h-lg-full">
                            <div class="map-responsive">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2682.490598892659!2d102.63445708654734!3d18.0430816314005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31245d3b3d08b2f7%3A0x72dbccb62d358314!2sDongdok%20Campus%20Market!5e0!3m2!1sen!2sla!4v1639991999482!5m2!1sen!2sla"
                                    height="530" style="border:0;width:100%;" allowfullscreen="" loading="lazy">
                                </iframe>
                            </div>
                        </div>
                        <div
                            class="mb-0 p-3 bg-white shadow rounded-lg position-absolute pos-fixed-bottom mb-4 ml-4 mb-lg-8 ml-lg-9 lh-17">
                            <h4 class="fs-18 text-dark">Visit our office at</h4>
                            <p>62 Gresham St, Victoria Park <br />
                                WA 6100, Australia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
