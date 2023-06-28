<?php
get_header();
?>
<?php get_header(); ?>

<!-- Section 1 -->
<div class="section blueback">
    <div class="half photo">
    <img src="<?php echo get_template_directory_uri(); ?>/images/stefano-sin-ch.png" alt="Logo">
        <!-- Add your photo here -->
    </div>
    <div class="half text">
        <p class="whiteText">¿Te gustaría desarrollar una mentalidad estrategica empresarial?</p>
        <p class="whiteText">Una mentalidad donde tus acciones, conductas y posiciones esten basadas en tu propósito personal o profesional.</p>
        <p class="whiteText">Una mentalidad que incluyatodas aquellas herramientas que has ido generando con sus experiencias de vida.</p>
    </div>
</div>

<!-- Section 2 -->
<div class="section">
    <div class="half text">
        <p>Hola soy Stefano Melis y ayudo a los empresarios a desarrollar, construir y evolucionar hacia una mentalidad estratégica empresarial.</p>
        <p>La pandemia nos ha dejado enseñanzas valiosas sobre la necesidad de pensar las empresas de manera diferente.</p>
        <p>Empresas con un enfoque destinado a crear proyectos con visión, con propósito, pero adaptables a las realidades cambiantes.</p>
        <p>Porque si todos los grandes empresarios han tenido un mentor, ¿No será el camino más rápido para conseguir los resultados que buscas?</p>
    </div>
    <div class="half photo">
    <img src="<?php echo get_template_directory_uri(); ?>/images/stefano_pensativo.png" alt="Logo">
        <!-- Add your photo here -->
    </div>
</div>

<!-- Section 3 -->
<div class="section golden section3" style="background-image: url('<?php echo get_template_directory_uri();?>/images/gold-background.png');">
    <!-- Your content here -->
    <div class="section3-text">
        <h1>METODO</h1>
        <p>AUTOCONOCIMIENTO</p>
    </div>
    <div class="circles circles1">
        <div class="circle circle1"><h1>C</h1></div>
        <div class="circle circle2"><h1>C</h1></div>
        <div class="circle circle3"><h1>F</h1></div>
    </div>
</div>

<!-- Section 4 -->
<div class="section section4">
    <div class="centered-title">
        <h1>Te puedo ayudar con:</h1>
    </div>
    <div class="boxes">
        <div class="box">
            <h2>Producto 1</h2>
            <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.Donec nec efficitur lacus, quisblandit turpis. Vestibulumdictum varius ipsum. Duisfermentum rutrum pulvinar.</p>
        </div>
        <div class="box">
            <h2>Producto 2</h2>
            <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.Donec nec efficitur lacus, quisblandit turpis. Vestibulumdictum varius ipsum. Duisfermentum rutrum pulvinar.</p>
        </div>
        <div class="box">
            <h2>Producto 3</h2>
            <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.Donec nec efficitur lacus, quisblandit turpis. Vestibulumdictum varius ipsum. Duisfermentum rutrum pulvinar.</p>
        </div>
    </div>
</div>

<!-- Section 5 -->
<div class="section golden section5" style="background-image: url('<?php echo get_template_directory_uri();?>/images/gold-background.png');">
    <div class="centered-title">
    <h1>Quienes han sido acompañados por un coach:</h1>
    </div>
    <div class="circles circles2">
        <div class="circle circle51">
            <!-- Add your photo here -->
            
        </div>
        <div class="circle circle52">
            <!-- Add your photo here -->
        </div>
        <div class="circle circle53">
            <!-- Add your photo here -->
        </div>
        <div class="circle circle54">
            <!-- Add your photo here -->
        </div>
    </div>
</div>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
endif;
?>

<?php get_footer(); ?>

