@extends("layouts.admin")
@section("content")
<main id="main" class="main">
    <section class="section dashboard">


        <div class="card">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    {{$chart->container() }}

                </div>
            </div>
        </div>
    </section>
</main>
<script src="{{$chart->cdn() }}"></script>
{{$chart->script()}}
@endsection