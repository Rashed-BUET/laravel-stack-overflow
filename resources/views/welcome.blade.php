@extends('layouts.app_without_sidebar')

<style>

</style>

@section('content')
    <div class="container">
        @foreach($questions as $question)


            <div class="panel">
                <div class="row">
                    <h2>{{$question->title}}</h2>
                </div>
                <div class="row">
                    <div class="col-md-2">


                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <p>{{$question->body}}</p>
                        </div>
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4"><h6>{{$question->name}}</h6></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
@endsection
