<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>City</th>
            <th>Matches</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($venues as $venue)
        <tr>
            <td>{{ $venue->name }}</td>
            <td>{{ $venue->city }}</td>
            <td>{{ $venue->matches->count() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>