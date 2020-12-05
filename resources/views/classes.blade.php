@extends('app')

@section('content')
    <section id="class-list" class="col-lg-8">
        <div class="col-lg-12">
            <p class="h5 font-weight-bold text-dark">
                List of available classes:
            </p>
        </div>

        <div class="col-lg-12 border p-4 rounded" id="classes">
            
            @foreach($classes as $class) 
                @if($class->dirs->dir_name == 'Root')
                    <div class="col-lg-12 p-0">
                        <a href="/classes/{{$class->id}}" class="text-primary">{{'/' . $class->class_name}}</a>
                    </div>
                @else
                    <div class="col-lg-12 p-0">
                        <a href="/classes/{{$class->id}}" class="text-primary">{{$class->dirs->dir_name .'/' . $class->class_name}}</a>
                    </div>
                @endif
            @endforeach

        </div>
    </section>
@endsection