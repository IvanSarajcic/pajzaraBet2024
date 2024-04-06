<table>
    <thead>
        <tr>
            <th>Kick-off</th>
            <th>Venue</th>
            <th>Home Team</th>
            <th>Away Team</th>
            <th>Goals Home</th>
            <th>Goals Away</th>
            <th>Finished</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($matches as $match)
        <tr>
            <td>{{ $match->kick_off }}</td>
            <td>{{ $match->venue->name }}</td>
            <td>{{ $match->teamHome->name }}</td>
            <td>{{ $match->teamAway->name }}</td>
            <td>{{ $match->goals_team_home }}</td>
            <td>{{ $match->goals_team_away }}</td>
            <td>{{ $match->finished ? 'Yes' : 'No' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>