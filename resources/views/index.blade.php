@extends('app')

@section('content')

    <section class="col-lg-8">
        <div class="col-lg-12">
            <p class="h5 text-dark font-weight-bold">Requirements:</p>
        </div>

        <div class="col-lg-12 bg-light p-3 rounded mb-3" id="code-example">
            <div class="col-lg-12 mt-1">
                <a href="https://www.php.net/downloads.php#v8.0.0" class="text-primary">PHP with 8.0 version or higher</a>
            </div>
            <div class="col-lg-12 mt-1">
                <a href="https://www.php.net/manual/en/yaml.setup.php" class="text-primary">PHP YAML extension</a>
            </div>
        </div>

        <div class="col-lg-12">
            <p class="h5 text-dark font-weight-bold">Installation:</p>
        </div>

        <div class="col-lg-12 bg-light p-3 rounded" id="code-example">
            <p class="text-dark">
                <code>
                    <p>johndoe@machine/workdir/$ composer require qonsillium/socket</p>
                </code>
            </p>
        </div>

        <div class="col-lg-12 pt-2" id="comment-bar">
            <p class="text-muted">
                <small>
                    Before to run composer require command you must be sure that <b>composer</b>
                    installed on your machine.
                </small>
            </p>
        </div>

        <div class="col-lg-12">
            <p class="h5 text-dark font-weight-bold">Configuration file:</p>
        </div>

        <div class="col-lg-12 bg-light p-3 rounded" id="code-example">
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

        <div class="col-lg-12 pt-2" id="comment-bar">
            <p class="text-muted">
                <small>
                    Here we create a configuration file with yaml(yml) extension, also can be with json. 
                    Config must have contain this all settings otherwise socket will not run. Socket type 
                    it's a socket which you have to create besides tcp you can also set another type - unix.
                    Domain, type and protocol defines a socket family. Backlog parameter sets incoming connections 
                    which will be queued for processing. Read length is a bytes will be fetched from remote host.
                    Read flag responded for reading status. And two final parameters is a host and port which will be
                    connected and accepted. About how to UNIX socket read in <a href="usage.html">usage</a>
                </small>
            </p>
        </div>

        <div class="col-lg-12">
            <p class="h5 text-dark font-weight-bold">Using example:</p>
        </div>

        <div class="col-lg-12 bg-light p-3 rounded" id="code-example">
            <p class="text-dark">
                <code>
                    <p>require_once 'vendor/autoload.php';</p>

                    <p>use Qonsillium\QonsilliumSocket;</p>
                    <p>use Qonsillium\ServerSocket;</p>

                    <p>$socket = new QonsilliumSocket('config.yaml');</p>
                    
                    <p>$socket->runServer(function(ServerSocket $server) {
                        <br> 
                        <span>&nbsp;echo $server->send('Hello from server!');</span>
                        <br>
                        <span>});</span>
                    </p>

                </code>
            </p>
        </div>

        <div class="col-lg-12 pt-2" id="comment-bar">
            <p class="text-muted">
                <small>
                    If you want to start your socket server you can create a <b>server.php</b> file
                    and set this code right there.
                </small>
            </p>
        </div>

        <div class="col-lg-12 bg-light p-3" id="code-example">
            <p class="text-dark">
                <code>
                    <p>require_once 'vendor/autoload.php';</p>

                    <p>use Qonsillium\QonsilliumSocket;</p>
                    <p>use Qonsillium\ClientSocket;</p>

                    <p>$socket = new QonsilliumSocket('config.yaml');</p>
                    
                    <p>$socket->runClient(function(ClientSocket $client) {
                        <br> 
                        <span>&nbsp;echo $client->send('Hello from client!');</span>
                        <br>
                        <span>});</span>
                    </p>
                </code>
            </p>
        </div>

        <div class="col-lg-12 pt-2" id="comment-bar">
            <p class="text-muted">
                <small>
                    When you run a <b>server</b> socket or you have written socket on another lang e.g C++ you can 
                    connect by paste this code in <b>client.php</b> file.
                </small>
            </p>
        </div>

        <div class="col-lg-12">
            <p class="h5 text-dark font-weight-bold">Running:</p>
        </div>

        <div class="col-lg-12 bg-light p-3" id="code-example">
            <p class="text-dark">
                <code>
                    <p>johndoe@machine/workdir/$ php server.php</p>
                    <p>johndoe@machine/workdir/$ php client.php</p>
                </code>
            </p>
        </div>

        <div class="col-lg-12 pt-2" id="comment-bar">
            <p class="text-muted">
                <small>
                    When you run client and server sockets they will be exchange messages
                    among themselves
                </small>
            </p>
        </div>

    </section>
@endsection