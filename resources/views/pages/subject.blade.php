@if ($subjects >0)
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Score</th>
        </tr>
    </thead>
    @foreach ($subjects as $item)
    <tbody>
        <tr>
            <td>
                {{$item['name']}}
            </td>
            <td>
                {{$item['score']}}
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
@endif