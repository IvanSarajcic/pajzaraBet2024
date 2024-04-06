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
            <td><img src="images/{{ $team->abbreviation }}.png">{{ $team->abbreviation }}</td>
            <td>{{ $team->group }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
