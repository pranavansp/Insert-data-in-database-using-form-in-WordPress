add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
	add_menu_page( 'My Top Level Menu Example', 'Top Level Menu', 'manage_options', 'myplugin/myplugin-admin-page.php', 'myplguin_admin_page', 'dashicons-tickets', 6  );
}
