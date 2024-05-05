<?php
function portfolio_giedre() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css");
    wp_enqueue_style("theme-style", get_template_directory_uri() . "/style.css");
    wp_enqueue_style("icons", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css");

    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js", array(), false, true);
    wp_enqueue_script("bootstrap", get_template_directory_uri() . "/js/script.js", array(), false, true);
}
add_action("wp_enqueue_scripts", "portfolio_giedre");

function portfolio_giedre_remove_gutenberg() {
    remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}
add_action("init", "portfolio_giedre_remove_gutenberg");