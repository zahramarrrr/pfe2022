
@extends("layouts.admin")
@section("content")
<main id="main" class="main">
    <section class="section dashboard">

    <div class="card">


<div class="card-body">
  <h5 class="card-title">commande <span>| par agent</span></h5>

  {{$chart10->container() }}

</div>

</div>

</section></main>
 

<script src="{{$chart10->cdn() }}"></script>
{{$chart10->script()}}

    @endsection