    <div class="product__card">
        <div class="new"><p>{{ $product->category->name }}</p></div>
        <a href="page--details.html">
            <div class="product__card--illus">
                <img src="{{ asset('front_office/assets/icones/windows-10-s.jpg.png') }}" alt="product--pic">
            </div>
            <div class="product__card--descrip">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>{{ $product->name }}</p>
                <h3>XOF {{ $product->price }}</h3>
            </div>
        </a>

        <div class="product__card--overlay">
            <div class="product__card--btns">
                <div class="product__card--btns__div">
                    <button class="btn--orange" wire:click.prevent='addItem({{ $product->id }})'>
                        <a href="">
                            Achetez au panier
                        </a>
                    </button>

                    <button class="btn--white">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
