<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <form action="" method="post">
                            {{ Form::label('nome', 'Nome 26', ['class' => 'form-control']) }}
                            {{-- {{ Form::text($name, $value, [$options]) }} --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
