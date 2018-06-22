<?php
 function meupersonalizador($wp_customize){
	 /*==============================================Seção imagens do slde======================================================== */
    $wp_customize->add_section( 'sec_slides', array(
		'title'			=> 'Slide do topo',
		'description'	=> 'Seção para o slide'
    ));
    $wp_customize->add_setting( 'set_slide1', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_slides_item1', array(
		'label'		=> 'Imagem do slide 1',
		'width'		=> 1100,
		'height'	=> 400,
		'section'	=> 'sec_slides',
		'settings'	=> 'set_slide1'
    )));
    
    $wp_customize->add_setting( 'set_slide2', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_slides_item2', array(
		'label'		=> 'Imagem do slide 2',
		'width'		=> 1100,
		'height'	=> 400,
		'section'	=> 'sec_slides',
		'settings'	=> 'set_slide2'
    )));
    $wp_customize->add_setting( 'set_slide3', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_slides_item3', array(
		'label'		=> 'Imagem do slide 3',
		'width'		=> 1100,
		'height'	=> 400,
		'section'	=> 'sec_slides',
		'settings'	=> 'set_slide3'
	)));
	/*==============================================Seção icnones da barra do top=================================================== */
	$wp_customize->add_section( 'sec_icones', array(
		'title'			=> 'Icones do topo',
		'description'	=> 'Essa é a seção para alterar os icones, vá até o site fontawesome.com/icons e escolha seu icone, clique nele e sua classe ex: < i class="fa fa-instagram" ></ i > a classe é fa fa-instagram'
	));	
	$wp_customize->add_setting( 'set_icone4', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_icone4', array(
		'label' 	=> 'classes do icone 1',
		'description'	=> 'Informe as classes do icone',
		'section'		=> 'sec_icones',
		'settings'		=> 'set_icone4',
		'type'			=> 'text'
	) );


	$wp_customize->add_setting( 'set_icone2', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_icone2', array(
		'label' 	=> 'classes do icone 2',
		'description'	=> 'Informe as classes do icone',
		'section'		=> 'sec_icones',
		'settings'		=> 'set_icone2',
		'type'			=> 'text'
	) );

	$wp_customize->add_setting( 'set_icone3', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_icone3', array(
		'label' 	=> 'classes do icone 3',
		'description'	=> 'Informe as classes do icone',
		'section'		=> 'sec_icones',
		'settings'		=> 'set_icone3',
		'type'			=> 'text'
	) );

/*==============================================================links dos icones===================================================*/
	$wp_customize->add_setting( 'set_link_icone1', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_link_icone1', array(
		'label' 	=> 'Link do icone 1',
		'description'	=> 'Informe o link do icone',
		'section'		=> 'sec_icones',
		'settings'		=> 'set_link_icone1',
		'type'			=> 'text'
	) );

	$wp_customize->add_setting( 'set_link_icone2', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_link_icone2', array(
		'label' 	=> 'Link do icone 2',
		'description'	=> 'Informe o link do icone',
		'section'		=> 'sec_icones',
		'settings'		=> 'set_link_icone2',
		'type'			=> 'text'
	) );

	$wp_customize->add_setting( 'set_link_icone3', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_link_icone3', array(
		'label' 	=> 'Link do icone 3',
		'description'	=> 'Informe o link do icone',
		'section'		=> 'sec_icones',
		'settings'		=> 'set_link_icone3',
		'type'			=> 'text'
	) );
/*==============================================================telefone do topo===================================================*/
$wp_customize->add_section( 'sec_telefone', array(
	'title'			=> 'Telefone  do topo',
	'description'	=> 'Essa é a seção para alterar o telefone do topo'
));

$wp_customize->add_setting( 'set_telefone_topo', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_tefefone_topo', array(
	'label' 	=> 'Telefone do topo',
	'description'	=> 'Informe o telefone',
	'section'		=> 'sec_telefone',
	'settings'		=> 'set_telefone_topo',
	'type'			=> 'text'
) );
/*==============================================================Sobre mim===================================================*/
$wp_customize->add_section( 'sec_sobre', array(
	'title'			=> 'Sobre mim',
));
//descrição
$wp_customize->add_setting( 'set_sobre_mim', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_sobre_mim', array(
	'label' 	=> 'Sobre mim',
	'description'	=> 'Descreva seu texto',
	'section'		=> 'sec_sobre',
	'settings'		=> 'set_sobre_mim',
	'type'			=> 'textarea'
) );

