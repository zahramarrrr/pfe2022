
@extends("layouts.admin")
@section("content")
<main id="main" class="main">
    <section class="section dashboard">

    <div class="card">


<div class="card-body">
  <h5 class="card-title">commande <span>| par livreur</span></h5>

  {{$chart11->container() }}

</div>

</div>

</section></main>
 

<script src="{{$chart11->cdn() }}"></script>
{{$chart11->script()}}

    @endsection