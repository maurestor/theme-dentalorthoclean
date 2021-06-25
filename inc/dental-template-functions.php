<?php
/**
 * Dental template functions.
 *
 * @package dental
 */


if ( ! function_exists( 'dental_content' ) ) {
    /**
     * Muestra el contenido del post
     *
     * @since 1.0.0
     */
    function dental_content() {
        ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

        <?php
    }
}


if ( ! function_exists( 'dental_carrousel' ) ) {
    /**
     * Muestra el contenido del post
     *
     * @since 1.0.0
     */
    function dental_carrousel() {
        ?>
            <!-- carrousel -->
            <div id='carrousel' class="portada col-span-1 grid grid-cols-1 mt-14">

                <div class="container col-span-12 h-128 pt-5 sm:pt-16 md:pt-7 max-w-5xl xl:w-11/12">
                    <?php echo do_shortcode( '[smartslider3 slider="2"]' );?>
                </div>

            </div>
            <!-- /carrousel -->
        <?php
    }
}


if ( ! function_exists( 'dental_promo_superior' ) ) {
    /**
     * Muestra el contenido del post
     *
     * @since 1.0.0
     */
    function dental_promo_superior() {
        ?>
            <!-- promo-superior -->
            <div id='promo-superior' class='text-sm md:text-2xl sans-serif text-center h-24 mt-auto mb-auto p-5 shadow-xl rounded-3xl'>
                <h3 class='align-middle azul'>Ven con nosotros a <span class='verde rounded font-black'>Dental "OrthoClean"</span> a tomar una consulta, te esperamos.</h3>
            </div>
            <!-- /promo-superior -->
        <?php
    }
}


if ( ! function_exists( 'dental_valoracion_sin_costo' ) ) {
    /**
     * Muestra el contenido del post
     *
     * @since 1.0.0
     */
    function dental_valoracion_sin_costo() {
        ?>
            <!-- valoracion-sin-costo -->
            <div id='valoracion-sin-costo' class='group relative overflow-hidden text-center rounded-3xl shadow-xl'>
                <img class='ml-auto mr-auto relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/limpiezas.jpg'); ?>" alt="Niños">
                
                <div id='ovelay-pages' class='absolute top-0 left-0 w-full h-full bg-indigo-50 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-1000 grid grid-rows-2 text-shadow-lg' >
                    <h3 class='h-full relative top-0 left-0 transform translate-y-36 transition group-hover:translate-y-20 group-hover:transition group-hover:ease-in-out duration-1000 blanco font-black text-xl group-hover:text-3xl stroke-a shadow-a animate-pulse'>Consulta de valoración<br>SIN COSTO</h3>
                </div>
            </div>
            <!-- /valoracion-sin-costo -->
        <?php
    }
}


if ( ! function_exists( 'dental_valoracion_intraoral' ) ) {
    /**
     * Muestra el contenido del post
     *
     * @since 1.0.0
     */
    function dental_valoracion_intraoral() {
        ?>
            <!-- valoracion-intraoral -->
            <div id='valoracion-intraoral' class='group relative overflow-hidden text-center rounded-3xl shadow-xl'>
                <img class='ml-auto mr-auto relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/intraoral.jpg'); ?>" alt="Camara Intraoral">
                
                <div id='ovelay-pages' class='absolute top-0 left-0 w-full h-full bg-indigo-50 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-1000 grid grid-rows-2' >
                    <h3 class='h-full relative top-0 left-0 transform translate-y-36 transition group-hover:translate-y-20 group-hover:transition group-hover:ease-in-out duration-1000 blanco font-black text-xl group-hover:text-3xl stroke-a shadow-a animate-pulse'>Diagnóstico con cámara intraoral</h3>
                </div>
            </div>
            <!-- /valoracion-intraoral -->
        <?php
    }
}

