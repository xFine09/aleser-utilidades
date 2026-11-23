<?php
/**
 * Plugin Name:       aleser-utilidades
 * Description:       Utilidades propias del blog: caja de contacto en las entradas, código corto [anio], ocultación de la versión de WordPress y pantalla de acceso personalizada.
 * Version:           1.0.0
 * Author:            Alejandro Serrano Cabrera
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       aleser-utilidades
 *
 * @package aleser-utilidades
 */

// Protección contra el acceso directo al fichero.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Petición 3: añade una caja de contacto al final de cada entrada (no de las páginas).
 *
 * @param string $content Contenido de la entrada.
 * @return string Contenido con la caja añadida cuando procede.
 */
function aleser_caja_contacto( $content ) {
	if ( is_singular( 'post' ) && in_the_loop() && is_main_query() ) {
		$caja  = '<div class="aleser-caja-contacto">';
		$caja .= '<p>¿Te ha gustado? Escríbeme desde ';
		$caja .= '<a href="' . esc_url( get_permalink( get_page_by_path( 'contacto' ) ) ) . '">Contacto</a></p>';
		$caja .= '</div>';
		return $content . $caja;
	}
	return $content;
}
add_filter( 'the_content', 'aleser_caja_contacto' );
