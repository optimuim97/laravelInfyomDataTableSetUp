@extends('front_office.layouts.master')

@section('title')
Accueil 
@endsection

@section('content')
<main>
    <header class="header ">
        <div class="header--text">
            <h1>Achetez une licence windows 10 pas chère</h1>
            <p>Windows 10 est un système d'exploitation très largement utilisé a travers le monde</p>
            <button class="btn--blue">
                <a href="#header--parts">
                    Profiter de l'offre
                </a>
            </button>
        </div>
    </header>
    <!--  -->
    <!-- /*/*/ features */*/* -->
    <div class="container">
        <div class="features ">
            <div class="row d-flex align-items-center">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="features--card">
                        <img src="{{ asset('front_office/assets/icones/discount.png') }}" alt="img--features">
                        <p>Économisez plus <br> Avec des remises folles </p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="features--card">
                        <img src="{{ asset('front_office/assets/icones/Groupe-351.png') }}" alt="img--features">
                        <p>Obtenez 10% de remboursement Après chaque achat </p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="features--card">
                        <img src="{{ asset('front_office/assets/icones/clock.png') }}" alt="img--features">
                        <div class="features--card__text">
                            <p>24/7 Livraison Rapide </p>
                            <span>Nous traitons vos demandes du lundi au dimanche y compris les jours fériés. Obtenez vos clés en quelques minute </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /*/*/fin features */*/* -->

    <!-- Deals -->
    <section id="moment--deal " >
        <div class="container">

            <div class="divider--part">
                <div class="divider--part__title">
                    <p>Meilleures ventes</p>
                </div>
            </div>

            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5  moment--dealpic">
                    <img src="{{ asset('front_office/assets/icones/26df48ad541fae838b0b776fa7be2c27.png') }}" alt="moment--dealpic" >
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                    <div class="row">
                        @foreach($products->take(3) as $product)
                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                @livewire('product-unit', ['product'=>$product])
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin -->

    <!-- moments--produits -->
    <section id="product--moment">
        <div class="container">
            <h2 class="title--part">Nos logiciels</h2>
            <div class="divider--part">
                <div class="divider--part__title">
                    <p>Meilleures ventes</p>
                </div>
            </div>

            <div class="row">
                  @foreach($products->take(3) as $product)
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2">
                        @livewire('product-unit', ['product'=>$product])
                    </div>
                @endforeach
            </div>

            <form action="">
                <button class="btn--voirPlus w-100 mt-5">
                    <i class="fas fa-redo"></i> &nbsp;  Voir plus
                </button>
            </form>
        </div>
    </section>
    <!-- fin -->


    <!-- accordion -->
    <section id="accordion--index">
        <div class="container">
            <h2 class="title--part">Foire aux questions</h2>
        </div>

        <div class="container">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <div class="accordion__number">
                        <p>1</p>
                    </div>
                    <div>
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Comment réinstaller mon produit ?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion__number">
                        <p>2</p>
                    </div>
                    <div>
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Guides d’installation - Téléchargement, installation et activation
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion__number">
                        <p>3</p>
                    </div>
                    <div>
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Je n’ai pas reçu ma clé de produit
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion__number">
                        <p>4</p>
                    </div>
                    <div>
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                La clé de produit que j’ai achetée est invalide ou déjà utilisée
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion__number">
                        <p>5</p>
                    </div>
                    <div>
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Comment acheter ?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin accordion -->


    <section id="news--index">
        <div class="container">
            <div class="row">

                @foreach ($articles as $item)    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="news--index__card">
                            <div class="news--index__card--illustration">
                                <img src="{{ asset('front_office/assets/images/a1371e91-5e1f-4cd8-9265-a9c57b7d39ae-620x372.png') }}" alt="news--img">
                            </div>

                            <div class="news--index__card--description">
                                <span> {{ $item->created_at }} </span>
                                <h4>{{  $item->title }}</h4>
                                <p> {{ $item->description }}</p>
                                <button class="btn--orange">
                                    <a href="{{ route('article') }}">Read more</a>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach

              
            </div>
        </div>
    </section>
    <!-- fin accordion -->
</main>
@endsection
