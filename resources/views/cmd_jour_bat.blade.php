@extends("layouts.admin")
@section("content")
<main id="main" class="main">
    <section class="section dashboard">
    <div class="card">
            <div class="card-body">
            <h5 class="card-title">Visualisation  <span>| Les commandes livées par rapport aux commandes retournées</span></h5>

    {{$chart5->container() }}

    </section>
</main>
<script src="{{$chart5->cdn() }}"></script>
{{$chart5->script()}}
@endsection