<div>
    @include('livewire.create')
    @include('livewire.update')

    <table class="table table-bordered mt-5">
        <thead>
            <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($emp as $value)
            <tr>
                    <td>{{ $value->id }} </td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>
                        <button type="button" wire:click="edit({{ $value->id }})" class="btn btn-primary" data-toggle="modal" data-target="#updateModal" data-whatever="@mdo">Edit</button>
                        <button type="button" wire:click="delete({{ $value->id }})" class="btn btn-danger" data-toggle="modal" data-whatever="@mdo">Delete</button>
                    </td>
               
            </tr>
                
            @endforeach
        </tbody>

    </table>
</div>