//botão
$wp_customize->add_setting( 'set_nome_botao', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_nome_botao', array(
	'label' 	=> ' Nome do botão',
	'description'	=> 'Descreva o nome do seu botão',
	'section'		=> 'sec_sobre',
	'settings'		=> 'set_nome_botao',
	'type'			=> 'text'
) );//endereço do botão
$wp_customize->add_setting( 'set_endereco_botao', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_endereco_botao', array(
	'label' 	=> 'Endereço do botão',
	'description'	=> 'Descreva o endereço de link do seu botão',
	'section'		=> 'sec_sobre',
	'settings'		=> 'set_endereco_botao',
	'type'			=> 'text'
) );
//imagem
$wp_customize->add_setting( 'set_sobre_imagem', array(
	'default'	=> ''
));

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_sobre_imagem', array(
	'label'		=> 'Imagem da area sobre mim',
	'width'		=> 250,
	'height'	=> 300,
	'section'	=> 'sec_sobre',
	'settings'	=> 'set_sobre_imagem'
)));
/*==============================================================portfólio===================================================*/
$wp_customize->add_section( 'sec_portfolio', array(
	'title'			=> 'Portfólio',
));
//titulo 1
$wp_customize->add_setting( 'set_portfolio_titulo1', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_portfolio_titulo1', array(
	'label' 	=> 'Titulo 1',
	'description'	=> 'Informe o Titulo do site',
	'section'		=> 'sec_portfolio',
	'settings'		=> 'set_portfolio_titulo1',
	'type'			=> 'text'
) );
//endereço do site 1
$wp_customize->add_setting( 'set_portfolio_endereco1', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_portfolio_endereco1', array(
	'label' 	=> 'Endereço 1',
	'description'	=> 'Informe o endereço do site',
	'section'		=> 'sec_portfolio',
	'settings'		=> 'set_portfolio_endereco1',
	'type'			=> 'text'
) );

//imagem 1
$wp_customize->add_setting( 'set_portfolio_imagem1', array(
	'default'	=> ''
));

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_portfolio_imagem1', array(
	'label'		=> 'Imagem 1',
	'description'	=>'Coloque a imagem do site ',	
	'width'		=> 450,
	'height'	=> 300,
	'section'	=> 'sec_portfolio',
	'settings'	=> 'set_portfolio_imagem1'
)));

//titulo 2
$wp_customize->add_setting( 'set_portfolio_titulo2', array(
	'default'	=> ''
));

//endereço do site 2
$wp_customize->add_setting( 'set_portfolio_endereco2', array(
	'default'	=> ''
));
$wp_customize->add_control( 'ctrl_portfolio_titulo2', array(
	'label' 	=> 'Titulo 2',
	'description'	=> 'Informe o Titulo do site',
	'section'		=> 'sec_portfolio',
	'settings'		=> 'set_portfolio_titulo2',
	'type'			=> 'text'
) );

$wp_customize->add_control( 'ctrl_portfolio_endereco2', array(
	'label' 	=> 'Endereço 2',
	'description'	=> 'Informe o endereço do site',
	'section'		=> 'sec_portfolio',
	'settings'		=> 'set_portfolio_endereco2',
	'type'			=> 'text'
) );

//imagem 2
$wp_customize->add_setting( 'set_portfolio_imagem2', array(
	'default'	=> ''
));

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_portfolio_imagem2', array(
	'label'		=> 'Imagem 2',
	'description'	=>'Coloque a imagem do site',	
	'width'		=> 450,
	'height'	=> 300,
	'section'	=> 'sec_portfolio',
	'settings'	=> 'set_portfolio_imagem2'
)));
//titulo 3
$wp_customize->add_setting( 'set_portfolio_titulo3', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_portfolio_titulo3', array(
	'label' 	=> 'Titulo 3',
	'description'	=> 'Informe o Titulo do site',
	'section'		=> 'sec_portfolio',
	'settings'		=> 'set_portfolio_titulo3',
	'type'			=> 'text'
) );
//endereço do site 3
$wp_customize->add_setting( 'set_portfolio_endereco3', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_portfolio_endereco3', array(
	'label' 	=> 'Endereço 3',
	'description'	=> 'Informe o endereço do site',
	'section'		=> 'sec_portfolio',
	'settings'		=> 'set_portfolio_endereco3',
	'type'			=> 'text'
) );

