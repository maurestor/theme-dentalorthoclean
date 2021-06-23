<?php get_header(); ?>

<main id="site-content" role="main" class=''>
    
    
    <div id='carrousel' class="portada col-span-1 grid grid-cols-1 mt-14">

        <div class="container col-span-12 h-128 pt-5 sm:pt-16 md:pt-7 max-w-5xl xl:w-11/12">
            <?php echo do_shortcode( '[smartslider3 slider="2"]');?>
        </div>

    </div>


    <div id='promo-superior' class='text-sm md:text-2xl sans-serif text-center h-24 mt-auto mb-auto p-5 shadow-xl shadow-inner rounded-3xl'>
        <h3 class='align-middle azul'>Ven con nosotros a <span class='verde rounded font-black'>Dental "OrthoClean"</span> a tomar una consulta, te esperamos.</h3>
    </div>


    <div id='menu-pages-second' class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 p-5'>
        
        <div id='valoracion' class='group relative overflow-hidden text-center rounded-3xl'>
            <img src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/limpiezas.jpg'); ?>" alt="Niños" class='ml-auto mr-auto relative bg-center max-w-full min-h-full transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500'>
            
            <div class='absolute top-0 left-0 w-full h-full bg-indigo-50 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-1000 grid grid-rows-2 text-shadow-lg' id='ovelay-pages'>
                <h3 class='h-full relative top-0 left-0 transform translate-y-36 transition group-hover:translate-y-20 group-hover:transition group-hover:ease-in-out duration-1000 verde font-black text-xl group-hover:text-3xl'>Valoracion y consulta con camara intraoral</h3>
                <p></p>
            </div>
        </div>
        
        
        <div id='valoracion-intraoral' class='group relative overflow-hidden text-center rounded-3xl'>
            <img class='ml-auto mr-auto relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/intraoral.jpg'); ?>" alt="Camara Intraoral">
            
            <div class='absolute top-0 left-0 w-full h-full bg-indigo-50 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-1000 grid grid-rows-2' id='ovelay-pages'>
                <h3 class='h-full relative top-0 left-0 transform translate-y-36 transition group-hover:translate-y-20 group-hover:transition group-hover:ease-in-out duration-1000 verde font-black text-xl group-hover:text-3xl'>Valoracion y consulta con camara intraoral</h3>
            
                <p></p>
            
            </div>
        </div>

        <div id='presupuesto' class='group relative overflow-hidden text-center rounded-3xl'>
                
            <img class='ml-auto mr-auto relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/presupuesto.jpg'); ?>" alt="Camara Intraoral">
                
            <div class='absolute top-0 left-0 w-full h-full bg-indigo-50 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-1000 grid grid-rows-2' id='ovelay-pages'>
                <h3 class='h-full relative top-0 left-0 transform translate-y-36 transition group-hover:translate-y-20 group-hover:transition group-hover:ease-in-out duration-1000 verde font-black text-xl group-hover:text-3xl'>Presupuesto digital sin costo</h3>
            
                <p></p>
            
            </div>
        </div>
        
    </div>


    <div id='promo-contamos-especialidades' class='text-sm md:text-2xl sans-serif text-center h-24 mt-auto mb-auto p-5 shadow-xl shadow-inner rounded-3xl'>
        <h3 class='align-middle azul'>En <span class='verde rounded font-black'>Dental "OrthoClean"</span> <span class='azul'>contamos con todas las especialidades para ti y tu familia</span></h3>
    </div>
    

    <div id='info-especilidades' class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 p-5'>

        <div id='especilidad-ortodoncia' class='relative h-32 sm:h-64 overflow-hidden rounded-3xl'>
            <img id='image-ortodocia' class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center' src="<?php echo site_url('wp-content/uploads/2021/06/ortodoncia.png'); ?>" alt="">
            <div class='text-center'>
                <h3 class='text-md pl-32 sm:p-0 verde font-black'>Ortodoncia</h3>
                <p class='text-sm pl-32 sm:p-0 azul'>Sen encarga de corregir y prevenir con sujetadores la posicion de los dientes y desigualdades con el crecimiento de los huesos o problemas al masticar correctamente.</p>
            </div>
        </div>

        <div id='especilidad-endodoncia' class='relative h-32 sm:h-64 overflow-hidden rounded-3xl'>
            <img id='image-endodoncia' class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center' src="<?php echo site_url('wp-content/uploads/2021/06/endodoncia.jpg'); ?>" alt="">
            <div class='text-center'>
                <h3 class='text-md pl-32 sm:p-0 verde font-black'>Endodoncia</h3>
                <p class='text-sm pl-32 sm:p-0 azul'>Trata directamente los problemas que afectan los nervios de los dientes, procurando hacer tratamientos en los conductos necesarios cuando hay caries en los nervios de los dientes.</p>
            </div>
        </div>

        <div id='especilidad-periodoncia' class='relative h-32 sm:h-64 overflow-hidden rounded-3xl'>
            <img id='image-periodoncia' class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center' src="<?php echo site_url('wp-content/uploads/2021/06/periodoncia.jp'); ?>g" alt="">
            <div class='text-center'>
                <h3 class='text-md pl-32 sm:p-0 verde font-black'>Periodoncia</h3>
                <p class='text-sm pl-32 sm:p-0 azul'>Previenen y cura enfermedades relacionados con las encias, se enfonca en el tratamiento adecuedo para los tejidos dañados por enfermedades.</p>
            </div>
        </div>

        <div id='especilidad-odontopediatra' class='relative h-32 sm:h-64 overflow-hidden rounded-3xl'>
            <img id='image-odontopediatra' class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center' src="<?php echo site_url('wp-content/uploads/2021/06/ninios.png'); ?>" alt="">
            <div class='text-center'>
                <h3 class='text-md pl-32 sm:p-0 verde font-black'>Odontopediatría</h3>
                <p class='text-sm pl-32 sm:p-0 azul'>Se especializan en el cuidado y tratamientos odontologico de niños y adolecentes</p>
            </div>
        </div>
        <div id='especilidad-cirujia-oral-maxilofacial' class='relative h-32 sm:h-64 overflow-hidden rounded-3xl'>
            <img id='image-cirujia' class='absolute sm:static h-32 w-32 sm:h-32 sm:w-32 m-auto transition duration-200 ease-in-out bg-blue-500 transform hover:-translate-y-1 hover:scale-125 bg-center' src="<?php echo site_url('wp-content/uploads/2021/06/surgery.jpg'); ?>" alt="">
            <div class='text-center'>
                <h3 class='text-md pl-32 sm:p-0 verde font-black'>Cirugía oral y maxilofacial</h3>
                <p class='text-sm pl-32 sm:p-0 azul'>Procura tratar los dientes, curarlos y repararlos medicamente relacionados a infecciones en ojos, garganta o nariz y esteticamente reparando o remplazando dientes.</p>
            </div>
        </div>
    </div>

    
    
    <div id='promo-visitarnos' class='text-sm md:text-2xl sans-serif text-center h-24 mt-auto mb-auto p-5 shadow-xl shadow-inner rounded-3xl'>
        <h3 class='align-middle azul'>Recuerda visitarnos un par de veces al año, <span class='verde font-black'>Dental "OrthoClean"</span></h3>
    </div>


    <div id ='tratamientos' class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-5'>
        
        <div id='tratamiento-limpieza-dental' class='group relative overflow-hidden text-center rounded-3xl'>
            <a href='<?php echo site_url("#limpieza"); ?>'>
                <img class='ml-auto mr-auto block relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500 group-hover:underline' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/limpieza.jpg'); ?>" alt="limpieza-dental">

                <div class='absolute top-0 left-0 w-full h-full bg-green-100 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-700 grid grid-rows-2' id='ovelay-pages '>

                    <h3 class='relative top-0 left-0 transform -translate-y-16 group-hover:translate-y-0 group-hover:py-4 group-hover:transition group-hover:ease-in-out duration-1000 verde font-bold group-hover:underline'>Limpieza Dental</h3>

                    <p class='relative top-0 left-0 transform text-transparent group-hover:text-indigo-400 group-hover:transition ease-in-out duration-1000 azul'>Obtén una higiene bucal fantastica, sin dolor con lo último en tecnología.</p>
                </div>
            </a>
        </div>

        <div id='tratamiento-ninios' class='group relative overflow-hidden text-center rounded-3xl'>
            
            <img class='ml-auto mr-auto block relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/childrens.jpg'); ?>" alt="niños">

            <div class='absolute top-0 left-0 w-full h-full bg-green-100 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-700 grid grid-rows-2' id='ovelay-pages'>

                <h3 class='relative top-0 left-0 transform -translate-y-16 group-hover:translate-y-0 group-hover:py-4 group-hover:transition group-hover:ease-in-out duration-1000 verde'>Niños</h3>

                <p class='relative top-0 left-0 transform text-transparent group-hover:text-indigo-400 group-hover:transition ease-in-out duration-1000 azul'>ninios</p>

            </div>
        </div>
        
        <div id='tratamiento-brackets' class='group relative overflow-hidden text-center rounded-3xl'>

            <img class='ml-auto mr-auto block relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/brackets.jpg'); ?>" alt="brackets">

            <div class='absolute top-0 left-0 w-full h-full bg-green-100 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-700 grid grid-rows-2' id='ovelay-pages'>

                <h3 class='relative top-0 left-0 transform -translate-y-16 group-hover:translate-y-0 group-hover:py-4 group-hover:transition group-hover:ease-in-out duration-1000 verde'>Brackets</h3>

                <p class='relative top-0 left-0 transform text-transparent group-hover:text-indigo-400 group-hover:transition ease-in-out duration-1000 azul'>Brackest</p>
            </div>
        </div>
        
        <div id='tratamiento-implantes' class='group relative overflow-hidden text-center rounded-3xl'>

            <img class='ml-auto mr-auto block relative bg-center max-w-full h-auto transform scale-100 group-hover:transform group-hover:scale-125 group-active:transition ease-in-out duration-500' src="<?php echo site_url('wp-content/themes/orthoclean/assets/img/implantes_a.png'); ?>" alt="implantes-dentales">

            <div class='absolute top-0 left-0 w-full h-full bg-green-100 bg-opacity-0 group-hover:bg-opacity-50 group-hover:transition ease-in-out duration-700 grid grid-rows-2' id='ovelay-pages'>

                <h3 class='relative top-0 left-0 transform -translate-y-16 group-hover:translate-y-0 group-hover:py-4 group-hover:transition group-hover:ease-in-out duration-1000 verde'>Implantes</h3>

                <p class='relative top-0 left-0 transform text-transparent group-hover:text-indigo-400 group-hover:transition ease-in-out duration-1000 azul'>Implantes</p>
            </div>
        </div>
    </div>


    <div id='carousel-pictures'>

    </div>

<?php //get_template_part(); ?>
<?php get_footer(); ?>