@extends('welcome')


@section('content')

            <table>
                    <thead>
                    <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">Capacity</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($facilities as $facility)
                    <tr>
                        <td>{{$facility -> name}}</td>
                        <td>{{$facility -> capacity}}</td>
                    </tr>
                    @endforeach

                    </tbody>
        </table>
@endsection