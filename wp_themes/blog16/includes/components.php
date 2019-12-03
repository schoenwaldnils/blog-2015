<?php

function find_components() {

  $theme_dir = wp_get_theme()->template_dir . '/';

  if (file_exists($theme_dir . 'component.json')) {
    $root_json = json_decode(file_get_contents($theme_dir . 'component.json'), TRUE);

    // if ($root_json['dependencies']) {
    //   $found_components['dependencies'] = $root_json['dependencies'];
    // }

    if ($root_json['locals']) {
      $found_components['locals'] = $root_json['locals'];
    }

    //var_dump($found_components);

    return $found_components;
  } else {
    return NULL;
  }

};


function define_component_vars() {

  $found_components = find_components();

  if (isset($found_components)) {
    foreach ($found_components['locals'] as $local) {

      $name = $local;

      $theme_dir = wp_get_theme()->template_dir . '/';
      $base = 'components_local/';
      $component_dir = $theme_dir . $base . $name . '/';

      if (file_exists($component_dir . 'component.json')) {

        $defined_component = [];

        $defined_component['name'] = $name;

        $json = json_decode(file_get_contents($component_dir . 'component.json'), TRUE);

        if (!empty($json['backend'])) {
          $args = $json['backend']['fixture'];
          $args = shortcode_atts($args, $json['backend']['options']);

          //var_dump($args);

          $defined_component['args'] = $args;
        }

        if (!empty($json['backend']['template'])) {

          //$tpl_name = $json['backend']['template'];
          $tpl_name = str_replace('.haml', '.php', $json['backend']['template']);

          $defined_component['template'] = $base . $name . '/' . $tpl_name;

          $components[] = $defined_component;
        }

      }
      unset($defined_component);

    }

    return $components;
  } else {
    return NULL;
  }
}

function register_components() {
  $components = define_component_vars();

  if (isset($components)) {
    //var_dump($components);
    foreach ($components as $component) {
      if (!empty($component['template'])) {
        add_shortcode( 'c_' . $component['name'], function($atts) use($component) {
          $atts = shortcode_atts($component['args'] , $atts, 'c_' . $component['name']);

          foreach ($atts as $key => $value) {
            set_query_var( $key, $value );
          }
          return locate_template($component['template'], true, false);
        });
      }
      unset($component);
    }
  }
}

register_components();

function component($name, $args = NULL) {
  //var_dump($args);

  $name = 'c_' . $name;

  if (shortcode_exists($name)) {
    $plain_args = ' ';

    if (isset($args)) {
      foreach ($args as $key => $value) {
        $plain_args .= $key . '="' . $value . '"';
        set_query_var( $key, $value );
      }
    } else {
      $plain_args = '';
    }

    $shortcode = '[' . $name . $plain_args . ']';
    //echo $shortcode;

    do_shortcode($shortcode);

  } else {
    echo 'Shortcode "' . $name . '" not registered.';
  }
}
