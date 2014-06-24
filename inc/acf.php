<?php/** * Created by PhpStorm. * User: matheus * Date: 16/06/14 * Time: 17:30 */require get_template_directory() . '/inc/advanced-custom-fields/acf.php';add_action('acf/register_fields', 'my_register_fields');function my_register_fields(){	include_once(get_template_directory() .'/inc/acf-repeater/repeater.php');}if(function_exists("register_field_group")){	register_field_group(array (		'id' => 'acf_anexo',		'title' => 'Anexo',		'fields' => array (			array (				'key' => 'field_538f2564122f9',				'label' => 'Anexo',				'name' => 'anexo',				'type' => 'file',				'save_format' => 'id',				'library' => 'all',			),		),		'location' => array (			array (				array (					'param' => 'post_type',					'operator' => '!=',					'value' => 'post',					'order_no' => 0,					'group_no' => 0,				),				array (					'param' => 'post_type',					'operator' => '!=',					'value' => 'page',					'order_no' => 1,					'group_no' => 0,				),				array (					'param' => 'ef_media',					'operator' => '!=',					'value' => 'all',					'order_no' => 2,					'group_no' => 0,				),			),		),		'options' => array (			'position' => 'normal',			'layout' => 'default',			'hide_on_screen' => array (			),		),		'menu_order' => 0,	));	register_field_group(array (		'id' => 'acf_area',		'title' => 'Area',		'fields' => array (			array (				'key' => 'field_53862949d369c',				'label' => 'Area',				'name' => 'area',				'type' => 'select',				'required' => 1,				'choices' => array (					'reforma' => 'Reforma Urbana',					'inclusao' => 'Inclusão E Sustentabilidade',					'democracia' => 'Democracia E Participação',					'cidadania' => 'Cidadania Cultural',				),				'default_value' => '',				'allow_null' => 0,				'multiple' => 0,			),		),		'location' => array (			array (				array (					'param' => 'ef_user',					'operator' => '==',					'value' => 'all',					'order_no' => 0,					'group_no' => 0,				),			),		),		'options' => array (			'position' => 'normal',			'layout' => 'no_box',			'hide_on_screen' => array (			),		),		'menu_order' => 0,	));	register_field_group(array (		'id' => 'acf_cargo',		'title' => 'Cargo',		'fields' => array (			array (				'key' => 'field_539f30f6f38bd',				'label' => 'Cargo',				'name' => 'cargo',				'type' => 'text',				'required' => 1,				'default_value' => '',				'placeholder' => '',				'prepend' => '',				'append' => '',				'formatting' => 'none',				'maxlength' => '',			),		),		'location' => array (			array (				array (					'param' => 'ef_user',					'operator' => '==',					'value' => 'all',					'order_no' => 0,					'group_no' => 0,				),			),		),		'options' => array (			'position' => 'normal',			'layout' => 'no_box',			'hide_on_screen' => array (			),		),		'menu_order' => 0,	));	if(current_user_can('create_users')){		register_field_group(array (			'id' => 'acf_e-privado-se-ativado-somente-membros-logados-poderao-ver',			'title' => 'É privado? (Se ativado somente membros logados poderão ver)',			'fields' => array (				array (					'key' => 'field_538dcab58cb92',					'label' => 'Selecione:',					'name' => 'isprivate',					'type' => 'select',					'choices' => array (						'nao' => 'Não',						'sim' => 'Sim',					),					'default_value' => '',					'allow_null' => 0,					'multiple' => 0,				),			),			'location' => array (				array (					array (						'param' => 'ef_media',						'operator' => '!=',						'value' => 'all',						'order_no' => 1,						'group_no' => 0,					),				),			),			'options' => array (				'position' => 'normal',				'layout' => 'default',				'hide_on_screen' => array (				),			),			'menu_order' => 0,		));	}	register_field_group(array (		'id' => 'acf_e-mail',		'title' => 'E-mail',		'fields' => array (			array (				'key' => 'field_539f3a8e3ca5f',				'label' => 'E-mail (Publico)',				'name' => 'email',				'type' => 'email',				'required' => 1,				'default_value' => '',				'placeholder' => '',				'prepend' => '',				'append' => '',			),		),		'location' => array (			array (				array (					'param' => 'ef_user',					'operator' => '==',					'value' => 'all',					'order_no' => 0,					'group_no' => 0,				),			),		),		'options' => array (			'position' => 'normal',			'layout' => 'no_box',			'hide_on_screen' => array (			),		),		'menu_order' => 0,	));	register_field_group(array (		'id' => 'acf_links-relacionados',		'title' => 'Links Relacionados',		'fields' => array (			array (				'key' => 'field_539f3f9eff50c',				'label' => 'Links Relacionados',				'name' => 'links_user',				'type' => 'repeater',				'sub_fields' => array (					array (						'key' => 'field_539f40a5ff50e',						'label' => 'Descrição do link',						'name' => 'texto_url',						'type' => 'text',						'column_width' => '',						'default_value' => '',						'placeholder' => '',						'prepend' => '',						'append' => '',						'formatting' => 'html',						'maxlength' => '',					),					array (						'key' => 'field_539f48aea3917',						'label' => 'Endereco',						'name' => 'endereco_user_link',						'type' => 'text',						'column_width' => '',						'default_value' => '',						'placeholder' => '',						'prepend' => '',						'append' => '',						'formatting' => 'html',						'maxlength' => '',					),				),				'row_min' => 1,				'row_limit' => 99999,				'layout' => 'table',				'button_label' => 'Adicionar mais um campo',			),		),		'location' => array (			array (				array (					'param' => 'ef_user',					'operator' => '==',					'value' => 'all',					'order_no' => 0,					'group_no' => 0,				),			),		),		'options' => array (			'position' => 'normal',			'layout' => 'no_box',			'hide_on_screen' => array (			),		),		'menu_order' => 0,	));	register_field_group(array (		'id' => 'acf_telefone',		'title' => 'Telefone',		'fields' => array (			array (				'key' => 'field_539f389861172',				'label' => 'Telefone',				'name' => 'telefone',				'type' => 'text',				'required' => 1,				'default_value' => '',				'placeholder' => '',				'prepend' => '',				'append' => '',				'formatting' => 'html',				'maxlength' => '',			),		),		'location' => array (			array (				array (					'param' => 'ef_user',					'operator' => '==',					'value' => 'all',					'order_no' => 0,					'group_no' => 0,				),			),		),		'options' => array (			'position' => 'normal',			'layout' => 'no_box',			'hide_on_screen' => array (			),		),		'menu_order' => 0,	));	register_field_group(array (		'id' => 'acf_twitter',		'title' => 'Twitter',		'fields' => array (			array (				'key' => 'field_539f3a0eef24b',				'label' => 'Twitter',				'name' => 'twitter',				'type' => 'text',				'instructions' => 'Digite somente o nome de usuário, sem @',				'default_value' => '',				'placeholder' => '',				'prepend' => '',				'append' => '',				'formatting' => 'none',				'maxlength' => '',			),		),		'location' => array (			array (				array (					'param' => 'ef_user',					'operator' => '==',					'value' => 'all',					'order_no' => 0,					'group_no' => 0,				),			),		),		'options' => array (			'position' => 'normal',			'layout' => 'no_box',			'hide_on_screen' => array (			),		),		'menu_order' => 0,	));}if( function_exists("register_field_group") ) {	register_field_group(array (		'id' => 'acf_publicacoes',		'title' => 'Publicações',		'fields' => array (			array (				'key' => 'field_539b14c906cd8',				'label' => 'Autor da Publicação',				'name' => 'publicacoes_autor',				'type' => 'text',				'instructions' => 'Adicione o autor da publicação',				'conditional_logic' => array (					'status' => 1,					'rules' => array (						array (							'field' => 'null',							'operator' => '==',						),					),					'allorany' => 'all',				),				'default_value' => '',				'placeholder' => 'Autor',				'prepend' => '',				'append' => '',				'formatting' => 'html',				'maxlength' => '',			),			array (				'key' => 'field_539b1c1b69a19',				'label' => 'Ano de Publicação',				'name' => 'publicacoes_ano',				'type' => 'text',				'instructions' => 'Adicione o ano de publicação',				'conditional_logic' => array (					'status' => 1,					'rules' => array (						array (							'field' => 'null',							'operator' => '==',						),					),					'allorany' => 'all',				),				'default_value' => '',				'placeholder' => 'Ano de Publicação',				'prepend' => '',				'append' => '',				'formatting' => 'html',				'maxlength' => 4,			),			array (				'key' => 'field_539b1c5b69a1a',				'label' => 'Número de Páginas',				'name' => 'publicacoes_paginas',				'type' => 'text',				'instructions' => 'Adicione a quantidade de páginas dessa publicação',				'conditional_logic' => array (					'status' => 1,					'rules' => array (						array (							'field' => 'null',							'operator' => '==',						),					),					'allorany' => 'all',				),				'default_value' => '',				'placeholder' => 'Número de Páginas',				'prepend' => '',				'append' => '',				'formatting' => 'html',				'maxlength' => '',			),			array (				'key' => 'field_539b2376cb730',				'label' => 'Arquivo para Donwload',				'name' => 'publicacoes_download',				'type' => 'file',				'instructions' => 'Adicione o arquivo da publicação em PDF para download.',				'conditional_logic' => array (					'status' => 1,					'rules' => array (						array (							'field' => 'null',							'operator' => '==',						),					),					'allorany' => 'all',				),				'save_format' => 'object',				'library' => 'uploadedTo',			),		),		'location' => array (			array (				array (					'param' => 'post_type',					'operator' => '==',					'value' => 'publicacoes',					'order_no' => 0,					'group_no' => 0,				),			),		),		'options' => array (			'position' => 'side',			'layout' => 'default',			'hide_on_screen' => array (			),		),		'menu_order' => 0,	));	register_field_group(array (		'id' => 'acf_campos-migracao',		'title' => 'Campos Migração',		'fields' => array (			array (				'key' => 'field_539b9c0acfc0f',				'label' => 'Data de Publicação',				'name' => 'mgr_data',				'type' => 'text',				'instructions' => 'Valor do campo nwd_date',				'conditional_logic' => array (					'status' => 1,					'rules' => array (						array (							'field' => 'null',							'operator' => '==',						),					),					'allorany' => 'all',				),				'default_value' => '',				'placeholder' => '',				'prepend' => '',				'append' => '',				'formatting' => 'html',				'maxlength' => '',			),			array (				'key' => 'field_539b8c17ddbb2',				'label' => 'Imagem',				'name' => 'mgr_imagem',				'type' => 'text',				'instructions' => 'Valor do campo nwd_image',				'conditional_logic' => array (					'status' => 1,					'rules' => array (						array (							'field' => 'null',							'operator' => '==',						),					),					'allorany' => 'all',				),				'default_value' => '',				'placeholder' => '',				'prepend' => '',				'append' => '',				'formatting' => 'html',				'maxlength' => '',			),			array (				'key' => 'field_539b8d6addbb3',				'label' => 'Fonte',				'name' => 'mgr_fonte',				'type' => 'text',				'instructions' => 'Valor do campo nwd_source',				'conditional_logic' => array (					'status' => 1,					'rules' => array (						array (							'field' => 'null',							'operator' => '==',						),					),					'allorany' => 'all',				),				'default_value' => '',				'placeholder' => '',				'prepend' => '',				'append' => '',				'formatting' => 'html',				'maxlength' => '',			),			array (				'key' => 'field_539b92e8ddbb4',				'label' => 'Link Externo',				'name' => 'mgr_link_externo',				'type' => 'text',				'instructions' => 'Valor do campo nwd_external_link',				'conditional_logic' => array (					'status' => 1,					'rules' => array (						array (							'field' => 'null',							'operator' => '==',						),					),					'allorany' => 'all',				),				'default_value' => '',				'placeholder' => '',				'prepend' => '',				'append' => '',				'formatting' => 'html',				'maxlength' => '',			),			array (				'key' => 'field_539b9308ddbb5',				'label' => 'Autor',				'name' => 'mgr_autor',				'type' => 'text',				'instructions' => 'Valor do campo nwd_author',				'default_value' => '',				'placeholder' => '',				'prepend' => '',				'append' => '',				'formatting' => 'html',				'maxlength' => '',			),		),		'location' => array (			array (				array (					'param' => 'post_type',					'operator' => '==',					'value' => 'noticias',					'order_no' => 0,					'group_no' => 0,				),			),		),		'options' => array (			'position' => 'side',			'layout' => 'default',			'hide_on_screen' => array (			),		),		'menu_order' => 0,	));}//Avatar fieldif(function_exists("register_field_group")){    register_field_group(array (        'id' => 'acf_avatar',        'title' => 'Avatar',        'fields' => array (            array (                'key' => 'field_53a9927815518',                'label' => 'Avatar',                'name' => 'user_avatar',                'type' => 'image',                'save_format' => 'id',                'preview_size' => 'thumbnail',                'library' => 'all',            ),        ),        'location' => array (            array (                array (                    'param' => 'ef_user',                    'operator' => '==',                    'value' => 'all',                    'order_no' => 0,                    'group_no' => 0,                ),            ),        ),        'options' => array (            'position' => 'normal',            'layout' => 'no_box',            'hide_on_screen' => array (            ),        ),        'menu_order' => 0,    ));}