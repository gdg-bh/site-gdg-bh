<?php
// Frameworks
$frameworks = array(
  'custom-post-type-class.php',
  'Meetup-API-client-for-PHP/Meetup.php',
);
foreach ($frameworks as $file)
{
  include 'frameworks/' . $file;
}

// Includes
$includes = array(
  'config.php',
  'types.php',
  'fields.php',
  'options.php',
);
foreach ($includes as $file)
{
  include 'includes/' . $file;
}

// Extra Functions
function gdg_social_links(){
  $social_links = array(
    'facebook'   => gdg_get_option('social_facebook'),
    'twitter'    => gdg_get_option('social_twitter'),
    'googleplus' => gdg_get_option('social_googleplus'),
    'instagram'  => gdg_get_option('social_instagram'),
    'github'     => gdg_get_option('social_github'),
    'youtube'    => gdg_get_option('social_youtube'),
    'linkedin'   => gdg_get_option('social_linkedin'),
    'pinterest'  => gdg_get_option('social_pinterest'),
  );
  return array_filter( $social_links );
}




/**
*
* Newsletter register
*
**/
add_action("wp_ajax_newsletter_register_mail", "newsletter_register_mail");
add_action('wp_ajax_nopriv_newsletter_register_mail', 'newsletter_register_mail'); // Action para dar permissao a usuarios nao logados a execução do wp_ajax
function newsletter_register_mail() {
    $email = $_POST["email"];
    if( $email && $email != 'Seu email' ):
        // Criando o objeto do post
        $post = array(
            'post_title'  => $email,
            'post_type'   => 'gdg_newsletter',
            'post_status' => 'private',
          );
        // Inserindo os dados no banco
        if( wp_insert_post($post) ):
            $result['type'] = "success";
            $result['message'] = '<strong>Obrigado!</strong> Email cadastrado com sucesso.';
        endif;
    else:
        // Campo em branco
        $result['type'] = "error";
        $result['message'] = 'Insira seu endereço de e-mail.';
    endif;

    // Ajax
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'):
        $result = json_encode($result);
        echo $result;
    else:
        header("Location: ".$_SERVER["HTTP_REFERER"]);
    endif;

    die();
}


