<?php
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {


    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = str_repeat("\t", $depth);
        $attributes  = '';

        ! empty ( $item->attr_title )
        // Avoid redundant titles
        and $item->attr_title !== $item->title
        and $attributes .= ' title="' . esc_attr( $item->attr_title ) .'"';

        ! empty ( $item->url )
        and $attributes .= ' href="' . esc_attr( $item->url ) .'"';

        $attributes  = trim( $attributes );
        $title       = apply_filters( 'the_title', $item->title, $item->ID );
        $item_output = "$args->before<a $attributes>$args->link_before$title</a>"
                       . "$args->link_after$args->after";

        // Select a CSS class for this '<li>' based on $depth
        switch( $depth ) {
            case 0:
                // Top-level '<li>'s get the 'nav-main-item' class
                $class = 'nav-item';
                break;
            default:
                // All other '<li>'s receive no class
                break;
        }

        // Only print out the 'class' attribute if a class has been assigned
        if( isset( $class ) ){
            $output .= $indent . '<li class="'. $class . '">';
        }
        else
            $output .= $indent . '<li>';

        
        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
        $class_names = "class = 'dropdown-item'";
        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        $item_output = $args->before;
        $item_output .= '<a'. $attributes . $class_names .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
    
        $output .= apply_filters(
                'walker_nav_menu_start_el',
                $item_output,
                $item,
                $depth,
                $args
            );
    }

}