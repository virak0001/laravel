<h1>Hello</h1>
<a href="formStudent">add new</a>
<table>
    <tr>
        <th>

        </th>
    </tr>
    @foreach ($student as $item)
    <tr>
        <td>{{$item['FirstName']}}</td>
        <td>{{$item['LastName']}}</td>
        <td>{{$item['Age']}}</td>
        <td>{{$item['id']}}</td>
        <td><a href="{{route('formUpdate',$item['id'])}}">Edit</a></td>
    </tr>
    @endforeach
</table>
