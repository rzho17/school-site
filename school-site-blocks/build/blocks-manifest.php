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
	'custom-header' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'my-plugin/custom-header',
		'title' => 'Custom Header',
		'category' => 'text',
		'icon' => 'heading',
		'description' => 'A custom header block with color options.',
		'attributes' => array(
			'content' => array(
				'type' => 'string',
				'source' => 'html',
				'selector' => 'h2'
			),
			'textColor' => array(
				'type' => 'string'
			),
			'backgroundColor' => array(
				'type' => 'string'
			)
		),
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'text' => true
			)
		),
		'textdomain' => 'my-plugin',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'image-gallery' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'my-plugin/image-gallery',
		'title' => 'Image Gallery',
		'category' => 'media',
		'icon' => 'format-gallery',
		'description' => 'An image gallery block with customizable layout.',
		'attributes' => array(
			'images' => array(
				'type' => 'array',
				'default' => array(
					
				),
				'source' => 'query',
				'selector' => 'img',
				'query' => array(
					'url' => array(
						'type' => 'string',
						'source' => 'attribute',
						'attribute' => 'src'
					),
					'alt' => array(
						'type' => 'string',
						'source' => 'attribute',
						'attribute' => 'alt',
						'default' => ''
					),
					'id' => array(
						'type' => 'number',
						'source' => 'attribute',
						'attribute' => 'data-id'
					)
				)
			),
			'columns' => array(
				'type' => 'number',
				'default' => 3
			),
			'imageCrop' => array(
				'type' => 'boolean',
				'default' => true
			)
		),
		'supports' => array(
			'align' => array(
				'wide',
				'full'
			)
		),
		'textdomain' => 'my-plugin',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'simple-button' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'my-plugin/simple-button',
		'title' => 'Simple Button',
		'category' => 'design',
		'icon' => 'button',
		'description' => 'A simple button block.',
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'my-plugin',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	)
);
