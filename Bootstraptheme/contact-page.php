<?php 

/**
 * Template Name: Contact us
 */

get_header() ?>

<section class="map-holder pb-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.93176718705!2d73.00568367479242!3d19.06673738213589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c1ce05f24ce3%3A0x3fa23fc72670420b!2sThe%20Yellow%20Strawberry!5e0!3m2!1sen!2sin!4v1725534624260!5m2!1sen!2sin" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="contact-main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <?php if ( is_active_sidebar( 'contact_us_form' ) ) : ?>
                 <?php dynamic_sidebar( 'contact_us_form' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-8 col-lg-8">
            <?php 
             $table = get_field( 'timings' );

                if ( ! empty ( $table ) ) {

                    echo '<table border="0" class="table border small">';

                        if ( ! empty( $table['caption'] ) ) {

                            echo '<caption>' . $table['caption'] . '</caption>';
                        }

                        if ( ! empty( $table['header'] ) ) {

                            echo '<thead>';

                                echo '<tr>';

                                    foreach ( $table['header'] as $th ) {

                                        echo '<th>';
                                            echo $th['c'];
                                        echo '</th>';
                                    }

                                echo '</tr>';

                            echo '</thead>';
                        }

                        echo '<tbody>';

                            foreach ( $table['body'] as $tr ) {

                                echo '<tr>';

                                    foreach ( $tr as $td ) {

                                        echo '<td>';
                                            echo $td['c'];
                                        echo '</td>';
                                    }

                                echo '</tr>';
                            }

                        echo '</tbody>';

                    echo '</table>';
                }
            ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>