<section class="add-slot-form">
    <h1>Add Slots</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('slots.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Slot Name</label>
            <input type="text" name="name" id="name" placeholder="Enter Slot Name" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="slug">Slot Slug</label>
            <input type="text" name="slug" id="slug" placeholder="Enter Slot Slug" value="{{ old('slug') }}" required>
        </div>
        <div class="form-group">
            <label for="image_url">Slot Image</label>
            <input type="file" name="image_url" id="image_url" accept="image/*" required>
        </div>
        <button type="submit" class="btn">Add Slot</button>
    </form>
</section>

<style>

</style>