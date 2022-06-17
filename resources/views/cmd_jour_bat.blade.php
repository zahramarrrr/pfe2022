@extends("layouts.admin")
@section("content")
<main id="main" class="main">
    <section class="section dashboard">
    {{$chart5->container() }}

    </section>
</main>
<script src="{{$chart5->cdn() }}"></script>
{{$chart5->script()}}
@endsection