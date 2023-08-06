<div>
    <button wire:click="toggleTable" class="bg-blue-500 text-white px-4 py-2 rounded">
        {{ $showTable ? 'Hide Table' : 'Show Table' }}
    </button>

    @if ($showTable)
    <table class="table-auto w-full mt-4">
        <thead>
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td class="border px-4 py-2">{{ $user->name }}</td>
                <td class="border px-4 py-2">{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
