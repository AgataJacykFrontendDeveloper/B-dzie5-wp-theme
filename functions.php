<?php

function bedzie5_files() {
  wp_enqueue_script('main-bedzie5-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('bootstrap-js', '//code.jquery.com/jquery-3.2.1.slim.min.js');
  wp_enqueue_script('bootstrap-two-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
  wp_enqueue_script('bootstrap-three-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css');
  wp_enqueue_style('bedzie5_additional_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('bedzie5_extra_styles', get_theme_file_uri('/build/index.css'));
  wp_enqueue_style('bedzie5_main_styles', get_theme_file_uri('/build/style.css'));
}

add_action('wp_enqueue_scripts', 'bedzie5_files');

function bedzie5_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'bedzie5_features');