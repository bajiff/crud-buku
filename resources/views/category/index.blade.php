@include('layout.header')
<h3>Category</h3>
<a href="{{ route('category.create') }}" class="button">Create</a>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allCategory as $key => $r)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $r->category_name }}</td>
                    <td>
                        <form action="{{ route('category.destroy', $r->id) }}" method="POST">
                            <a href="{{ route('category.show',$r->id) }}" class="button">Detail</a>
                            <a href="{{ route('category.edit',$r->id) }}" class="button">Edit</a>
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