if ( ! function_exists( 'dental_presupuesto' ) ) {
    /**
     * Muestra el contenido del post
     *
     * @since 1.0.0
     */
    function dental_presupuesto() {
        ?>
            <!-- valoracion-presupuesto -->
            <div id='presupuesto' class='group relative overflow-hidden text-center rounded-3xl shadow-xl'>
                
                <img class='ml-auto mr-auto relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/presupuesto.jpg'); ?>" alt="Camara Intraoral">
                    
                <div id='ovelay-pages' class='absolute top-0 left-0 w-full h-full bg-indigo-50 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-1000 grid grid-rows-2' >
                    <h3 class='h-full relative top-0 left-0 transform translate-y-36 transition group-hover:translate-y-20 group-hover:transition group-hover:ease-in-out duration-1000 blanco font-black text-xl group-hover:text-3xl stroke-a shadow-a animate-pulse'>Presupuesto digital</h3>
                </div>
            </div>
            <!-- /valoracion-presupuesto -->
        <?php
    }
}


if ( ! function_exists( 'dental_promo_especialidades' ) ) {
    /**
     * Muestra el contenido del post
     *
     * @since 1.0.0
     */
    function dental_promo_especialidades() {
        ?>

        <h3 class='align-middle azul'>En <span class='verde rounded font-black'>Dental "OrthoClean"</span> <span class='azul'>contamos con todas las especialidades para ti y tu familia</span></h3>
        
        <?php
    }
}


if ( ! function_exists( 'dental_especialidad_ortodoncia' ) ) {
    function dental_especialidad_ortodoncia() {
        ?>
        <div id='especilidad-ortodoncia' class='relative h-32 sm:h-64 overflow-hidden rounded-3xl shadow-xl'>
            <img id='image-ortodocia' class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center animate-pulse' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/clean_006.png'); ?>" alt="">
            <div class='text-center'>
                <h3 class='text-md pl-32 sm:p-0 verde font-black'>Ortodoncia</h3>
                <p class='text-sm pl-32 sm:p-0 azul'>Sen encarga de corregir y prevenir con sujetadores la posicion de los dientes y desigualdades con el crecimiento de los huesos o problemas al masticar correctamente.</p>
            </div>
        </div>
        <?php
    }
}


if ( ! function_exists( 'dental_especialidad_endodoncia' ) ) {
    function dental_especialidad_endodoncia() {
        ?>
        <div id='especilidad-endodoncia' class='relative h-32 sm:h-64 overflow-hidden rounded-3xl shadow-xl'>
            <img id='image-endodoncia' class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center animate-pulse' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/clean_003.png'); ?>" alt="">
            <div class='text-center'>
                <h3 class='text-md pl-32 sm:p-0 verde font-black'>Endodoncia</h3>
                <p class='text-sm pl-32 sm:p-0 azul'>Trata directamente los problemas que afectan los nervios de los dientes, procurando hacer tratamientos en los conductos necesarios cuando hay caries en los nervios de los dientes.</p>
            </div>
        </div>
        <?php
    }
}


if ( ! function_exists( 'dental_especialidad_periodoncia' ) ) {
    function dental_especialidad_periodoncia() {
        ?>
        <div id='especilidad-periodoncia' class='relative h-32 sm:h-64 overflow-hidden rounded-3xl shadow-xl'>
            <img id='image-periodoncia' class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center animate-pulse' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/clean_002.png'); ?>" alt="">
            <div class='text-center'>
                <h3 class='text-md pl-32 sm:p-0 verde font-black'>Periodoncia</h3>
                <p class='text-sm pl-32 sm:p-0 azul'>Previenen y cura enfermedades relacionados con las encias, se enfonca en el tratamiento adecuedo para los tejidos dañados por enfermedades.</p>
            </div>
        </div>
        <?php
    }
}


if ( ! function_exists( 'dental_especialidad_odontopediatria' ) ) {
    function dental_especialidad_odontopediatria() {
        ?>
        <div id='especilidad-odontopediatra' class='relative h-32 sm:h-64 overflow-hidden rounded-3xl shadow-xl'>
            <img id='image-odontopediatra' class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center animate-pulse' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/clean_004.png'); ?>" alt="">
            <div class='text-center'>
                <h3 class='text-md pl-32 sm:p-0 verde font-black'>Odontopediatría</h3>
                <p class='text-sm pl-32 sm:p-0 azul'>Se especializan en el cuidado y tratamientos odontologico de niños y adolecentes</p>
            </div>
        </div>
        <?php
    }
}


