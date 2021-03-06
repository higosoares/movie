@extends('layouts.app')

@section('content')
<!-- single -->
<div class="single-page-agile-main">
    <div class="container">
        <!-- /w3l-medile-movies-grids -->
        <div class="agileits-single-top">
            <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li class="active">Single</li>
            </ol>
        </div>
        <div class="single-page-agile-info">
            <!-- /movie-browse-agile -->
            <div class="show-top-grids-w3lagile">
                <div class="col-sm-8 single-left">
                    <div class="song">
                        <div class="song-info">
                            <h3>{{ $movie->tx_name_movie }}</h3>
                        </div>
                        <div class="video-grid-single-page-agileits">
                            <div data-video="dLmKio67pVQ" id="video"> <img src="{{ asset($movie->tx_url_imagem_movie) }}" alt="" class="img-responsive"> <div id="play" style=""></div></div>
                        </div>
                    </div>
                    <div class="song-grid-right">
                        <div class="share">
                            <h5>Share this</h5>
                            <div class="single-agile-shar-buttons">
                                <ul>
                                    <li>
                                        <div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                                        <script>(function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s); js.id = id;
                                                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));</script>
                                    </li>
                                    <li>
                                        <div class="fb-share-button" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a></div>
                                    </li>
                                    <li class="news-twitter">
                                        <a href="https://twitter.com/w3layouts" class="twitter-follow-button" data-show-count="false">Follow @w3layouts</a><script async="" src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?screen_name=w3layouts" class="twitter-mention-button" data-show-count="false">Tweet to @w3layouts</a><script async="" src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    </li>
                                    <li>
                                        <!-- Place this tag where you want the +1 button to render. -->
                                        <div id="___plusone_0" style="position: absolute; width: 450px; left: -10000px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I0_1539562410923" name="I0_1539562410923" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;origin=file%3A%2F%2F&amp;url=file%3A%2F%2F%2FC%3A%2FUsers%2FHIGO%2FDownloads%2Fweb%2Fsingle.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.pt_BR.4UfVnbUTBRU.O%2Fam%3DwQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCN-pSYhVw6cMVNqvuCSt0_t_zWyIw%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1539562410923&amp;_gfid=I0_1539562410923&amp;parent=file%3A%2F%2F&amp;pfname=&amp;rpctoken=11492412" data-gapiattached="true"></iframe></div><div class="g-plusone" data-size="medium" data-gapiscan="true" data-onload="true" data-gapistub="true"></div>

                                        <!-- Place this tag after the last +1 button tag. -->
                                        <script type="text/javascript">
                                            (function() {
                                                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                                po.src = 'https://apis.google.com/js/platform.js';
                                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                            })();
                                        </script>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>

                    <div class="all-comments">
                        <div class="all-comments-info">
                            <a href="#">Comments</a>
                            <div class="agile-info-wthree-box">
                                <form>
                                    <input type="text" placeholder="Name" required="">
                                    <input type="text" placeholder="Email" required="">
                                    <input type="text" placeholder="Phone" required="">
                                    <textarea placeholder="Message" required=""></textarea>
                                    <input type="submit" value="SEND">
                                    <div class="clearfix"> </div>
                                </form>
                            </div>
                        </div>
                        <div class="media-grids">
                            <div class="media">
                                <h5>TOM BROWN</h5>
                                <div class="media-left">
                                    <a href="#">
                                        <img src="{{ asset('img/user.jpg') }}" title="One movies" alt=" ">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
                                    <span>View all posts by :<a href="#"> Admin </a></span>
                                </div>
                            </div>
                            <div class="media">
                                <h5>MARK JOHNSON</h5>
                                <div class="media-left">
                                    <a href="#">
                                        <img src="{{ asset('img/user.jpg') }}" title="One movies" alt=" ">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
                                    <span>View all posts by :<a href="#"> Admin </a></span>
                                </div>
                            </div>
                            <div class="media">
                                <h5>STEVEN SMITH</h5>
                                <div class="media-left">
                                    <a href="#">
                                        <img src="{{ asset('img/user.jpg') }}" title="One movies" alt=" ">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
                                    <span>View all posts by :<a href="#"> Admin </a></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 single-right">
                    <h3>Up Next</h3>
                    <div class="single-grid-right">
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="{{ asset('img/m1.jpg') }}" alt=""></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author"><a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="{{ asset('img/m2.jpg') }}" alt=""></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author"><a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="{{ asset('img/m3.jpg') }}" alt=""></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author"><a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="{{ asset('img/m4.jpg') }}" alt=""></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author"><a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="{{ asset('img/m5.jpg') }}" alt=""></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author"><a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="{{ asset('img/c5.jpg') }}" alt=""></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author"><a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="{{ asset('img/m6.jpg') }}" alt=""></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author">By <a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="single.html"><img src="{{ asset('img/m15.jpg') }}" alt=""></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="single.html" class="title"> Nullam interdum metus</a>
                                <p class="author">By <a href="#" class="author">John Maniya</a></p>
                                <p class="views">2,114,200 views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                </div>



                <div class="clearfix"> </div>
            </div>
            <!-- //movie-browse-agile -->
            <!--body wrapper start-->
            <div class="w3_agile_banner_bottom_grid">
                <div id="owl-demo" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3996px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-666px, 0px, 0px);"><div class="owl-item" style="width: 222px;"><div class="item">
                                    <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m13.jpg') }}" title="album-name" class="img-responsive" alt=" ">
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Citizen Soldier</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 222px;"><div class="item">
                                    <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m11.jpg') }}" title="album-name" class="img-responsive" alt=" ">
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">X-Men</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 222px;"><div class="item">
                                    <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m12.jpg') }}" title="album-name" class="img-responsive" alt=" ">
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Greater</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 222px;"><div class="item">
                                    <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m7.jpg') }}" title="album-name" class="img-responsive" alt=" ">
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Light B/t Oceans</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
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
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 222px;"><div class="item">
                                    <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m8.jpg') }}" title="album-name" class="img-responsive" alt=" ">
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">The BFG</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 222px;"><div class="item">
                                    <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m9.jpg') }}" title="album-name" class="img-responsive" alt=" ">
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Central Intelligence</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 222px;"><div class="item">
                                    <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m10.jpg') }}" title="album-name" class="img-responsive" alt=" ">
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Don't Think Twice</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 222px;"><div class="item">
                                    <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m17.jpg') }}" title="album-name" class="img-responsive" alt=" ">
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Peter</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 222px;"><div class="item">
                                    <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ asset('img/m15.jpg') }}" title="album-name" class="img-responsive" alt=" ">
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">God’s Compass</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                </div></div></div></div>








                    <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
            </div>
            <!--body wrapper end-->


        </div>
        <!-- //w3l-latest-movies-grids -->
    </div>
</div>
@endsection