<p><?php printf( __( 'Before you can use this widget, you will need to %s add some custom fields %s to it.', 'acf-widgets' ), '<a href="edit.php?post_type=acf-field-group">', '</a>' ); ?></p>
<p><?php printf( __( 'Add a new field group and set the %s Location %s equal to: %s Widget is equal to %s %s .', 'acf-widgets' ), '<i>', '</i>', '<b>', $post->post_title, '</b>' ); ?></p>
<p><?php printf( __( 'To show this widget in your theme, add a new template file to your theme directory named %s or %s .', 'acf-widgets' ), '<strong>widget-' . $post->post_name . '.php</strong>', '<strong>widget-' . $post->ID . '.php</strong>' ); ?></p>
<p><?php _e( 'You can show the values from your widgets in your templates by using the following syntax.', 'acf-widgets' ); ?></p>
<code>&lt;?php the_field( '<?php _e( 'YOUR_FIELD_NAME', 'acf-widgets' ); ?>', $acfw ); ?&gt;</code>
<p><a href='https://www.youtube.com/watch?v=YRfvqmSQG7o' target='_blank'><?php _e( 'Watch Tutorial', 'acf-widgets' ); ?></a> <?php _e( 'or', 'acf-widgets' ); ?> <a href='http://acfwidgets.com/support/'><?php _e( 'Read More', 'acf-widgets' ); ?></a></p>