@extends("layouts.admin")
@section("content")
<main id="main" class="main">
    <section class="section dashboard">


        <div class="card">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    {{$chart15->container() }}

                </div>
            </div>
        </div>
    </section>
</main>
<script src="{{$chart15->cdn() }}"></script>
{{$chart15->script()}}
@endsection