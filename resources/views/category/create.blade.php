@include('layout.header')
<h3>Create</h3>
<form action="{{ route('category.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="category_name">Category Name:</label>
        <input type="text" name="category_name" id="category_name" placeholder="Input Category Name" autofocus>
    </div>
    <button type="submit" class="button">Submit</button>
</form>
@include('layout.footer')