<table class="table table-striped">
    <thead>
        <tr>
            <th>{{ $users->count() }}</th>
            <th>Full Name</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class=" w3-card-2">
        @foreach ($users as $user)
            @if ($user->roles == 'admin')
                <tr class=" w3-teal">
                    <td>{{ $user->id }}</td>
                    <td>{{ Str::ucfirst($user->name) }}</td>
                    <td>{{ Str::ucfirst($user->fname) }}</td>
                    <td>{{ Str::ucfirst($user->lname) }}</td>
                    <td>{{ Str::lower($user->email) }}</td>
                    <td>{{ Str::lower($user->roles) }}</td>
                    <td>
                        <a href=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @else
                <tr class=" w3-indigo">
                    <td>{{ $user->id }}</td>
                    <td>{{ Str::ucfirst($user->name) }}</td>
                    <td>{{ Str::ucfirst($user->fname) }}</td>
                    <td>{{ Str::ucfirst($user->lname) }}</td>
                    <td>{{ Str::lower($user->email) }}</td>
                    <td>{{ Str::lower($user->roles) }}</td>
                    <td>
                        <a href="">stop</a>
                        <a href=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>
