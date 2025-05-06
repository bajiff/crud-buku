@include('layout.header')
<h3>Publisher</h3>
<a href="{{ route('publisher.create') }}" class="button">Create</a>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Publisher Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allPublisher as $key => $r)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $r->publisher_name }}</td>
                    <td>
                        <form action="{{ route('publisher.destroy', $r->id) }}" method="POST">
                            <a href="{{ route('publisher.show',$r->id) }}" class="button">Detail</a>
                            <a href="{{ route('publisher.edit',$r->id) }}" class="button">Edit</a>
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