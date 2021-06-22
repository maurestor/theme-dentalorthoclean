<?php get_header(); ?>

<main id="site-content" role="main" class=''>
    
    
    <div id='carrousel' class="portada col-span-1 grid grid-cols-1 mt-14">

        <div class="container col-span-12 h-128 pt-5 sm:pt-16 md:pt-7">
            <?php echo do_shortcode( '[smartslider3 slider="2"]');?>
        </div>

    </div>

    <div class='text-sm md:text-2xl sans-serif text-center h-20'>
        <h3 class='align-middle azul text-sm sm:text-base md:text-lg font-medium'>Ven con nosotros a <span class='verde rounded font-black'>Dental "OrthoClean"</span> a tomar una consulta, te esperamos.</h3>
    </div>
    
    <div id='menu-pages-second' class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3'>
        
        <div id='ninios' class='group relative overflow-hidden text-center'>
            <img class='ml-auto mr-auto relative bg-center max-w-full h-72 min-h-full transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="" alt="Niños">
            
            <div class='absolute top-0 left-0 w-full h-full bg-green-100 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-700 grid grid-rows-2' id='ovelay-pages'>
                <h3 class='relative top-0 left-0 transform translate-y-9 transition  group-hover:translate-y-12 group-hover:transition group-hover:ease-in-out duration-1000'>Valoracion y consulta con camara intraoral</h3>
                <p></p>
            </div>
        </div>
        
        
        <div id='valoracion-intraoral' class='group relative overflow-hidden text-center'>
            <img class='ml-auto mr-auto relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/intraoral.jpg'); ?>" alt="Camara Intraoral">
            
            <div class='absolute top-0 left-0 w-full h-full bg-green-100 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-700 grid grid-rows-2' id='ovelay-pages'>
            
                <h3 class='relative top-0 left-0 transform translate-y-9 transition  group-hover:translate-y-12 group-hover:transition group-hover:ease-in-out duration-1000'>Valoracion y consulta con camara intraoral</h3>
            
                <p></p>
            
            </div>
        </div>

        <div id='presupuesto' class='group relative overflow-hidden text-center'>
                
            <img class='ml-auto mr-auto relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/presupuesto.jpg'); ?>" alt="Camara Intraoral">
                
            <div class='absolute top-0 left-0 w-full h-full bg-green-100 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-700 grid grid-rows-2' id='ovelay-pages'>
            
                <h3 class='relative top-0 left-0 transform translate-y-9 transition  group-hover:translate-y-12 group-hover:transition group-hover:ease-in-out duration-1000'>Presupuesto digital sin costo</h3>
            
                <p></p>
            
            </div>
        </div>
        
    </div>

    <div>
        <div id='promo-contamos-especialidades' class='text-sm md:text-2xl sans-serif text-center h-20'>
            <h3 class='align-middle'>En <span class='text-green-500'>Dental "OrthoClean"</span> contamos con todas las especialidades para ti y tu familia</h3>
        </div>
        

        <div id='info-especilidades' class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 '>

            <div id='especilidad-ortodoncia' class='relative h-32 sm:h-64 overflow-hidden'>
                <img class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center' src="<?php echo site_url('wp-content/uploads/2021/06/ortodoncia.png'); ?>" alt="">
                <div class='text-center'>
                    <h3 class='text-md pl-32 sm:p-0'>Ortodoncia</h3>
                    <p class='text-sm pl-32 sm:p-0'>Sen encarga de corregir y prevenir con sujetadores la posicion de los dientes y desigualdades con el crecimiento de los huesos o problemas al masticar correctamente.</p>
                </div>
            </div>

            <div id='especilidad-endodoncia' class='relative h-32 sm:h-64 overflow-hidden'>
                <img class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center' src="<?php echo site_url('wp-content/uploads/2021/06/endodoncia.jpg'); ?>" alt="">
                <div class='text-center'>
                    <h3 class='text-md pl-32 sm:p-0 '>Endodoncia</h3>
                    <p class='text-sm pl-32 sm:p-0'>Trata directamente los problemas que afectan los nervios de los dientes, procurando hacer tratamientos en los conductos necesarios cuando hay caries en los nervios de los dientes.</p>
                </div>
            </div>

            <div id='especilidad-periodoncia' class='relative h-32 sm:h-64 overflow-hidden'>
                <img class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center' src="<?php echo site_url('wp-content/uploads/2021/06/periodoncia.jp'); ?>g" alt="">
                <div class='text-center'>
                    <h3 class='text-md pl-32 sm:p-0 '>Periodoncia</h3>
                    <p class='text-sm pl-32 sm:p-0'>Previenen y cura enfermedades relacionados con las encias, se enfonca en el tratamiento adecuedo para los tejidos dañados por enfermedades.</p>
                </div>
            </div>

            <div id='especilidad-odontopediatra' class='relative h-32 sm:h-64 overflow-hidden'>
                <img class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center' src="<?php echo site_url('wp-content/uploads/2021/06/ninios.png'); ?>" alt="">
                <div class='text-center'>
                    <h3 class='text-md pl-32 sm:p-0 '>Odontopediatría</h3>
                    <p class='text-sm pl-32 sm:p-0'>Se especializan en el cuidado y tratamientos odontologico de niños y adolecentes</p>
                </div>
            </div>
            <div id='especilidad-cirujia-oral-maxilofacial' class='relative h-32 sm:h-64 overflow-hidden'>
                <img class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center' src="<?php echo site_url('wp-content/uploads/2021/06/surgery.jpg'); ?>" alt="">
                <div class='text-center'>
                    <h3 class='text-md pl-32 sm:p-0 '>Cirugía oral y maxilofacial</h3>
                    <p class='text-sm pl-32 sm:p-0'>Procura tratar los dientes, curarlos y repararlos medicamente relacionados a infecciones en ojos, garganta o nariz y esteticamente reparando o remplazando dientes.</p>
                </div>
            </div>
        </div>
    </div>

    <div id='promo-visitarnos' class='text-sm md:text-2xl sans-serif text-center h-20'>
        <h3 class='align-middle'>Recuerda visitarnos un par de veces al año, <span class='text-green-500'>Dental "OrthoClean"</span></h3>
    </div>

    <div id ='tratamientos' class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4'>
        <div id='tratamiento-limpieza-dental' class='group relative overflow-hidden text-center'>

            <img class='ml-auto mr-auto block relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/limpieza.jpg'); ?>" alt="limpieza-dental">

            <div class='absolute top-0 left-0 w-full h-full bg-green-100 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-700 grid grid-rows-2' id='ovelay-pages'>

                <h3 class='relative top-0 left-0 transform -translate-y-16 group-hover:translate-y-0 group-hover:py-4 group-hover:transition group-hover:ease-in-out duration-1000'>Limpieza Dental</h3>

                <p class='relative top-0 left-0 transform text-transparent group-hover:text-gray-900 group-hover:transition ease-in-out duration-1000'>Obtén una higiene bucal fantastica, sin dolor con lo último en tecnología.</p>
            </div>
        </div>


        <div id='tratamiento-ninios' class='group relative overflow-hidden text-center'>

            <img class='ml-auto mr-auto block relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/childrens.jpg'); ?>" alt="niños">

            <div class='absolute top-0 left-0 w-full h-full bg-green-100 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-700 grid grid-rows-2' id='ovelay-pages'>

                <h3 class='relative top-0 left-0 transform -translate-y-16 group-hover:translate-y-0 group-hover:py-4 group-hover:transition group-hover:ease-in-out duration-1000'>Niños</h3>

                <p class='relative top-0 left-0 transform text-transparent group-hover:text-gray-900 group-hover:transition ease-in-out duration-1000'>ninios</p>

            </div>
        </div>
        
        <div id='tratamiento-brackets' class='group relative overflow-hidden text-center'>

            <img class='ml-auto mr-auto block relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/brackets.jpg'); ?>" alt="brackets">

            <div class='absolute top-0 left-0 w-full h-full bg-green-100 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-700 grid grid-rows-2' id='ovelay-pages'>

                <h3 class='relative top-0 left-0 transform -translate-y-16 group-hover:translate-y-0 group-hover:py-4 group-hover:transition group-hover:ease-in-out duration-1000'>Brackets</h3>

                <p class='relative top-0 left-0 transform text-transparent group-hover:text-gray-900 group-hover:transition ease-in-out duration-1000'>Brackest</p>
            </div>
        </div>
        
        <div id='tratamiento-implantes' class='group relative overflow-hidden text-center'>

            <img class='ml-auto mr-auto block relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/implantes.jpg'); ?>" alt="implantes-dentales">

            <div class='absolute top-0 left-0 w-full h-full bg-green-100 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-700 grid grid-rows-2' id='ovelay-pages'>

                <h3 class='relative top-0 left-0 transform -translate-y-16 group-hover:translate-y-0 group-hover:py-4 group-hover:transition group-hover:ease-in-out duration-1000'>Implantes</h3>

                <p class='relative top-0 left-0 transform text-transparent group-hover:text-gray-900 group-hover:transition ease-in-out duration-1000'>Implantes</p>
            </div>
        </div>
    </div>


    <div id='carousel-pictures'>

    </div>

<?php //get_template_part(); ?>
<?php get_footer(); ?>