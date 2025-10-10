<?php
// This file is generated. Do not modify it manually.
return array(
	'staff' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'staff/staff',
		'version' => '0.1.0',
		'title' => 'Display Staff',
		'category' => 'text',
		'icon' => 'location',
		'description' => 'Display Staff',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'staff',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css'
	),
	'staff-email' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'staff-email/staff-email',
		'version' => '1.1.0',
		'title' => 'Staff email',
		'category' => 'text',
		'icon' => 'email',
		'description' => 'staff email',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'svgIcon' => array(
				'type' => 'boolean',
				'default' => false
			)
		),
		'textdomain' => 'staff-email',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	)
);
