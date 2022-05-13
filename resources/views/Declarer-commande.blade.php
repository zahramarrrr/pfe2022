@extends("layouts.commerçant")
@section("content")
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Déclaration d'une commande</h1>
    </div><!-- End Page Title -->

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Déclaration d'une commande</h2><!-- form title -->
                </div>
                <div class="card-body">
                    @if(Session::has('post_add'))
                    <span>{{Session::get('post_add')}} </span>
                    @endif
                    <form class="register-form" id="register-form" method="post" action="{{ route('save.post') }}">
                        @csrf
                        <div class="form-row m-b-55">

                            <div class="value">

                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="name">Nom</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Nom" id="Nom">

                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="name">Prénom</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Prenom" id="Prenom"  >

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">

                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="name">Adresse d'email</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Email" id="Email">

                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="name" class="label1">Télèphone</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Telephone" id="Telephone"  >

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">

                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="name">Adresse</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Adresse" id="Adresse"  >

                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="name" >Gouvernorat</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <div class="rs-select2 js-select-simple select--no-search">
                                                    <select   name="Governorat" id="Governorat" >
                                                        <option value="0">Gouvernorat</option>
                                                        <option value="ARIANA">ARIANA</option>
                                                        <option value="BEJA">BEJA</option>
                                                        <option value="BEN AROUS">BEN AROUS</option>
                                                        <option value="BIZERTE">BIZERTE</option>
                                                        <option value="GABES">GABES</option>
                                                        <option value="GAFSA">GAFSA</option>
                                                        <option value="JENDOUBA">JENDOUBA</option>
                                                        <option value="KAIROUAN">KAIROUAN</option>
                                                        <option value="KASSERINE">KASSERINE</option>
                                                        <option value="KEBILI">KEBILI</option>
                                                        <option value="KEF">KEF</option>
                                                        <option value="MAHDIA">MAHDIA</option>
                                                        <option value="MANOUBA">MANOUBA</option>
                                                        <option value="MEDENINE">MEDENINE</option>
                                                        <option value="MONASTIR">MONASTIR</option>
                                                        <option value="NABEUL">NABEUL</option>
                                                        <option value="SFAX">SFAX</option>
                                                        <option value="SIDI BOUZID">SIDI BOUZID</option>
                                                        <option value="SILIANA">SILIANA</option>
                                                        <option value="SOUSSE">SOUSSE</option>
                                                        <option value="TATAOUINE">TATAOUINE</option>
                                                        <option value="TOZEUR">TOZEUR</option>
                                                        <option value="TUNIS">TUNIS</option>
                                                        <option value="ZAGHOUAN">ZAGHOUAN</option>
                                                    </select>
                                                    <div class="select-dropdown"></div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">

                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="name">Ville</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Ville" id="Ville"  >

                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="name">Code postal</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Code_postal" id="Code_postal"  >

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">

                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="name">ID commande</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text"  name="ID_commande" id="ID_commande"  >

                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="name"></div>
                                        <div class="input-group-desc">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">

                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="name">Prix totale</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Prix" id="Prix"  >

                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="name"  >Paiemenent</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <div class="rs-select2 js-select-simple select--no-search">
                                                    <select name="Paiement">
                                                        <option disabled="disabled" selected="selected" id="Paiement">Mode de paiement</option>
                                                        <option value="livraison">a la livraison</option>
                                                        <option value="enligne">en ligne</option>

                                                    </select>
                                                    <div class="select-dropdown"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">

                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="name">Poids</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Poids" id="Poids">

                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="name">Description</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Description" id="Description">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div>
                            <a href="{{route('list')}}"> <input class="btn btn--radius-2 btn--red" type="submit" value="Déclarer" id="submit" name="submit"> </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection