@extends('app')

@section('content')
    <section id="class-list" class="col-lg-8">
        <div class="col-lg-12">
            <p class="h5 font-weight-bold text-dark">
                List of available methods:
            </p>
        </div>

        <div class="col-lg-12 border p-4 rounded" id="classes">

            @foreach($methods as $method)
                <div class="col-lg-12 p-0">
                    <a href="/methods/{{ $method->id }}" class="text-primary">{{ $method->classes->class_name . '::' . $method->method_name }}</a>
                </div>
            @endforeach

        </div>
    </section>
@endsection