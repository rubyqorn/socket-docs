@extends('app')

@section('content')
    <section class="col-lg-8">
        <div class="row">
            <div class="col-lg-6">
                <div class="col-lg-12">
                    <a role="button" class="text-primary" data-toggle="collapse" data-target="#tcp-config" id="collapsible-config">
                        TCP config example
                    </a>

                    <div class="collapse bg-light p-3 mt-2" id="tcp-config">
                        <p class="text-dark">
                            <code>
                                <span>settings:</span><br>
                                &nbsp;<span>socket_type: tcp</span><br>
                                &nbsp;<span>domain: AF_INET</span><br>
                                &nbsp;<span>type: SOCK_STREAM</span><br>
                                &nbsp;<span>protocol: SOL_TCP</span><br>
                                &nbsp;<span>backlog: 1</span><br>
                                &nbsp;<span>read_length: 2048</span><br>
                                &nbsp;<span>read_flag: MSG_WAITALL</span><br>
                                &nbsp;<span>host: 127.0.0.1</span><br>
                                &nbsp;<span>port: 8001</span>
                            </code>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="col-lg-12">
                    <a role="button" class="text-primary" data-toggle="collapse" data-target="#unix-config" id="collapsible-config">
                        Unix config example
                    </a>

                    <div class="collapse bg-light p-3 mt-2" id="unix-config">
                        <p class="text-dark">
                            <code>
                                <span>settings:</span><br>
                                &nbsp;<span>socket_type: tcp</span><br>
                                &nbsp;<span>domain: AF_UNIX</span><br>
                                &nbsp;<span>type: SOCK_STREAM</span><br>
                                &nbsp;<span>protocol: 0</span><br>
                                &nbsp;<span>backlog: 1</span><br>
                                &nbsp;<span>read_length: 2048</span><br>
                                &nbsp;<span>read_flag: MSG_WAITALL</span><br>
                                &nbsp;<span>socket_file: socket.sock</span><br>
                            </code>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mt-3 p-0">
            <div class="col-lg-12">
                <p class="text-dark font-weight-bold">Available config settings</p>
                <p class="text-muted">
                    <small>
                        Configuration file can be with <b>yaml(yml)</b> or <b>json</b> extensions. Another will not be
                        handle in library.
                    </small>
                </p>
            </div>

            @foreach($configurations as $config)
                <div class="col-lg-12">
                    <p class="text-primary font-weight-bold" role="button" data-toggle="collapse" data-target="#{{ $config->config_name }}" id="settings-toggler">
                        {{ $config->config_name }}
                    </p>

                    <div class="bg-lightrounded border collapse mb-3" id="{{ $config->config_name }}">
                        @foreach($config->settings as $setting)
                            <div class="col-lg-12 p-3">
                                <p class="text-muted font-weight-bold">{{ $setting->setting_name }}</p>
                                <span class="text-muted">{{ $setting->setting_description }}</span>
                            </div>
                        @endforeach 
                    </div>
                </div>
            @endforeach
            
        </div>
    </section>
@endsection