@extends('welcome')

@section('content')


            {!! Form::open(['url' => 'facilities']) !!}
            <div class="form-container">
                @include("facilities.form")
            </div>
            {!! Form::close() !!}

            

          


@endsection