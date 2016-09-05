@extends('welcome')

@section('content')



            {!! Form::open(['url' => 'customers']) !!}
            <div class="form-container">
                @include("customers.form")
            </div>
            {!! Form::close() !!}

            

          


@endsection