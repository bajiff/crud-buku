@include('layout.header')
<h3>Edit Category</h3>
<form action="{{ route('category.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="category_name">Category:Name</label>
    <input type="text" name="category_name" id="category_name" value="{{ $category->category_name }}" autofocus>
    <button type="submit" class="button">Update</button>
</form>
@include('layout.footer')