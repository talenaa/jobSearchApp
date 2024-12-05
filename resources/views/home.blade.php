@extends('layouts.app')

@section('content')
    <div class="offersTable">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Company</th>
                    <th scope="col">Applied</th>
                    <th scope="col">Workspace</th>
                    <th scope="col">Journey</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($offers as $offer)
                <tr>
                    <td>{{$offer->Payment}}</td>
                    <td>{{$offer->Company}}</td>
                    <td>{{$offer->Applied}}</td>
                    <td>{{$offer->Workspace}}</td>
                    <td>{{$offer->Journey}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection