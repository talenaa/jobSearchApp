@extends('layouts.app')
@section('content')

    <div class="backBtnContainer">
        <a href="{{ route('home') }}" class="backBtn">⬅️</a>
    </div>
    <h2 class="progressTitle">Progress</h2>
        <div class="offer">
            <div class="offerTime">
                <table class="tableShow">
                        <tr>
                            <th scope="col">Comments</th>
                            <th scope="col">Created</th>
                            <th scope="col">Updated</th>
                        </tr>
                    @foreach ($offer->feedback as $news)
                        <tr>
                            <td>{{$news->news}}</td>
                            <td>{{$news->updated_at}}</td>
                            <td>{{$news->created_at}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="offerContent">
                <p class="offerEntry">{{$offer['entry']}}</p>
            </div>
        </div>
@endsection