if ( ! function_exists( 'dental_especialidad_cirujia' ) ) {
    function dental_especialidad_cirujia() {
        ?>
        <div id='especilidad-cirujia-oral-maxilofacial' class='relative h-32 sm:h-64 overflow-hidden rounded-3xl shadow-xl'>
            <img id='image-cirujia' class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center animate-pulse' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/clean_005.png'); ?>" alt="">
            <div class='text-center'>
                <h3 class='text-md pl-32 sm:p-0 verde font-black'>Cirugía oral y maxilofacial</h3>
                <p class='text-sm pl-32 sm:p-0 azul'>Procura tratar los dientes, curarlos y repararlos medicamente relacionados a infecciones en ojos, garganta o nariz y esteticamente reparando o remplazando dientes.</p>
            </div>
        </div>
        <?php
    }
}


if ( ! function_exists( 'dental_promo_visitanos' ) ) {
    function dental_promo_visitanos() {
        ?>
        <h3 class='align-middle azul'>Recuerda visitarnos un par de veces al año, <span class='verde font-black'>Dental "OrthoClean"</span></h3>
        <?php
    }
}


if ( ! function_exists( 'dental_tratamiento_limpieza' ) ) {
    function dental_tratamiento_limpieza() {
        ?>
        <div id='tratamiento-limpieza-dental' class='group relative overflow-hidden text-center rounded-3xl shadow-xl'>
            <a href='<?php echo site_url("limpieza-dental"); ?>'>
                <img class='ml-auto mr-auto block relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500 group-hover:underline' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/limpieza.jpg'); ?>" alt="limpieza-dental">

                <div id='ovelay-pages' class='absolute top-0 left-0 w-full h-full bg-indigo-50 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-1000 grid grid-rows-2' >

                    <h3 class='h-full relative top-0 left-0 transform translate-y-36 transition group-hover:translate-y-20 group-hover:transition group-hover:ease-in-out duration-1000 blanco font-black text-xl group-hover:text-3xl stroke-a shadow-a animate-pulse'>Limpieza Dental</h3>

                    <p class='relative top-0 left-0 transform text-transparent group-hover:text-indigo-400 group-hover:transition ease-in-out duration-1000 azul shadow-b'></p>
                </div>
            </a>
        </div>
        <?php
    }
}



if ( ! function_exists( 'dental_tratamiento_ninios' ) ) {
    function dental_tratamiento_ninios() {
        ?>
        <div id='tratamiento-ninios' class='group relative overflow-hidden text-center rounded-3xl shadow-xl'>
            
            <a href='<?php echo site_url("odontopediatria"); ?>'>
                <img class='ml-auto mr-auto block relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/childrens.jpg'); ?>" alt="niños">

                <div id='ovelay-pages' class='absolute top-0 left-0 w-full h-full bg-indigo-50 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-1000 grid grid-rows-2' >

                    <h3 class='h-full relative top-0 left-0 transform translate-y-36 transition group-hover:translate-y-20 group-hover:transition group-hover:ease-in-out duration-1000 blanco font-black text-xl group-hover:text-3xl stroke-a shadow-a animate-pulse'>Niños</h3>

                    <p class='relative top-0 left-0 transform text-transparent group-hover:text-indigo-400 group-hover:transition ease-in-out duration-1000 azul shadow-b'></p>

                </div>
            </a>
        </div>
        <?php
    }
}



