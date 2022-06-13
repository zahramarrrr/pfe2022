@extends("layouts.admin")
@section("content")
<main id="main" class="main">
    <section class="section dashboard">

<div class="card">


<div class="card-body">
  <h5 class="card-title">commande <span>| par livreur</span></h5>

  {{$chart12->container() }}

</div>

</div>
<h5>difference entre livraison et affectation pour chaque livreur les 15 derniers jours</h5>
    </section></main>
    <script src="{{$chart12->cdn() }}"></script>
{{$chart12->script()}}

    @endsection