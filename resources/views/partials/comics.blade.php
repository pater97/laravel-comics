<section class="homepage">
    <div class="hero_image"></div>
    <section class="container-fluid card_section">
        <div class="container card_container">
            <!-- titolo blue  -->
            <div class="current_series brand_bk">
                CURRENT SERIES
            </div>
            <!-- contenirore cards -->
            <div class="row g-4">
                @foreach($cards as $index=>$card)
                <div class="col-md-2">
                    <a href="{{route('comic', ['id' => $index])}}" class="text-decoration-none">
                    <div class="card">
                        <img src="{{$card['thumb']}}" alt="">
                        <h5>
                            {{strtoupper($card['series'])}}
                        </h5>
                    </div>
                </a>
                </div>
                @endforeach
            </div>
        </div>
        <!-- bottone "load more" -->
        <div class="d-flex justify-content-center pb-5">
            <div class="button brand_bk py-2 px-4 fw-bold">
                LOAD MORE
            </div>
        </div>
    </section>
    <!-- fascia blue  -->
    <section class="blue_option container-fluid brand_bk">
        <div class="container">
            <div class="row">
                <div>
                    <img src="../../img/buy-comics-digital-comics.png" alt="dc phone">
                    <h5>
                        DIGITAL COMICS
                    </h5>
                </div>
                <div>
                    <img src="../../img/buy-comics-merchandise.png" alt="dc phone">
                    <h5>
                        DC MERCHANDISE
                    </h5>
                </div>
                <div>
                    <img src="../../img/buy-comics-subscriptions.png" alt="dc phone">
                    <h5>
                        SUBSCRIPTION
                    </h5>
                </div>
                <div>
                    <img src="../../img/buy-comics-shop-locator.png" alt="dc phone">
                    <h5>
                        COMIC SHOP LOCATOR
                    </h5>
                </div>
                <div>
                    <img src="../../img/buy-comics-subscriptions.png" alt="dc phone">
                    <h5>
                        DC POWER VISA
                    </h5>
                </div>
            </div>
        </div>
    </section>
</section>