@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>{{ __('Create Support Ticket') }}</h4>
                    <form action="" method="POST" class="mb-4">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter ticket title" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter ticket description" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Ticket</button>
                    </form>

                    <h4>{{ __('Existing Support Tickets') }}</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($tickets as $ticket)
                                <tr>
                                    <td>{{ $ticket->id }}</td>
                                    <td>{{ $ticket->title }}</td>
                                    <td>{{ $ticket->description }}</td>
                                    <td>{{ ucfirst($ticket->status) }}</td>
                                    <td>{{ $ticket->created_at->format('d M Y') }}</td>
                                    <td>
                                        <!-- Example actions: view, edit, delete -->
                                        <a href="{{ route('admin.tickets.show', $ticket->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('admin.tickets.edit', $ticket->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.tickets.destroy', $ticket->id) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
