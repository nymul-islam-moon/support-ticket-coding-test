@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Welcome, {{ Auth::guard('admin')->user()->name }}</p>
    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">

                    <h4>{{ __('Existing Support Tickets') }}</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>Description</th>
                                <th>Response</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tickets as $ticket)
                                <tr>
                                    <td>{{ $ticket->id }}</td>
                                    <td>{{ $ticket->name }}</td>
                                    <td>{{ $ticket->description }}</td>
                                    <td>
                                        @if( $ticket->status == false )
                                            <a href="{{ route('admin.close.ticket', $ticket) }}">Close</a>
                                        @else
                                            Closed
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
