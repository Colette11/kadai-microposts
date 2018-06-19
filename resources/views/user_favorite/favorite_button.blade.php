    @if (Auth::user()->is_favoring($micropost->id))
        {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-default btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-success btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
