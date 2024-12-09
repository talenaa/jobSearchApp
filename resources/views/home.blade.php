@extends('layouts.app')

@section('content')
    <div class="offerTable">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Enterprise</th>
                    <th scope="col">Description</th>
                    <th scope="col">Workspace</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($offers as $offer)
                <tr>
                    <td>{{$offer->Title}}</td>
                    <td>{{$offer->Enterprise}}</td>
                    <td>{{$offer->Description}}</td>
                    <td>{{$offer->Workspace}}</td>
                    <td>
                        @if ($offer->status===1)
                        Active
                        @else
                        Inactive
                        @endif
                    </td>
                    <td>{{$offer->Applied}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection