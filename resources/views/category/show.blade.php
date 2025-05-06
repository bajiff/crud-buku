@include('layout.header')
<h3 class="text-center">Detail Category</h3>
        <table>
                <tr>
                    <td width="150px" class="font-bold">Category Name</td>
                    <td width="10px" class="font-bold">:</td>
                    <td class="font-bold">{{ $category->category_name }}</td>
                </tr>
      
        </table>
@include('layout.footer')