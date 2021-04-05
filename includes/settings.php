<?php

if (!class_exists('GHHS_Animals_Settings')) {
	class GHHS_Animals_Settings {

		const SLUG = "ghhs-animals-options";

		/**
		 * Construct the plugin object
		 */
		public function __construct($plugin) {
			// register actions
			//$this->add_my_options_page();
			acf_add_options_page(array(
				'page_title' => __('GHHS Animals', 'custom'),
				'menu_title' => __('GHHS Animals', 'custom'),
				'menu_slug' => self::SLUG,
				'capability' => 'manage_options',
				'redirect' => false,
			));
			add_action('init', array(&$this, "init"));
			add_action('admin_menu', array(&$this, 'admin_menu'), 20);
			add_filter("plugin_action_links_$plugin", array(&$this, 'plugin_settings_link'));
		} // END public function __construct

		/**
		 * Add options page
		 */
		public function admin_menu() {
			// Duplicate link into properties mgmt
			add_submenu_page(
				self::SLUG,
				__('Settings', 'custom'),
				__('Settings', 'custom'),
				'manage_options',
				self::SLUG,
				1
			);
		}

		/**
		 * Add settings fields via ACF
		 */
		public function init() {
			if (function_exists('register_field_group')):

				register_field_group(array(
					'key' => 'group_6069369c504fd',
					'title' => 'Animal',
					'fields' => array(
						array(
							'key' => 'field_606937818cb9f',
							'label' => 'Animal ID',
							'name' => 'animal_id',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_606936d53d6e9',
							'label' => 'Name',
							'name' => 'name',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_606937088cb9c',
							'label' => 'Color',
							'name' => 'color',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_606937418cb9d',
							'label' => 'Breed',
							'name' => 'breed',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_606937568cb9e',
							'label' => 'Status',
							'name' => 'status',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_606937868cba0',
							'label' => 'Age',
							'name' => 'age',
							'type' => 'number',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'min' => '',
							'max' => '',
							'step' => '',
						),
					),
					'location' => array(
						array(
							array(
								'param' => 'options_page',
								'operator' => '==',
								'value' => self::SLUG,
							),
						),
					),
					'menu_order' => 0,
					'position' => 'normal',
					'style' => 'default',
					'label_placement' => 'top',
					'instruction_placement' => 'label',
					'hide_on_screen' => '',

				));

			endif;
		}

		/**
		 * Add the settings link to the plugins page
		 */
		public function plugin_settings_link($links) {
			$settings_link = sprintf('<a href="admin.php?page=%s">Settings</a>', self::SLUG);
			array_unshift($links, $settings_link);
			return $links;
		} // END public function plugin_settings_link($links)
	} // END class GHHS_Animals_Settings
} // END if(!class_exists('GHHS_Animals_Settings'))