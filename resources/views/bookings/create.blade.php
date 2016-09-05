@extends('welcome')

@section('content')



            {!! Form::open(['url' => 'bookings']) !!}
            <div class="form-container">
                @include("bookings.form")
            </div>
            {!! Form::close() !!}

            

          


@endsection