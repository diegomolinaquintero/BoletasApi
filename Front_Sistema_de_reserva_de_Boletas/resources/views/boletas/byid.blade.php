<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <table class="table table-dark table-striped table-bordered" >
        <tr>
            <td>Id</td>
            <td>Usuario</td>
            <td>Puesto</td>
            <td>Fecha creado</td>
            <td>Fecha editado</td>
        </tr>     
            <tr>   
                <td>
                    
                    {{ $boleta->id }}

                </td>
    
                <td>
                    {{ $boleta->user_id }}
                </td>    
                <td>
                    {{ $boleta->puesto }}
                </td>    
                <td>
                    {{ $boleta->created_at }}
                </td>    
                <td>
                    {{ $boleta->updated_at }}
                </td>    
                
            </tr>
    </table>
</body>
</html>