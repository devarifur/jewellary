<?php
return array(
	'name' => esc_html__( 'Help', 'bijoux' ),
	'auto' => true,
	'config' => array(

		array(
			'name' => esc_html__( 'Help', 'bijoux' ),
			'type' => 'title',
			'desc' => '',
		),

		array(
			'name' => esc_html__( 'Help', 'bijoux' ),
			'type' => 'start',
			'nosave' => true,
		),
//----
		array(
			'type' => 'docs',
		),

			array(
				'type' => 'end',
			),
	),
);
