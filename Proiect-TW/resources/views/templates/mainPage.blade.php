<!DOCTYPE html>
<html lang = "{{ config('app.locale') }}">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<title>{{config('app.name', 'Blogger')}}</title>
<style type = "text/css">


.background{
background-image: url("pictures/mountains.jpg");
line-height: 1.8;
background-size: cover;
background-repeat: no-repeat;
}

.btn{
background-color: #A9A9A9;
padding: 30px 32px;

font-size: 16px;
}

h1 {
  display: block;
  font-size: 3em;
  margin-top: -0.67em;
  margin-bottom: 0.67em;
  margin-left: 0;
  margin-right: 0;
  font-weight: bold;
}

</style>
</head>

<body class="background">
@yield('content')
</body>
  

</html>