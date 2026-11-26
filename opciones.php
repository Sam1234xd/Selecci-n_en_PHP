
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Paquete turístico</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

    <h1>Agencia de viajes</h1>
    <div class="Ti">
    <h2>Personaliza tu paquete turístico</h2>
    </div>

    <form action="resultados.php" method="POST">

        <h2>Destinos turísticos</h2>

        <select id="destinos" name="destinos[]" multiple>
            <option value="Cancún">Cancún</option>
            <option value="Puerto Vallarta">Puerto Vallarta</option>
            <option value="Acapulco">Acapulco</option>
            <option value="Los Cabos">Los Cabos</option>
            <option value="Mazatlán">Mazatlán</option>
            <option value="Huatulco">Huatulco</option>
            <option value="Puerto Escondido">Puerto Escondido</option>
        </select>

        <h2>Actividades turísticas</h2>

        <label for="opcion-1">
            <input type="checkbox" value="Buceo"
                   id="opcion-1" name="actividades[]">
                   Buceo
        </label><br>

        <label for="opcion-2">
            <input type="checkbox" value="Paseo en lancha"
                   id="opcion-2" name="actividades[]">
                   Paseo en lancha
        </label><br>

        <label for="opcion-3">
            <input type="checkbox" value="Visita a zonas arqueologicas"
                   id="opcion-3" name="actividades[]">
                   Visita a zonas arqueológicas
        </label><br>

        <label for="opcion-4">
            <input type="checkbox" value="Senderismo"
                   id="opcion-4" name="actividades[]">
                   Senderismo
        </label><br>

        <label for="opcion-5">
            <input type="checkbox" value="Pesca deportiva"
                   id="opcion-5" name="actividades[]">
                   Pesca deportiva
        </label><br>

        <label for="opcion-6">
            <input type="checkbox" value="Recorrido gastronomico"
                   id="opcion-6" name="actividades[]">
                   Recorrido gastronómico
        </label><br>

        <label for="opcion-7">
            <input type="checkbox" value="Visita a ssmuseos"
                   id="opcion-7" name="actividades[]">
                   Visita a museos
        </label><br>


        <h2>Servicios adicionales</h2>

        <label for="opcion-8">
            <input type="checkbox" value="Transporte al aeropuerto"
                   id="opcion-8" name="servicios[]">
                   Transporte al aeropuerto
        </label><br>

        <label for="opcion-9">
            <input type="checkbox" value="Desayuno incluido"
                   id="opcion-9" name="servicios[]">
                   Desayuno incluido
        </label><br>

        <label for="opcion-10">
            <input type="checkbox" value="Hospedaje de lujo"
                   id="opcion-10" name="servicios[]">
                   Hospedaje de lujo
        </label><br>

        <label for="opcion-11">
            <input type="checkbox" value="Seguro de viajero"
                   id="opcion-11" name="servicios[]">
                   Seguro de viajero
        </label><br>

        <label for="opcion-12">
            <input type="checkbox" value="Renta de automovil"
                   id="opcion-12" name="servicios[]">
                   Renta de automóvil
        </label><br>

        <label for="opcion-13">
            <input type="checkbox" value="Guia turistico"
                   id="opcion-13" name="servicios[]">
                   Guía turístico
        </label><br>


        <h2>Datos del cliente</h2>

        <label for="nombre">
            Nombre completo:
        </label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>

        <label for="correo">
            Correo electrónico:
        </label>
        <input type="email" id="correo" name="correo" required>
        <br><br>

        <button type="submit">Generar paquete</button>

    </form>

</body>
</html>
