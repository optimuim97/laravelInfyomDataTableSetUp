<div>
    <div class="navigation--blue">
        <div class="container-fluid">
            <div class="natop">
                <ul>
                    <li><i class="fas fa-phone-alt"></i> &nbsp; (+225) 00 00 00 00</li>
                    <li><a href="#"><i class="fas fa-envelope"></i> &nbsp; hello@Uppertechs.com</a></li>
                </ul>

                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> &nbsp; Location store</li>
                    <li><i class="fas fa-pen-square"></i>&nbsp; Blog</li>
                    <li><i class="fas fa-shield-alt"></i>&nbsp; Guarantee</li>
                    <li><i class="fas fa-credit-card"></i> &nbsp; Payment</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- *-*- Navbar*-*- -->
    <nav class="navigation ">
        <div class="container-fluid">

            <!-- ************** -->
            <div class="navigation--top">
                <div class="navigation--top__logo">
                    <a href="index.html"><img src="{{ asset('front_office/assets/icones/FullColor_alter.png') }} " alt="logo"></a>
                </div>

                <div class="navigation--top__shop">
                    <form action="">
                        <input type="text" placeholder="Rechercher un produit...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <i class="far fa-times-circle navigation--top__shop--i"></i>
                </div>


                <div class="navigation--top__items">

                    <div class="navigation--top__items--pf">
                        <div class="nav--fav">
                            <div class="cart--i">
                                <a href="">
                                    <i class="far fa-heart"></i>
                                    <span class="count">1</span>
                                </a>
                            </div>

                        </div>

                        <div class="nav--panier">
                            <a href="">
                                <div class="cart--i">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span class="count"> {{ Cart::count() }}</span>
                                </div>

                                <div class="cart--flex">
                                    <h5>Mon panier</h5>
                                    <p>XOF {{ Cart::PriceTotal() }}</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="navigation--top__items--btns">
                        <button class="btn--orange"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="fas fa-user"></i> &nbsp;  Connexion / inscription
                        </button>

                        <!-- <button class="btn--blue " data-toggle="modal" data-target="#exampleModal3">
                            Inscription
                        </button> -->
                    </div>

                    <div class="navigation--top__items--responsive">
                        <ul >
                            <li class="navigation--top__items--responsivesearch"><i class="fa fa-search"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ************** -->
            <div class="navigation--bottom">
                <div class="box--big">
                    <button class="btn--orange categories" >
                        <i class="fas fa-bars"></i> &nbsp; Toutes les catégories
                    </button>

                    <div class="cat--box">
                        <div class="container">
                             <div class="row">
                                <div class="col-md-6 col-lg-3">
                                    <ul>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                     </ul>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <ul>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                     </ul>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <ul>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                     </ul>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <ul>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                         <li><a href="filter--part.html">McAfee 2021</a></li>
                                     </ul>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>


                <ul class="list--categories">
                    <li>
                        <a href="filter--part.html"><i class="fas fa-columns"></i>  Système d'exploitation</a>
                    </li>

                    <li>
                        <a href="filter--part.html"><i class="fab fa-microsoft"></i> Microsoft Office</a>
                    </li>

                    <li>
                        <a href="filter--part.html"> <i class="fas fa-server"></i> Windows server</a>
                    </li>

                    <li>
                        <a href="filter--part.html"><i class="fas fa-shield-alt"></i> Antivirus et sécurité</a>
                    </li>

                    <li>
                        <a href="filter--part.html"><i class="fas fa-cog"></i>Utilitaires</a>
                    </li>

                    <li>
                        <a href="filter--part.html"> <i class="fas fa-layer-group"></i> Les packs </a>
                    </li>
                </ul>

                <button class="btn--blue " >
                   <a href="publier--besoin.html"> <i class="fas fa-pen-square"></i> &nbsp;  Publier un besoin</a>
                </button>
            </div>
        </div>


    </nav>
<!-- *-*-Fin Navbar*-*- -->
</div>
