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
            <div class='verde text-3xl grid grid-cols-1'>
                <h1 class='text-center'>
                    <?php the_title(); ?>
                </h1>
            </div>
            <?php the_content(); ?>

        <?php
    }
}


if ( ! function_exists( 'dental_content_treatment' ) ) {
    /**
     * Muestra el contenido de los tratamientos
     *
     * @since 1.0.0
     */
    function dental_content_treatment() {
        ?>
            <div class='verde text-3xl grid grid-cols-1 relative text-center shadow-xl rounded-3xl'>
                <div class='h-full mt-2'>
                    <?php the_post_thumbnail( 'full', ['class' => 'mx-auto'] ); ?>
                </div>
                <div class='text-center'>
                    <h1 class='w-full absolute top-0 left-0 m-0 stroke-a shadow-b sm:text-6xl lg:text-7xl'>
                        <?php the_title(); ?>
                    </h1>
                    <div class='w-full absolute top-14 text-white left-0 text-base sm:text-2xl text-black shadow-a pl-2 pr-2 sm:top-28 md:text-4xl'>
                        <?php the_content(); ?>
                    </div>
                </dib>
            </div>
            <div class='nuevo grid grid-cols-2'></div>
            
            

        <?php
    }
}




if ( ! function_exists('splider_slider') ) {
    function splider_slider() {
        ?>
        <div id="slider-icons" class="splide mt-5">
            
            <div class='splide__slider'>
                <div class="splide__track">
                    <ul class="splide__list">
                    <li class="splide__slide">
                            <img src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/clean_001.png'); ?> ">
                        </li>
                        <li class="splide__slide">
                            <img src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/clean_002.png'); ?> ">
                        </li>
                        <li class="splide__slide">
                            <img src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/clean_003.png'); ?> ">
                        </li>
                        <li class="splide__slide">
                            <img src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/clean_004.png'); ?> ">
                        </li>
                        <li class="splide__slide">
                            <img src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/clean_005.png'); ?> ">
                        </li>
                        <li class="splide__slide">
                            <img src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/clean_006.png'); ?> ">
                        </li>
                        <li class="splide__slide">
                            <img src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/clean_007.png'); ?> ">
                        </li>
                        <li class="splide__slide">
                            <img src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/clean_008.png'); ?> ">
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <?php
    }
}


if ( ! function_exists( 'dental_contact_form' ) ) {
    /**
     * Muestra el contenido del post
     *
     * @since 1.0.0
     */
    function dental_contact_form() {
        ?>
            <!-- contact_form -->
            <div id='contact_form' class="mt-14 gap-5">
                <div id='titulo' class='verde text-3xl p-3'>
                    <h1 class='text-center shadow-xl rounded-3xl'>
                        <?php the_title(); ?>
                    </h1>
                </div>
                <div id='informacion' class='text-center p-3 shadow-xl rounded-3xl text-xl'>
                    <p class='verde'>C. Jacarandas #62, El Molino Tezonco, Iztapalapa, CDMX</p>
                    <p class='azul'>Nuestros teléfonos son 5618350826 y 5570072288.</p>
                    <br>
                    <p class='verde'>Puede comunicarse con nosotros en el horario siguiente.</p>
                    <p class='azul'>Lunes a Domingo de 9 am a 7 pm.</p>
                </div>
                
                <div id='info-grafica' class='grid grid-cols-1 md:grid-cols-2 gap-3 inver p-1'>
                    <div class='shadow-xl rounded-3xl overflow-hidden'>
                        <h2 id='mapa' class='verde text-xl text-center font-bold pt-14'>Mapa</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15062.655445008231!2d-99.0671977!3d19.2969786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x750fc3166e99e677!2sDental%20OrthoClean!5e0!3m2!1ses-419!2smx!4v1624748923779!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class='w-full max-h-96 min-h-full shadow-xl rounded-3xl overflow-hidden'></iframe>
                        
                    </div>

                    <div class='shadow-xl rounded-3xl'>
                        <div id='formulario' class='verde'>
                            <div class='text-center pl-1 pr-1 pt-5 md:pl-7 md:pr-7'>
                                <p>Si desean comunicarse con nosotros via correo electrónico y para recibir una respuesta concreta.</p>
                                <p class='azul'>Por favor a continuación llene nuestro formulario de contacto.</p>
                            </div>
                            <div class='verde bg-center mx-auto sm:ml-10 sm:mr-10'>
                                <?php echo do_shortcode( '[wpforms id="141"]' );?>
                                <?php echo do_shortcode( '[wpforms id="118"]' );?>
                            </div>
                        </div>
                    
                    </div>
                    
                </div>
            </div>
            <!-- /contact_form -->
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


if (! function_exists( 'mau_test' )) {
    function mau_test(){
        ?>
        <div class=''>Este es un ejemplo de caja.</div>
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
                <p class='text-sm pl-32 sm:p-0 azul'>Sen encarga de corregir y prevenir con sujetadores la posición de los dientes y desigualdades con el crecimiento de los huesos o problemas al masticar correctamente.</p>
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
                <p class='text-sm pl-32 sm:p-0 azul'>Previenen y cura enfermedades relacionados con las encías, se enfonca en el tratamiento adecuado para los tejidos dañados por enfermedades.</p>
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
                <p class='text-sm pl-32 sm:p-0 azul'>Se especializan en el cuidado y tratamientos odontológico de niños y adolescentes</p>
            </div>
        </div>
        <?php
    }
}


if ( ! function_exists( 'dental_especialidad_cirugia' ) ) {
    function dental_especialidad_cirugia() {
        ?>
        <div id='especilidad-cirugia-oral-maxilofacial' class='relative h-32 sm:h-64 overflow-hidden rounded-3xl shadow-xl'>
            <img id='image-cirugia' class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center animate-pulse' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/clean_005.png'); ?>" alt="">
            <div class='text-center'>
                <h3 class='text-md pl-32 sm:p-0 verde font-black'>Cirugía oral y maxilofacial</h3>
                <p class='text-sm pl-32 sm:p-0 azul'>Procura tratar los dientes, curarlos y repararlos médicamente relacionados a infecciones en ojos, garganta o nariz y estéticamente reparando o remplazando dientes.</p>
            </div>
        </div>
        <?php
    }
}


if ( ! function_exists( 'dental_promo_visitanos' ) ) {
    function dental_promo_visitanos() {
        ?>
        <h3 class='align-middle azul'>Recuerda visitarnos un par de veces al año, <span class='verde font-black'>Dental "OrthoClean"</span>.</h3>
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



if ( ! function_exists( 'dental_cirugia_dental' ) ) {
    function dental_cirugia_dental() {
        ?>
        <div id='cirugia-dental' class='group relative overflow-hidden text-center rounded-3xl shadow-xl'>

            <a href='<?php echo site_url("cirugia-bucal-y-maxilofacial"); ?>'>
                <img class='ml-auto mr-auto block relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/cirugia.jpg'); ?>" alt="cirugia-dental">

                <div id='ovelay-pages' class='absolute top-0 left-0 w-full h-full bg-indigo-50 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-1000 grid grid-rows-2' >

                    <h3 class='h-full relative top-0 left-0 transform translate-y-36 transition group-hover:translate-y-20 group-hover:transition group-hover:ease-in-out duration-1000 blanco font-black text-xl group-hover:text-3xl stroke-a shadow-a animate-pulse'>Cirugía Bucal y Maxilofacial</h3>

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


