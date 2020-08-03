<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Ticket</title>
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">

    <style>
        .content {
            padding: 1rem 1rem 3rem 1rem !important;
            margin-top: 2rem !important;
            margin-bottom: 2rem !important;
        }

        .title {
            margin-bottom: 2rem !important;
        }

        .slug-value {
            text-decoration: underline dashed;
        }
    </style>
</head>
<body>
    <main class="row">
        <section class="col s10 offset-s1 card content">
            <h3 class="col s12 center-align title">
                Se ha añadido un nuevo ticket. Su código es
                <strong class="green-text slug-value">{{ $ticket }}</strong>
            </h3>
            <a class="btn green col s2 offset-s5" href="{{ action('TicketsController@show', $ticket) }}" target="_blank">Ver ticket</a>
        </section>
    </main>
</body>
</html>
