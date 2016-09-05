@extends('welcome')


@section('content')
<!--
            <table>
                    <thead>
                    <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">Email</th>
                        <th data-field="price">Phone</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer -> name}}</td>
                        <td>{{$customer -> email}}</td>
                        <td>{{$customer -> phone}}</td>
                    </tr>
                    @endforeach

                    </tbody>
        </table>
-->
  <ul class="collection">
    @foreach($customers as $customer)

        <li class="collection-item avatar">
        <img src="http://lorempixel.com/400/200/people/?/" alt="" class="circle">
        <span class="title">{{$customer -> name}}</span>
        <p>{{$customer -> organisation}} <br>
            <b>Email: </b>{{$customer -> email}} <br>
            <b>Phone: </b>{{$customer -> phone}} <br>
        </p>
        <a href="#!" class="secondary-content"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        </li>

    @endforeach
  </ul>


@endsection