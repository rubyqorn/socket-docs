@extends('app')

@section('content')
    <section class="col-lg-8" id="class-description">
        <div class="col-lg-12">
            <p class="h5 font-weight-bold text-dark">
                {{ $class->class_name }}
            </p>
        </div>

        <div class="col-lg-12 border bg-light rounded p-3">
            @if($class->description)
                <div class="col-lg-12 p-0">
                    <p class="text-muted">
                        <span class="font-weight-bold">Description:</span>
                        {{ $class->description }}
                    </p>
                </div>
            @endif

            @if($class->extends)
                <div class="col-lg-12 p-0">
                    <p class="text-muted"><span class="font-weight-bold">Extends:</span> {{ $class->extends }}</p>
                </div>
            @endif

            <div class="col-lg-12 p-0">
                <p class="text-muted"><span class="font-weight-bold">Type:</span> {{ ucfirst($class->type) }}</p>
            </div>

            <div class="col-lg-12 p-0">
                <p class="text-muted font-weight-bold">Methods:</p>
            @forelse($class->methods as $method)
                <p class="text-muted">{{ $class->class_name . '::' . $method->method_name }}</p>                    
            @empty 
                <p class="text-muted">Empty</p>
            @endforelse
            </div>
            
        </div>
    </section>
@endsection