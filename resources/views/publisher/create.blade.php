@include('layout.header')
<h3>Create</h3>
<form action="{{ route('publisher.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="publisher_name">Publisher Name:</label>
        <input type="text" name="publisher_name" id="publisher_name" placeholder="Input Publisher Name" autofocus>
    </div>
    <button type="submit" class="button">Submit</button>
</form>
@include('layout.footer')