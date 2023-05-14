<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoja de vida</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .titulo{
            display: flex;
            justify-content: center;
            background-color: blue;
            border: 1px solid black;
            color: white;
            padding: 2px;
        }
        .subtitulo{
            background-color: blue;
            border: 1px solid black;
            color: white;
            padding: 2px;
        }
        .texto{
            border: 1px solid black;
            padding: 4px;
        }
    </style>
</head>
<body>
    <center>
        <table>
            <thead>
                <tr>
                    <td class="titulo" colspan="2">HOJA DE VIDA</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="subtitulo">Nombre:</td>
                    <td class="texto">{{ $usuario->name }}</td>
                </tr>
                <tr>
                    <td class="subtitulo">Fecha de nacimiento:</td>
                    <td class="texto">{{ $usuario->fecha_de_nacimiento }}</td>
                </tr>
                <tr>
                    <td class="subtitulo">Pais:</td>
                    <td class="texto">{{ $usuario->ciudad->departamento->pais->nombre }}</td>
                </tr>
                <tr>
                    <td class="subtitulo">Departamento:</td>
                    <td class="texto">{{ $usuario->ciudad->departamento->nombre }}</td>
                </tr>
                <tr>
                    <td class="subtitulo">Ciudad:</td>
                    <td class="texto">{{ $usuario->ciudad->nombre }}</td>
                </tr>
                <tr>
                    <td class="subtitulo">Tipo de documento:</td>
                    <td class="texto">{{ $usuario->documento->nombre }}</td>
                </tr>
                <tr>
                    <td class="subtitulo">Documento:</td>
                    <td class="texto">{{ $usuario->documento_numero }}</td>
                </tr>
                <tr>
                    <td class="subtitulo">Descripcion:</td>
                    <td class="texto">{{ $usuario->descripcion }}</td>
                </tr>
                <tr>
                    <td class="subtitulo">Idioma:</td>
                    <td class="texto">{{ $usuario->idioma->nombre }}</td>
                </tr>
                <tr>
                    <td class="subtitulo">Eps:</td>
                    <td class="texto">{{ $usuario->eps->nombre }}</td>
                </tr>
                <tr>
                    <td class="subtitulo">Fondo de pension:</td>
                    <td class="texto">{{ $usuario->fondos_pension->nombre }}</td>
                </tr>
                <tr>
                    <td class="subtitulo">Estudio en:</td>
                    <td class="texto">{{ $usuario->institucion->nombre }}</td>
                </tr>
            </tbody>
        </table>
    </center>
</body>
</html>