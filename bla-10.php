<?php
// Example foo.php template.
 
// Set defaults.
$args = wp_parse_args(
    $args,
    array(
        'class'          => '',
        'arbitrary_data' => array(
            'foo' => 'fooval',
            'bar' => false,
        ),
    )
);
?>


<div class="widget <?php echo esc_html_class( $args['class'] ); ?>">
    <?php echo esc_html( $args['arbitrary_data']['foo'] ); ?>
</div>
