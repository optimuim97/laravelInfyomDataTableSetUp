<div class="table-responsive">
    <table class="table" id="settings-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Logo</th>
        <th>Description</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Location</th>
        <th>Country</th>
        <th>City</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($settings as $setting)
            <tr>
                       <td>{{ $setting->name }}</td>
            <td>{{ $setting->logo }}</td>
            <td>{{ $setting->description }}</td>
            <td>{{ $setting->email }}</td>
            <td>{{ $setting->contact }}</td>
            <td>{{ $setting->location }}</td>
            <td>{{ $setting->country }}</td>
            <td>{{ $setting->city }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['settings.destroy', $setting->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('settings.show', [$setting->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('settings.edit', [$setting->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
