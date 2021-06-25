<?php
/**
 * Dental hooks
 *
 * @package storefront
 */


/**
 * Index
 * 
 * @see 
 */
add_action( 'dental_index', 'dental_carrousel', 10 );
add_action( 'dental_index', 'dental_promo_superior', 20 );


/**
 * Pages
 * 
 * @see 
 */
add_action( 'dental_page', 'dental_content', 10);
add_action( 'dental_page', 'dental_promo_superior', 20 );


/**
 * Servicios
 * 
 * @see 
 */
add_action( 'dental_servicios', 'dental_valoracion_sin_costo', 10 );
add_action( 'dental_servicios', 'dental_valoracion_intraoral', 20 );
add_action( 'dental_servicios', 'dental_presupuesto', 30 );


/**
 * Promos B
 * 
 * @see 
 */
add_action( 'dental_promo_especialidades', 'dental_promo_especialidades', 10 );
add_action( 'dental_promo_visitanos', 'dental_promo_visitanos', 10 );


/**
 * Especialidades
 * 
 * @see 
 */
add_action( 'dental_especialidades', 'dental_especialidad_ortodoncia', 10);
add_action( 'dental_especialidades', 'dental_especialidad_endodoncia', 20);
add_action( 'dental_especialidades', 'dental_especialidad_periodoncia', 30);
add_action( 'dental_especialidades', 'dental_especialidad_odontopediatria', 40);
add_action( 'dental_especialidades', 'dental_especialidad_cirujia', 50);


/**
 * Tratamientos
 * 
 * @see 
 */
add_action( 'dental_tratamientos', 'dental_tratamiento_limpieza', 10 );
add_action( 'dental_tratamientos', 'dental_tratamiento_ninios', 20 );
add_action( 'dental_tratamientos', 'dental_tratamiento_brackets', 30 );
add_action( 'dental_tratamientos', 'dental_tratamiento_implantes', 40 );
add_action( 'dental_tratamientos', 'dental_ortodoncia_ortopedia', 50 );
add_action( 'dental_tratamientos', 'dental_cirujia_dental', 60 );

