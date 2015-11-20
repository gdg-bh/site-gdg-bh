<?php
/**
*
* Custom Post Types
*
**/
function gdg_post_types(){
  $prefix = 'gdg_';

  // type projects
  $projects = new CPT(
    array(
      'post_type_name' => $prefix . 'projects',
      'singular'       => 'Projeto',
      'plural'         => 'Projetos',
      'slug'           => 'projetos',
    ),
    array(
      'supports'    => array('title','editor','thumbnail','excerpt'),
      'has_archive' => true,
      'labels'      => array(
        'all_items'          => 'Todos os projetos',
        'add_new'            => 'Adicionar novo',
        'add_new_item'       => 'Adicionar novo projeto',
        'edit_item'          => 'Editar projeto',
        'new_item'           => 'Novo projeto',
        'view_item'          => 'Ver projeto',
        'search_items'       => 'Procurar projeto',
        'not_found'          => 'Nada encontrado',
        'not_found_in_trash' => 'Nada encontrado no lixo',
        )
      )
    );
  $projects->menu_icon("dashicons-hammer");

  // type comunity
  $comunity = new CPT(
    array(
      'post_type_name' => $prefix . 'comunity',
      'singular'       => 'Comunidade',
      'plural'         => 'Comunidades',
      'slug'           => 'comunidades',
    ),
    array(
      'supports'    => array('title','editor','thumbnail'),
      'has_archive' => true,
      'labels'      => array(
        'all_items'          => 'Todas as comunidades',
        'add_new'            => 'Adicionar nova',
        'add_new_item'       => 'Adicionar nova comunidade',
        'edit_item'          => 'Editar comunidade',
        'new_item'           => 'Nova comunidade',
        'view_item'          => 'Ver comunidade',
        'search_items'       => 'Procurar comunidade',
        'not_found'          => 'Nada encontrado',
        'not_found_in_trash' => 'Nada encontrado no lixo',
        )
      )
    );
  $comunity->menu_icon("dashicons-groups");

  // type jobs
  $jobs = new CPT(
    array(
      'post_type_name' => $prefix . 'jobs',
      'singular'       => 'Vaga',
      'plural'         => 'Vagas',
      'slug'           => 'vagas',
    ),
    array(
      'supports'    => array('title','editor'),
      'has_archive' => true,
      'labels'      => array(
        'all_items'          => 'Todas as vagas',
        'add_new'            => 'Adicionar nova',
        'add_new_item'       => 'Adicionar nova vaga',
        'edit_item'          => 'Editar vaga',
        'new_item'           => 'Nova vaga',
        'view_item'          => 'Ver vaga',
        'search_items'       => 'Procurar vaga',
        'not_found'          => 'Nada encontrado',
        'not_found_in_trash' => 'Nada encontrado no lixo',
        )
      )
    );
  $jobs->menu_icon("dashicons-megaphone");
  $jobs->register_taxonomy(array(
    'taxonomy_name' => 'job_genre',
    'singular'      => 'Área',
    'plural'        => 'Áreas de atuação',
    'slug'          => 'area-vagas'
  ));

  // type newsletter
  $newsletter = new CPT(
    array(
      'post_type_name' => $prefix . 'newsletter',
      'singular'       => 'Newsletter',
      'plural'         => 'Newsletter',
    ),
    array(
      'supports'    => array('title'),
      'has_archive' => false,
      'labels'      => array(
        'all_items'          => 'Todos os asinantes',
        'add_new'            => 'Adicionar novo',
        'add_new_item'       => 'Adicionar novo asinante',
        'edit_item'          => 'Editar asinante',
        'new_item'           => 'Novo asinante',
        'view_item'          => 'Ver asinante',
        'search_items'       => 'Procurar asinante',
        'not_found'          => 'Nada encontrado',
        'not_found_in_trash' => 'Nada encontrado no lixo',
        )
      )
    );
  $newsletter->menu_icon("dashicons-email-alt");
}
gdg_post_types();
