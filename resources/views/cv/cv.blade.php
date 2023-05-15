<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoja de vida</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      
      #header {
        background-color: #007ACC;
        color: #FFF;
        padding: 10px;
      }
      
      #personal-info {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 10px;
      }
      
      #personal-info div {
        flex-basis: 30%;
      }
      
      #about-me {
        padding: 10px;
      }
      
      #languages {
        padding: 10px;
      }
      
      #documents {
        padding: 10px;
      }
      
      ul {
        list-style: none;
        padding-left: 0;
      }
      
      li {
        margin-bottom: 10px;
      }
      
      .label {
        font-weight: bold;
      }
    </style>
</head>
<body>
    <header id="header">
        <h1>{{ $usuario->name }}</h1>
        <h2>
            {{ $usuario->ciudad->departamento->pais->nombre }},
            {{ $usuario->ciudad->departamento->nombre }},
            {{ $usuario->ciudad->nombre }}
        </h2>
        <p>Correo Electrónico: {{ $usuario->email }}</p>
    </header>
    <div id="personal-info">
        <div>
          <p class="label">Fecha de Nacimiento:</p>
          <p>{{ $usuario->fecha_de_nacimiento }}</p>
        </div>
        <div>
          <p class="label">EPS:</p>
          <p>{{ $usuario->eps->nombre }}</p>
        </div>
        <div>
          <p class="label">Fondo de Pensiones:</p>
          <p>{{ $usuario->fondos_pension->nombre }}</p>
        </div>
        <div>
          <p class="label">Tipo de Documento:</p>
          <p>{{ $usuario->documento->nombre }}</p>
        </div>
        <div>
          <p class="label">Número de Documento:</p>
          <p>{{ $usuario->documento_numero }}</p>
        </div>
    </div>
    <div id="about-me">
        <h3>Sobre Mí:</h3>
        <p>{{ $usuario->descripcion }}</p>
    </div>
    <div id="languages">
        <h3>Idioma:</h3>
        <p>{{ $usuario->idioma->nombre }}</p>
    </div>
    <div id="documents">
        <h3>Institucion:</h3>
        <p>{{ $usuario->institucion->nombre }}</p>
    </div>
</body>
</html>