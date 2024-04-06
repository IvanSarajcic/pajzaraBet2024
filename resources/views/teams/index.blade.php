<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Abbreviation</th>
            <th>Group</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teams as $team)
        <tr>
            <td>{{ $team->name }}</td>
            <td>{{ $team->abbreviation }}</td>
            <td>{{ $team->group }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
