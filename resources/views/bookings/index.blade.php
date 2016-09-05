@extends('welcome')


@section('content')

            <table>
                    <thead>
                    <tr>
                        <th data-field="id">Date</th>
                        <th data-field="name">Customer</th>
                        <th data-field="price">Facility</th>
                        <th data-field="price">Time In</th>
                        <th data-field="price">Time Out</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <td>{{$booking -> date}}</td>
                            <td>{{App\Customer::find($booking->customer_id)->name}}</td>
                            <td>{{App\Facility::find($booking->facility_id)->name}}</td>
                            <td>{{$booking -> time_in}}</td>
                            <td>{{$booking -> time_out}}</td>

                        </tr>
                    @endforeach

                    <p></p>
                    </tbody>
        </table>
@endsection