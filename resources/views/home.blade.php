@extends('layouts.app')

@section('content')
<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h4>Featured Movies</h4>
            </div>
            <div class="col-12">
                <nav>
                    <div class="nav nav-tabs nav-tabs-movies mb-4" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <div class="col-md-2">
                                @movie
                                @endmovie
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h4>Most Popular Movies</h4>
            </div>
            <div class="col-12">

            </div>
        </div>
    </div>
</div>
</section>
@endsection
