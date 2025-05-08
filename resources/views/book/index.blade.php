@include('layout.header')
<h3>Book</h3>
<a href="{{ route('book.create') }}" class="button">Add Book</a>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th >Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Publication Year</th>
                    <th>Cateogry</th>
                    <th ">Publisher Name</th>
                    <th ">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allBook as $key => $r)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td width="250px">{{ $r->title }}</td>
                    <td>{{ $r->author }}</td>
                    <td>{{ $r->book_price }}</td>
                    <td>{{ $r->publication_year }}</td>
                    <td>{{ $r->categories->category_name }}</td>
                    <td>{{ $r->publishers->publisher_name }}</td>
                    <td width="190px">
                        <form action="{{ route('book.destroy', $r->id) }}" method="POST">
                            <a href="{{ route('book.show',$r->id) }}" class="button-orange">Detail</a>
                            <a href="{{ route('book.edit',$r->id) }}" class="button-green">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button  type="submit" class="button">Delete</button>
                        </form>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
@include('layout.footer')