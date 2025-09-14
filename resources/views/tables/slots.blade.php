<section>
<div class="table-container">
    <table class="slot-table">
        <thead>
            <tr>
                <th class="table-header">Name</th>
                <th class="table-header">Image</th>
                <th class="table-header">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($slots as $slot)
                <tr class="table-row">
                    <td class="table-cell">{{ $slot->name }}</td>
                    <td class="table-cell">
                        @if ($slot->image_url)
                            <img class="slot-image" src="{{ asset('storage/' . $slot->image_url) }}" alt="{{ $slot->name }}" width="100">
                        @endif
                    </td>
                    <td class="table-cell">
                        <form action="{{ route('slots.destroy', $slot->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="delete-button" onclick="return confirm('Вы уверены?');">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</section>
