<div class="table-responsive">
    <table class="table" id="articles-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Description</th>
        <th>Slug</th>
        <th>Image Url</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                       <td>{{ $article->title }}</td>
            <td>{{ $article->description }}</td>
            <td>{{ $article->slug }}</td>
            <td>{{ $article->image_url }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('articles.show', [$article->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('articles.edit', [$article->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
