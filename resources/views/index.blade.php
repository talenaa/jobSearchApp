@extends('layouts.app')
@section('content')

    <div class="backBtnContainer">
        <a href="{{ route('create') }}" class="backBtn">Add Offer</a>
    </div>

    <div class="offerTable">
        @if($offers->isEmpty())
            <p>No offers available.</p>
        @else
            <div class="table-responsive">
                <div class="indexTable">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Enterprise</th>
                                <th scope="col">Description</th>
                                <th scope="col">Workspace</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created at</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach ($offers as $offer)
                            <tr>
                                <td>{{ $offer->id }}</td>
                                <td>{{ $offer->title }}</td>
                                <td>{{ $offer->enterprise }}</td>
                                <td>{{ $offer->description }}</td>
                                <td>{{ $offer->workspace }}</td>
                                <td>{{ $offer->status === 1 ? 'Active' : 'Inactive' }}</td>
                                <td>{{ $offer->created_at->format('d M Y, H:i') }}</td>
                                <td><a class="crudBtn" href="/show/{{$offer->id}}">👁️</a></td>
                                <td><a class="crudBtn" href="edit/{{$offer->id}}">📝</a><a class="crudBtn" href="?action=delete&id={{$offer->id}}">🗑️</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
