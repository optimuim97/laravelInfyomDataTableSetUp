@extends('front_office.layouts.master')

@section('title')

@endsection

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="besoin">
                    <div class="besoin--title">
                        <h1>Précisez votre besoin </h1>
                        <img src="{{ asset('front_office/assets/icones/Groupe-316.png') }}" alt="besoin--img">
                    </div>
        
                    <div class="besoin--body">
                        <form action="{{ url('/publier-besoin') }}" method="POST">
                            @csrf
                            <div class="group--form">
                                <label for="title">Titre</label>
                                <input type="text" name="title" required>
                            </div>

                            <div class="group--form">
                                <label for="description">Description de votre besoin</label>
                                <textarea name="description" id="description"  required></textarea>
                            </div>

                            <div class="mt-4">
                                <label >
                                    <input type="checkbox" name="radio" required>
                                    En cliquant sur ‘POSTER’, vous confirmez que vous acceptez les <a href="">Conditions Générales </a> ainsi que les <a href="">Politiques de Protection des Données</a> .
                                </label>   
                            </div>   

                            <button type="submit" class="btn--orange w-100 mt-4">
                                Publier
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