//imagem 3
$wp_customize->add_setting( 'set_portfolio_imagem3', array(
	'default'	=> ''
));

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_portfolio_imagem3', array(
	'label'		=> 'Imagem 3',
	'description'	=>'Coloque a imagem do site',	
	'width'		=> 450,
	'height'	=> 300,
	'section'	=> 'sec_portfolio',
	'settings'	=> 'set_portfolio_imagem3'
)));
//titulo 4
$wp_customize->add_setting( 'set_portfolio_titulo4', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_portfolio_titulo4', array(
	'label' 	=> 'Titulo 4',
	'description'	=> 'Informe o Titulo do site',
	'section'		=> 'sec_portfolio',
	'settings'		=> 'set_portfolio_titulo4',
	'type'			=> 'text'
) );
//endereço do site 4
$wp_customize->add_setting( 'set_portfolio_endereco4', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_portfolio_endereco4', array(
	'label' 	=> 'Endereço 4',
	'description'	=> 'Informe o endereço do site',
	'section'		=> 'sec_portfolio',
	'settings'		=> 'set_portfolio_endereco4',
	'type'			=> 'text'
) );

//imagem 4
$wp_customize->add_setting( 'set_portfolio_imagem4', array(
	'default'	=> ''
));

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_portfolio_imagem4', array(
	'label'		=> 'Imagem 4',
	'description'	=>'Coloque a imagem do site ',	
	'width'		=> 450,
	'height'	=> 300,
	'section'	=> 'sec_portfolio',
	'settings'	=> 'set_portfolio_imagem4'
)));

//titulo 5
$wp_customize->add_setting( 'set_portfolio_titulo5', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_portfolio_titulo5', array(
	'label' 	=> 'Titulo 5',
	'description'	=> 'Informe o Titulo do site',
	'section'		=> 'sec_portfolio',
	'settings'		=> 'set_portfolio_titulo5',
	'type'			=> 'text'
) );


//endereço do site 5
$wp_customize->add_setting( 'set_portfolio_endereco5', array(
	'default'	=> ''
));
$wp_customize->add_control( 'ctrl_portfolio_endereco5', array(
	'label' 	=> 'Endereço 5',
	'description'	=> 'Informe o endereço do site',
	'section'		=> 'sec_portfolio',
	'settings'		=> 'set_portfolio_endereco5',
	'type'			=> 'text'
) );


//imagem 5
$wp_customize->add_setting( 'set_portfolio_imagem5', array(
	'default'	=> ''
));
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_portfolio_imagem5', array(
	'label'		=> 'Imagem 5',
	'description'	=>'Coloque a imagem do site ',	
	'width'		=> 450,
	'height'	=> 300,
	'section'	=> 'sec_portfolio',
	'settings'	=> 'set_portfolio_imagem5'
)));
//titulo 6
$wp_customize->add_setting( 'set_portfolio_titulo6', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_portfolio_titulo6', array(
	'label' 	=> 'Titulo 6',
	'description'	=> 'Informe o Titulo do site',
	'section'		=> 'sec_portfolio',
	'settings'		=> 'set_portfolio_titulo6',
	'type'			=> 'text'
) );


//endereço do site 6
$wp_customize->add_setting( 'set_portfolio_endereco6', array(
	'default'	=> ''
));
$wp_customize->add_control( 'ctrl_portfolio_endereco6', array(
	'label' 	=> 'Endereço 6',
	'description'	=> 'Informe o endereço do site',
	'section'		=> 'sec_portfolio',
	'settings'		=> 'set_portfolio_endereco6',
	'type'			=> 'text'
) );

$wp_customize->add_control( 'ctrl_portfolio_titulo6', array(
	'label' 	=> 'Titulo 6',
	'description'	=> 'Informe o Titulo do site',
	'section'		=> 'sec_portfolio',
	'settings'		=> 'set_portfolio_titulo6',
	'type'			=> 'text'
) );

