<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>{{ $nombreHeladeria }}</title>
</head>
<body>
    <header>
        <h1>{{ $nombreHeladeria }}</h1>
        <img src="{{ asset('img/logourbano1.png') }}" alt="Logo HU" width="200">
        <p>Propietario: <strong>{{ $nombreAdministrador }}</strong> | Ciudad: <strong>{{ $ciudad }}</strong></p>
    </header>

    <hr>

    <p>
        Heladería Urbano's es tu punto de encuentro favorito. Disfruta de la mejor variedad de ensaladas de frutas, helados artesanales y postres. ¡Ven a probarlos!
    </p>

    <hr>

    <section class="Bienvenida">
        @if ($edad >= 18)
            <h3>¡Bienvenido! Conoce nuestras promociones especiales.</h3>
        @else
            <h3>¡Bienvenido! Descubre nuestros deliciosos sabores.</h3>
        @endif
    </section>

    <hr>

    <section class="promocion">
        <h3>Promoción del Día</h3>
        @if ($diaSemana == "Martes")
            <p><strong>¡Hoy tenemos 2x1 en conos!</strong></p>
        @else
            <p>Hoy puedes disfrutar de nuestros sabores habituales.</p>
        @endif
    </section>

    <hr>

    <section class="disponibilidad">
        <h3>Disponibilidad</h3>
        @if ($saborDisponible == true)
            <p><strong>¡Este sabor está disponible!</strong></p>
        @else
            <p>Lo sentimos, este sabor está agotado.</p>
        @endif
    </section>

    <hr>

    <main>
        <div class="tarjetas">
            @foreach ($productos as $producto)
                <article class="tarjeta">
                    <h2>{{ $producto['nombre'] }}</h2>
                    <img src="{{ asset($producto['imagen']) }}" alt="{{ $producto['alt'] }}" width="300">
                    <p>{{ $producto['descripcion'] }}</p>
                    <h4>{{ $producto['precio'] }}</h4>

                    @if ($producto['nombre'] == 'Cono Doble Crocante')
                        <div class="disponibilidad-php">
                            @if ($producto['disponible'] == true)
                                <p>¡Este producto está disponible!</p>
                            @else
                                <p>Lo sentimos, este producto está agotado.</p>
                            @endif
                        </div>
                    @endif
                </article>
            @endforeach
        </div>
    </main>

    <hr>

    <footer>
        <h3>Heladería {{ $nombreHeladeria }} — "¡El sabor de la ciudad en cada bocado!"</h3>
        <p>Dirección: Calle Principal, Centro, {{ $ciudad }}</p>
        <p>Teléfono: +57 (315) 420-9988 | Pedidos WhatsApp: +57 320 123 4567</p>
        <p>Correo electrónico: contacto@heladeriaurbanos.com</p>
        <p>Horario: Lunes a Domingo de 12:00 m. a 9:00 p.m.</p>
        <p>¡Pide a domicilio o visítanos!</p>
    </footer>
</body>
</html>
