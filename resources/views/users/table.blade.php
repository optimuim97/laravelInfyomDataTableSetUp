<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>First Name</th>
        <th>Account Type Id</th>
        <th>Last Name</th>
        <th>Name</th>
        <th>Dial Code</th>
        <th>Phone Number</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Password</th>
        <th>Gender</th>
        <th>City</th>
        <th>Town</th>
        <th>Address</th>
        <th>Birthday</th>
        <th>Country Id</th>
        <th>Country</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                       <td>{{ $user->first_name }}</td>
            <td>{{ $user->account_type_id }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->dial_code }}</td>
            <td>{{ $user->phone_number }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->town }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->birthday }}</td>
            <td>{{ $user->country_id }}</td>
            <td>{{ $user->country }}</td>
            <td>{{ $user->remember_token }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
