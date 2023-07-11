@extends("layouts.admin")

@section('content')

    <h2>Elenco tipi</h2>
    <a class="btn btn-primary" href="{{ route("admin.types.create") }}"> <i class="fa-solid fa-plus"></i> </a>
    <ul>
        @foreach ($types as $type)
            <li class="my-3">{{ $type->name }}</li>
        @endforeach
    </ul>
    
@endsection