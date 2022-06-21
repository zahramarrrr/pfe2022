@extends("layouts.admin")
@section("content")
<main id="main" class="main">
    <section class="section dashboard">
  

        <div class="card">
        <div class="card-body">
  <h5 class="card-title">commande <span>| par gouvernorat</span></h5>
            <div class="col-12">
    
                    {{$chart->container() }}
  
            </div>
        </div>
    </section>
</main>
<script src="{{$chart->cdn() }}"></script>
{{$chart->script()}}
@endsection