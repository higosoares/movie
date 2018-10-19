@extends('layouts.app')

@section('content')

    <div class="w3l-medile-movies-grids">

        <!-- /movie-browse-agile -->

        <div class="movie-browse-agile">
            <!--/browse-agile-w3ls -->
            <div class="browse-agile-w3ls general-w3ls">
                <div class="tittle-head">
                    <h4 class="latest-text">{{ $category->tx_name_category }} Movies </h4>
                    <div class="container">
                        <div class="agileits-single-top">
                            <ol class="breadcrumb">
                                <li><a href="/home">Home</a></li>
                                <li class="active">Genres</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="browse-inner">
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m7.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Light B/t Oceans</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m8.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">The BFG</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m9.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Central Intelligence</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m10.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Don't Think Twice</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m11.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">X-Men</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m12.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Greater</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <!-- /latest-movies1 -->
                    <div class="browse-inner-come-agile-w3">
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/c7.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Mike-Dave</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/c8.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Bad Moms</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/c9.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Barber Shop</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/c10.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Nine Leaves</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/c11.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Billy Lynn’s </a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/c12.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">War on Everyone</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <!-- //latest-movies1 -->
                    <!-- /latest-movies1 -->
                    <div class="browse-inner">
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m7.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Light B/t Oceans</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m8.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">The BFG</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m9.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Central Intelligence</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m10.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Don't Think Twice</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m11.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">X-Men</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m12.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Greater</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <!-- //latest-movies1 -->
                    <div class="browse-inner-come-agile-w3">
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/c10.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Nine Leaves</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/c2.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Dirty Grandpa</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/c3.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Ride Along</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/c4.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">The Boss</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/c5.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Keanu</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/c6.jpg') }}"
                                                                                          title="album-name" alt=" ">
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Ice Age</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>


                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="ribben two">
                                <p>NEW</p>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!--//browse-agile-w3ls -->
            <div class="blog-pagenat-wthree">
                <ul>
                    <li><a class="frist" href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a class="last" href="#">Next</a></li>
                </ul>
            </div>
        </div>
        <!-- //movie-browse-agile -->
        <!--body wrapper start-->
        <!--body wrapper start-->
        <div class="review-slider">
            <h4 class="latest-text">Movie Reviews</h4>
            <div class="container">
                <div class="w3_agile_banner_bottom_grid">
                    <div id="owl-demo" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper"
                                 style="width: 3996px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-444px, 0px, 0px);">
                                <div class="owl-item" style="width: 222px;">
                                    <div class="item">
                                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                            <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                        src="{{ asset('img/m13.jpg') }}" title="album-name" class="img-responsive"
                                                        alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                                aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Citizen Soldier</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                                               aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 222px;">
                                    <div class="item">
                                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                            <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                        src="{{ asset('img/m11.jpg') }}" title="album-name" class="img-responsive"
                                                        alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                                aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">X-Men</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                               aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 222px;">
                                    <div class="item">
                                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                            <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                        src="{{ asset('img/m12.jpg') }}" title="album-name" class="img-responsive"
                                                        alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                                aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Greater</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                               aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 222px;">
                                    <div class="item">
                                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                            <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                        src="{{ asset('img/m7.jpg') }}" title="album-name" class="img-responsive"
                                                        alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                                aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Light B/t Oceans</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                               aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 222px;">
                                    <div class="item">
                                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                            <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                        src="{{ asset('img/m8.jpg') }}" title="album-name" class="img-responsive"
                                                        alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                                aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">The BFG</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                               aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 222px;">
                                    <div class="item">
                                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                            <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                        src="{{ asset('img/m9.jpg') }}" title="album-name" class="img-responsive"
                                                        alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                                aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Central Intelligence</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                                               aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 222px;">
                                    <div class="item">
                                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                            <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                        src="{{ asset('img/m10.jpg') }}" title="album-name" class="img-responsive"
                                                        alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                                aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Don't Think Twice</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                               aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 222px;">
                                    <div class="item">
                                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                            <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                        src="{{ asset('img/m17.jpg') }}" title="album-name" class="img-responsive"
                                                        alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                                aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Peter</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                               aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 222px;">
                                    <div class="item">
                                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                            <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                        src="{{ asset('img/m15.jpg') }}" title="album-name" class="img-responsive"
                                                        alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                                aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">God’s Compass</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                               aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="owl-controls clickable">
                            <div class="owl-pagination">
                                <div class="owl-page active"><span class=""></span></div>
                                <div class="owl-page"><span class=""></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--body wrapper end-->
            </div>
        </div>
    </div>
    <!-- //w3l-medile-movies-grids -->

@endsection