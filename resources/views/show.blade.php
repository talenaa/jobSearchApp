@extends('layouts.app')

@section('content')
        <div class="offer">
            <h2 class="titleShow">Entries</h2>
            <div class="offerTime">
                <table class="table table-bordered">
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