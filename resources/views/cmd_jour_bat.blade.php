@extends("layouts.admin")
@section("content")
<main id="main" class="main">
    <section class="section dashboard">
    {{$chart5->container() }}
<H5>les commandes livree et retournée de 7 jours dernier selon date l pc 
    bech na3rfou enehou nhar li tlivri fih akther f jom3a
</H5>
    </section>
</main>
<script src="{{$chart5->cdn() }}"></script>
{{$chart5->script()}}
@endsection