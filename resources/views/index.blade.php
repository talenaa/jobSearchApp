@extends('layouts.app')
@section('content')

    <div class="backBtnContainer">
        <a href="{{ route('create') }}" class="backBtn">Add Offer</a>
    </div>
        <div class="offerTable">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Enterprise</th>
                        <th scope="col">Description</th>
                        <th scope="col">Workspace</th>
                        <th scope="col">Status</th>
                        <th scope="col">Applied</th>
                        <th scope="col">Comments</th>
                    </tr>
                </thead>

                <tbody>
                @foreach ($offers as $offer)
                    <tr>
                        <td>{{$offer->title}}</td>
                        <td>{{$offer->enterprise}}</td>
                        <td>{{$offer->description}}</td>
                        <td>{{$offer->workspace}}</td>
                        <td>
                            @if ($offer->status===1)
                            Active
                            @else
                            Inactive
                            @endif
                        </td>
                        <td><a class="crudBtn" href="/show/{{$offer->id}}">👁️</a><a class="crudBtn"
                            href="edit/{{$offer->id}}">📝</a><a class="crudBtn" href="?action=delete&id={{$offer->id}}">🗑️</a></td>
                        <td>{{$offer->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection