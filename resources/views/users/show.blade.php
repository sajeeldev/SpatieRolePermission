@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2>Show User</h2>
            <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name }}
        </div>
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
        <div class="form-group">
            <strong>Roles:</strong>
            @if (!empty($user->getRoleNames()))
                @foreach ($user->getRoleNames() as $v)
                    <span>{{ $v }}</span>
                @endforeach
            @endif
        </div>
    </div>

@endsection
