<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/c8bd6986d8.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.css"  />
<link rel="stylesheet" href="style.css">
<style type = "text/css">


body{ 
background-color:#c1c1c4 ;
line-height: 1.8;
background-size: cover;}


.brand{
background: #ff1a1a !important;
padding: 30px 32px;
}

.brand-text{
color: #cbb09c !important;
}


.row{
margin: 10px;
}


input[type = text]{
padding: 7px;
border: none;
font-size: 16px;
font-family: sans-serif;
}
:hover{
    transition: 0.4s;
}
</style>
        <title>Blogger</title>
    </head>

    <body class = "background">
       @yield('content')
    </body>

</html>