@include('layout.header')
<h3>Book Detail</h3>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Publication Year</th>
            <th>Category</th>
            <th>Publisher</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->book_price }}</td>
            <td>{{ $book->publication_year }}</td>
                
            <td>{{ $book->categories->category_name }}</td>
            <td>{{ $book->publishers->publisher_name }}</td>
        </tr>
    </tbody>
</table>
@include('layout.footer')