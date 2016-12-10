add_action( 'admin_menu', 'my_admin_menu' );
	
	function customerview_admin_page(){
	?>
	<div class="wrap">
		<h2>Customer Details</h2>
		<?php
		global $wpdb;
		$customers = $wpdb->get_results("SELECT * FROM request ORDER BY ID DESC;");
		echo "<table class='widefat fixed'>";
		echo "<th>ID</th>";
		echo "<th>Name</th>";
		echo "<th>Email</th>";
		echo "<th>Service</th>";
		echo "<th>Date</th>";
		echo "<th>Address</th>";
		echo "<th>Phone</th>";
		echo "<th>Message</th>";
		echo "<th>Status</th>";
		foreach($customers as $customer){
			echo "<tr>";
			echo "<td><input type='text' name='ID' value=".$customer->ID." size='1' readonly></input></td>";
			$CusID = $customer->ID;
			echo "<td>".$customer->Name."</td>";
			echo "<td>".$customer->Email."</td>";
			echo "<td>".$customer->Service."</td>";
			echo "<td>".$customer->Date."</td>";
			echo "<td>".$customer->Address."</td>";
			echo "<td>".$customer->Phone."</td>";
			echo "<td>".$customer->Message."</td>";
			echo "<td>".$customer->status."</td>";
			echo "</tr>";
		}
		echo "</table>";
		?>
	</div>
	<?php
	}
	
	function my_admin_menu() {
		add_menu_page('Customer Request View', 'Customer Requests', 'manage_options', 'myplugin/View_Customer_Details.php', 'customerview_admin_page', 'dashicons-tag', 6  );
	}
