@include('layout.header')
<h3>Edit Publisher</h3>
<form action="{{ route('publisher.update', $publisher->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="publisher_name">Publisher Name</label>
    <input type="text" name="publisher_name" id="publisher_name" value="{{ $publisher->publisher_name }}" autofocus>
    <button type="submit" class="button">Update</button>
</form>
@include('layout.footer')