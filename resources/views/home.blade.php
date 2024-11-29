@extends('layouts.app')

@section('content')
    <div class="offersTable">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Company</th>
                    <th scope="col">Status</th>
                    <th scope="col">Applied</th>
                    <th scope="col">Workspace</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($offers as $offer)
                <tr>
                    <td>{{$offer->Payment}}</td>
                    <td>{{$offer->Company}}</td>
                    <td>{{$offer->Status}}</td>
                    <td>{{$offer->Applied}}</td>
                    <td>{{$offer->Workspace}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection