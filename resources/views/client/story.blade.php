@extends('layouts.client')

@section('content')
    <section class="story-section">
        <div class="container">
            <h2>Our Story</h2>
            <p>Our Journey, From Lebanon to New Zealand</p>
        </div>
    </section>

    <section class="our_story">
        <div class="container">
            <div class="row padding">
                <div class="col-md-5">
                    <div class="story-image">
                        <img src="{{asset('../images/shefco.png')}}" alt="Shefco logo">
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="info-section">
                        <p>Baklawa Café provides the single authentic Middle Eastern Cuisine in all of Auckland. Under
                            the Shefco Business we specialise in Lebanese cuisine in specific, and Arabian in
                            general.</p>
                        <h1>Founder</h1>
                        <hr/>
                        <p>Shefco was started by Abdul Majid El-Saddik, a Lebanese immigrant, currently a well-known
                            Auckland businessman, who had a vision to introduce authentic Lebanese Cuisine to the NZ
                            market.</p>
                    </div>
                </div>
            </div>
            <div class="row padding">
                <div class="col-md-12">
                    <h1>History</h1>
                    <hr>
                    <p><strong>Lebanese food</strong> has a distinct flavor to it- thanks to a rich cultural history and
                        a profound impact of region on its flavor, Lebanese cuisines is definitely one of the best one
                        can find anywhere in the world, and Shefco New Zealand Limited was started in 1995 to fulfil the
                        new Zealand market with the rich historical Lebanese cuisine.</p>
                </div>
                <div class="col-md-12">
                    <h1>Highlights</h1>
                    <hr>
                    <p>Shefco New Zealand has supplied the New Zealand market with authentic Lebanese food for last 20
                        years and is committed to continue to provide the best quality of food so our consumers can
                        enjoy all sorts of Mediterranean foods with the Lebanese touch.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
