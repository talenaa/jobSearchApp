@extends('layouts.app')
@section('content')

    <div class="backBtnContainer">
        <a href="{{ route('home') }}" class="backBtn">Return Home</a>
    </div>

    <div class="tableOffer">
        <form action="{{ route('store') }}" method="POST" class="form-container">

        @csrf

            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="enterprise" class="form-label">Enterprise</label>
                <input type="text" name="enterprise" id="enterprise" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="workspace" class="form-label">Workspace</label>
                <input type="text" name="workspace" id="workspace" class="form-input" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="form-button">Add Offer</button>
            </div>
        </form>
    </div>
@endsection