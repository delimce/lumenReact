<!DOCTYPE html>
<html>
<head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LumenReact</title>

    <!-- Bootstrap -->
    <link href="{{ url('libs/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="root"></div>

<!-- react's libs -->
<script type="text/javascript" src="{{ url('libs/react/react.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/react/react-dom.min.js') }}"></script>
<!-- vendor's libs -->
<script src="{{ url('libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ url('libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>

</body>
</html>