
 <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
@if (count($customer)>0)
@foreach ($customer as $item)
        <tbody>
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['email']}}</td>
            </tr>
        </tbody>
@endforeach
@else
    Don't have name!!!
@endif
</table>