<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>
<!-- Styles -->
<link rel="stylesheet" href="{{ mix('css/dashboard.css') }}">
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>
<script src="{{ mix('js/dashboard.js') }}" defer></script>
<script src="{{asset('/js/jquery-3.6.0.min.js')}}"></script>
