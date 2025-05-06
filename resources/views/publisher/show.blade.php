@include('layout.header')
<h3 class="text-center">Detail Publisher</h3>
        <table>
                <tr>
                    <td width="150px" class="font-bold">Publisher Name</td>
                    <td width="10px" class="font-bold">:</td>
                    <td class="font-bold">{{ $publisher->publisher_name }}</td>
                </tr>
      
        </table>
@include('layout.footer')