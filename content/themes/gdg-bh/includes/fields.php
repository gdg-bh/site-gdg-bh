<?php
function gdg_register_demo_metabox() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = 'gdg_';

    /**
     * Comunity fields
     */
    $meta_comunity = new_cmb2_box( array(
        'id'            => $prefix . 'meta_comunity',
        'title'         => 'Informações adicionais',
        'object_types'  => array( 'gdg_comunity', ), // Post type
        // 'show_on_cb' => 'gdg_show_if_front_page', // function should return a bool value
        // 'context'    => 'normal',
        // 'priority'   => 'high',
        // 'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );
    $meta_comunity->add_field( array(
        'name' => 'Website da Comunidade',
        'desc' => 'Insira a URL completa, contendo "http://"',
        'id'   => $prefix . 'comunity_url',
        'type' => 'text',
        // 'repeatable' => true,
    ) );

    /**
     * Jobs fields
     */
    $meta_jobs = new_cmb2_box( array(
        'id'            => $prefix . 'meta_jobs',
        'title'         => 'Informações adicionais',
        'object_types'  => array( 'gdg_jobs', ), // Post type
        // 'show_on_cb' => 'gdg_show_if_front_page', // function should return a bool value
        // 'context'    => 'normal',
        // 'priority'   => 'high',
        // 'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );
    $meta_jobs->add_field( array(
        'name' => 'Local',
        'desc' => '',
        'id'   => $prefix . 'jobs_place',
        'type' => 'text',
        // 'repeatable' => true,
    ) );
    $meta_jobs->add_field( array(
        'name' => 'Website da Vaga',
        'desc' => 'Insira a URL completa, contendo "http://"',
        'id'   => $prefix . 'jobs_url',
        'type' => 'text',
        // 'repeatable' => true,
    ) );
    $meta_jobs->add_field( array(
        'name' => 'Salário/Remuneração',
        'desc' => '',
        'id'   => $prefix . 'jobs_earnings',
        'type' => 'text',
        // 'repeatable' => true,
    ) );

}

add_action( 'cmb2_admin_init', 'gdg_register_demo_metabox' );

