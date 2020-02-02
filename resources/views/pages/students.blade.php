<h1>Hello</h1>

<table>
    <tr>
        <th>

        </th>
    </tr>
    @foreach ($student as $item)
    <tr>
    <td>{{$item['FirstName']}}</td>
    </tr>
    @endforeach
</table>
