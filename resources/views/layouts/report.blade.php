<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Oswald|Raleway|Roboto|Slabo+27px"
        rel="stylesheet">
  <title>{{$titulo}}</title>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    color: #646464;
  }

  h1, h2, h3, h4 {
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    text-transform: uppercase;
  }

  table, th, td {
    border: 1px solid #afafaf;
    border-collapse: collapse;
  }

  th, td {
    padding: 2px;
  }

  th {
    font-family: 'Montserrat', sans-serif;
    text-align: center;
  }

  td {
    font-family: 'Roboto', sans-serif;
    font-size: 8pt;
    text-align: left;
  }

</style>
<body>
@yield('conteudo')
</body>
</html>