if ( ! function_exists( 'dental_tratamiento_brackets' ) ) {
    function dental_tratamiento_brackets() {
        ?>
        <div id='tratamiento-brackets' class='group relative overflow-hidden text-center rounded-3xl shadow-xl'>

            <a href='<?php echo site_url("brackets"); ?>'>
                <img class='ml-auto mr-auto block relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/brackets.jpg'); ?>" alt="brackets">

                <div id='ovelay-pages' class='absolute top-0 left-0 w-full h-full bg-indigo-50 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-1000 grid grid-rows-2' >

                    <h3 class='h-full relative top-0 left-0 transform translate-y-36 transition group-hover:translate-y-20 group-hover:transition group-hover:ease-in-out duration-1000 blanco font-black text-xl group-hover:text-3xl stroke-a shadow-a animate-pulse'>Brackets</p>
                </div>
            </a>
        </div>
        <?php
        }
}



if ( ! function_exists( 'dental_tratamiento_implantes' ) ) {
    function dental_tratamiento_implantes() {
        ?>
        <div id='tratamiento-implantes' class='group relative overflow-hidden text-center rounded-3xl shadow-xl'>

            <a href='<?php echo site_url("implantes"); ?>'>
                <img class='ml-auto mr-auto block relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/implantes_a.png'); ?>" alt="implantes-dentales">

                <div id='ovelay-pages' class='absolute top-0 left-0 w-full h-full bg-indigo-50 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-1000 grid grid-rows-2' >

                    <h3 class='h-full relative top-0 left-0 transform translate-y-36 transition group-hover:translate-y-20 group-hover:transition group-hover:ease-in-out duration-1000 blanco font-black text-xl group-hover:text-3xl stroke-a shadow-a animate-pulse'>Implantes</h3>

                    <p class='relative top-0 left-0 transform text-transparent group-hover:text-indigo-400 group-hover:transition ease-in-out duration-1000 azul shadow-b'></p>
                </div>
            </a>
        </div>
        <?php
    }
}



if ( ! function_exists( 'dental_ortodoncia_ortopedia' ) ) {
    function dental_ortodoncia_ortopedia() {
        ?>
        <div id='tratamiento-molares' class='group relative overflow-hidden text-center rounded-3xl shadow-xl'>

            <a href='<?php echo site_url("ortodoncia-y-ortopedia-maxilofacial"); ?>'>
                <img class='ml-auto mr-auto block relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/ortopedia.jpg'); ?>" alt="ortopedia-ortodoncia">

                <div id='ovelay-pages' class='absolute top-0 left-0 w-full h-full bg-indigo-50 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-1000 grid grid-rows-2' >

                    <h3 class='h-full relative top-0 left-0 transform translate-y-36 transition group-hover:translate-y-20 group-hover:transition group-hover:ease-in-out duration-1000 blanco font-black text-xl group-hover:text-3xl stroke-a shadow-a animate-pulse'>Ortodoncia y Ortopedia Maxilofacial</h3>

                    <p class='relative top-0 left-0 transform text-transparent group-hover:text-indigo-400 group-hover:transition ease-in-out duration-1000 azul shadow-b'></p>
                </div>
            </a>
        </div>
        <?php
    }
}



if ( ! function_exists( 'dental_cirujia_dental' ) ) {
    function dental_cirujia_dental() {
        ?>
        <div id='cirujia-dental' class='group relative overflow-hidden text-center rounded-3xl shadow-xl'>

            <a href='<?php echo site_url("cirujia-bucal-y-maxilofacial"); ?>'>
                <img class='ml-auto mr-auto block relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/cirujia.jpg'); ?>" alt="cirujia-dental">

                <div id='ovelay-pages' class='absolute top-0 left-0 w-full h-full bg-indigo-50 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-1000 grid grid-rows-2' >

                    <h3 class='h-full relative top-0 left-0 transform translate-y-36 transition group-hover:translate-y-20 group-hover:transition group-hover:ease-in-out duration-1000 blanco font-black text-xl group-hover:text-3xl stroke-a shadow-a animate-pulse'>Cirujia Bucal y Maxilofacial</h3>

                    <p class='relative top-0 left-0 transform text-transparent group-hover:text-indigo-400 group-hover:transition ease-in-out duration-1000 azul shadow-b'></p>
                </div>
            </a>
        </div>        
        <?php
    }
}



if ( ! function_exists( 'test' ) ) {
    function test() {
        ?>
        ...probando...
        <?php
    }
}