//imagem 6
$wp_customize->add_setting( 'set_portfolio_imagem6', array(
	'default'	=> ''
));
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_portfolio_imagem6', array(
	'label'		=> 'Imagem 6',
	'description'	=>'Coloque a imagem do site ',	
	'width'		=> 450,
	'height'	=> 300,
	'section'	=> 'sec_portfolio',
	'settings'	=> 'set_portfolio_imagem6'
)));
/*===========================================================contato====================================================*/
$wp_customize->add_section( 'sec_contato', array(
	'title'			=> 'Area de contato',
	'description'	=> 'Essa é a seção da area de contato, para adcionar as classes de um icone vá até o site fontawesome.com/icons e escolha seu icone, clique nele e sua classe ex: < i class="fa fa-instagram" ></ i > a classe é fa fa-instagram'
));	
//icone 1
$wp_customize->add_setting( 'set_icone_1', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_icone1', array(
	'label' 	=> 'classes do icone 1',
	'description'	=> 'Informe as classes do icone',
	'section'		=> 'sec_contato',
	'settings'		=> 'set_icone_1',
	'type'			=> 'text'
) );
//informação icone 1
$wp_customize->add_setting( 'set_icone_info1', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_icone_info1', array(
	'label' 	=> 'Contato do icone 1',
	'description'	=> 'Descreva seu contato quanto a esse icone',
	'section'		=> 'sec_contato',
	'settings'		=> 'set_icone_info1',
	'type'			=> 'text'
) );
//icone 1
$wp_customize->add_setting( 'set_icone_2', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_icone_2', array(
	'label' 	=> 'classes do icone 2',
	'description'	=> 'Informe as classes do icone',
	'section'		=> 'sec_contato',
	'settings'		=> 'set_icone_2',
	'type'			=> 'text'
) );
//informação icone 2
$wp_customize->add_setting( 'set_icone_info2', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_icone_info2', array(
	'label' 	=> 'Contato do icone 2',
	'description'	=> 'Descreva seu contato quanto a esse icone',
	'section'		=> 'sec_contato',
	'settings'		=> 'set_icone_info2',
	'type'			=> 'text'
) );
//icone 3
$wp_customize->add_setting( 'set_icone_3', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_icone_3', array(
	'label' 	=> 'classes do icone 3',
	'description'	=> 'Informe as classes do icone',
	'section'		=> 'sec_contato',
	'settings'		=> 'set_icone_3',
	'type'			=> 'text'
) );
//informação icone 3
$wp_customize->add_setting( 'set_icone_info3', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_icone_info3', array(
	'label' 	=> 'Contato do icone 3',
	'description'	=> 'Descreva seu contato quanto a esse icone',
	'section'		=> 'sec_contato',
	'settings'		=> 'set_icone_info3',
	'type'			=> 'text'
) );
//icone 4
$wp_customize->add_setting( 'set_icone_4', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_icone_4', array(
	'label' 	=> 'classes do icone 4',
	'description'	=> 'Informe as classes do icone',
	'section'		=> 'sec_contato',
	'settings'		=> 'set_icone_4',
	'type'			=> 'text'
) );
//informação icone 4
$wp_customize->add_setting( 'set_icone_info4', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_icone_info4', array(
	'label' 	=> 'Contato do icone 4',
	'description'	=> 'Descreva seu contato quanto a esse icone',
	'section'		=> 'sec_contato',
	'settings'		=> 'set_icone_info4',
	'type'			=> 'text'
) );
//icone 5
$wp_customize->add_setting( 'set_icone_5', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_icone_5', array(
	'label' 	=> 'classes do icone 5',
	'description'	=> 'Informe as classes do icone',
	'section'		=> 'sec_contato',
	'settings'		=> 'set_icone_5',
	'type'			=> 'text'
) );
//informação icone 5
$wp_customize->add_setting( 'set_icone_info5', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_icone_info5', array(
	'label' 	=> 'Contato do icone 5',
	'description'	=> 'Descreva seu contato quanto a esse icone',
	'section'		=> 'sec_contato',
	'settings'		=> 'set_icone_info5',
	'type'			=> 'text'
) );

//icone 6
$wp_customize->add_setting( 'set_icone_6', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_icone_6', array(
	'label' 	=> 'classes do icone 6',
	'description'	=> 'Informe as classes do icone',
	'section'		=> 'sec_contato',
	'settings'		=> 'set_icone_6',
	'type'			=> 'text'
) );
//informação icone 6
$wp_customize->add_setting( 'set_icone_info6', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_icone_info6', array(
	'label' 	=> 'Contato do icone 6',
	'description'	=> 'Descreva seu contato quanto a esse icone',
	'section'		=> 'sec_contato',
	'settings'		=> 'set_icone_info6',
	'type'			=> 'text'
) );
/*===========================================================footer====================================================*/
$wp_customize->add_section( 'sec_footer', array(
	'title'			=> 'Footer',
	'description'	=> 'Area editavel do footer, escreva o conteudo da barra do footer'
));	
$wp_customize->add_setting( 'set_p_footer', array(
	'default'	=> ''
));

$wp_customize->add_control( 'ctrl_p_footer', array(
	'section'		=> 'sec_footer',
	'settings'		=> 'set_p_footer',
	'type'			=> 'text'
) );

 }

 add_action('customize_register', 'meupersonalizador');
?>