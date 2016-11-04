<?php
add_action('admin_menu', 'bs_admin_accounts_options_menu');

function bs_admin_accounts_options_menu() {
		add_menu_page(
    'Brandspa theme options',
    'Accounts info', //menu name
    'manage_options', //allow it options
    'bs-accounts', //slug
    'accounts_settings_page',
    get_template_directory_uri() . '/public/img/bs_options.png', //icon on menu
    110 //position on menu
  );

	//call register settings function on init admin page
	add_action( 'admin_init', 'bs_accounts_options' );
}

function bs_accounts_options() {
?>
<div>
<div style="text-align: center; text-shadow: 1px 1px 3px rgba(0,0,0, .1)">
			<h1>Offices</h1>
		</div>
    <input type="text" placeholder="api key">
</div>


<?php
}