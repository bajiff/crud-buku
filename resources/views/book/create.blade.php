@include('layout.header')
<h3>Add Book</h3>
<form action="{{ route('book.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" placeholder="Title" autofocus>
    </div>
    <div class="form-group">
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" placeholder="Author Name" autofocus>
    </div>
    <div class="form-group">
        <label for="book_price">Book Price:</label>
        <input type="number" name="book_price" id="book_price" placeholder="Input Book Name" autofocus>
    </div>
    
    <div class="form-group">
        <label for="publication_year">Publication Year:</label>
        <select name="publication_year" id="publication_year">
            @for ($i = 1901; $i <= 2099; $i = $i + 1)

                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
    </div>

    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="publisher_id">Publisher Name</label>
        <select name="publisher_id" id="publisher_id">
            @foreach ($publishers as $publisher)
                <option value="{{ $publisher->id }}">{{ $publisher->publisher_name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="button">Submit</button>
</form>
@include('layout.footer')