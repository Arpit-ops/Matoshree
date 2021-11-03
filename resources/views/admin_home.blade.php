@extends('backend_layouts.app')
@section('content')
<body>
    
<h1> 
Wellcome {{Auth::user()->name}} !!!!
</h1>
</body>   

@endsection