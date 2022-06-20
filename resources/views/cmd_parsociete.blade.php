@extends("layouts.admin")
@section("content")
<main id="main" class="main">
    <section class="section dashboard">

<div class="card">


<div class="card-body">
  <h5 class="card-title">Visualisation <span>| Quantité des commandes pour chaque société</span></h5>

  {{$chart3->container() }}

</div>

</div>

    </section></main>
    <script src="{{$chart3->cdn() }}"></script>
{{$chart3->script()}}

    @endsection