# aleser-utilidades

Plugin propio del blog WOW me gusta IAW (práctica 4 de IAW, ASIR).

## Qué hace
- Añade una caja «¿Te ha gustado? Escríbeme desde Contacto» al final de las entradas (no de las páginas).
- Crea el código corto `[anio]`, que muestra el año actual.
- Oculta la versión de WordPress del `<head>`.
- Personaliza la pantalla de acceso: el logotipo enlaza a la portada, su texto es el nombre del blog y se muestra un aviso sobre el formulario.

## Instalación
1. Copia esta carpeta en `wp-content/plugins/aleser-utilidades`.
2. En el panel: Plugins › Plugins instalados › Activar.

## Dependencias
- WordPress 6.x y una página con el slug `contacto` (la caja enlaza a ella).
- Tema `aleser-hijo` solo para el estilo visual de la caja (`.aleser-caja-contacto`); sin él la caja funciona pero sin estilo.
