@extends('app')

@section('content')
    <section class="col-lg-8" id="class-description">
        <div class="col-lg-12">
            <p class="h5 font-weight-bold text-dark">
                {{ $method->classes->class_name . '::' . $method->method_name }}
            </p>
        </div>

        <div class="col-lg-12 border bg-light rounded p-3">
            @if($method->description)
                <div class="col-lg-12 p-0" id="method-description">
                    <p class="text-muted">
                        <span class="font-weight-bold">Description:</span>
                        {{ $method->description }}
                    </p>
                </div>
            @endif

            <div class="col-lg-12 p-0">
                <p class="text-muted"><span class="font-weight-bold">Access modifier:</span> public</p>
            </div>

            <div class="col-lg-12 p-0">
                <p class="text-muted"><span class="font-weight-bold">Method:</span> {{ $method->method_name }}</p>
            </div>

            @if($method->arguments)
                <div class="col-lg-12 p-0">
                    <p class="text-muted"><span class="font-weight-bold">Arguments:</span> string $configFile</p>
                </div>
            @endif

            @if($method->throws)
                <div class="col-lg-12 p-0">
                    <p class="text-muted"><span class="font-weight-bold">Throws: </span>{{ $method->throws }}</p>
                </div>
            @endif

            <div class="col-lg-12 p-0">
                <p class="text-muted"><span class="font-weight-bold">Return: </span>{{ $method->returns }}</p>
            </div>
            
        </div>
    </section>
@endsection 