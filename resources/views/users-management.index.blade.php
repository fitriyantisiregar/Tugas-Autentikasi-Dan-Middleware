<h1>User Management</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Date of Birth</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->dob }}</td>
                <td>{{ $user->address }}</td>
            </tr>
        @endforeach
    </tbody>
</table>