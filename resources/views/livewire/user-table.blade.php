<div>
    @include('components.alert_success')

    <div class="mb-3">
        <input type="text" class="form-control" wire:model.live='search' placeholder="search user">
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)
                <tr>
                    <td>{{ $users->firstItem() + $index }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.show',$user->id) }}" class="badge bg-primary">Detail</a>
                        <a href="{{ route('users.edit',$user->id) }}" class="badge bg-warning">Edit</a>
                        <button wire:click='delete({{ $user->id }})' class="badge bg-danger">Delete</button>
                        {{-- <a class="badge bg-danger">Delete</a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
