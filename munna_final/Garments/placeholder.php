<?php
if(isset($_GET["page"])) {
	$pageid = $_GET["page"];
	
	if($pageid == 1) {
		include("pages/user/create_user.php");
	} else if ($pageid ==2){
		include("pages/user/View_user.php");
	} else if($pageid ==3){
	 include("pages/user/Manage_user.php");
	} else if($pageid ==4){
	 include("pages/user/Edit_user.php");
	 
	} else if($pageid == 5) {
		include("pages/company/add_company.php");
	} else if ($pageid == 6){
		include("pages/company/View_company.php");
	} else if($pageid ==7){
	 include("pages/company/Manage_company.php");
	} else if($pageid ==8){
	 include("pages/company/edit_company.php");
	}


	  // Finish Company


	else if($pageid ==9){
	 include("pages/customer/add_customer.php");
	}
	else if($pageid ==10){
	 include("pages/customer/View_customer.php");
	}
	else if($pageid ==11){
	 include("pages/customer/Manage_customer.php");
	}
	else if($pageid ==12){
	 include("pages/customer/edit_customer.php");
	}
	

	// Finish customer


	else if($pageid ==13){
	 include("pages/purchare/add_purchare.php");
	}
	else if($pageid ==14){
	 include("pages/purchare/View_purchare.php");
	}
	else if($pageid ==15){
	 include("pages/purchare/Mangae_purchare.php");
	}
	else if($pageid ==16){
	 include("pages/purchare/edit_purchare.php");
	}
	


	// Finish purchase



	
	else if($pageid ==17){
	 include("pages/sales/add_sales.php");
	}
	else if($pageid ==18){
	 include("pages/sales/View_sales.php");
	}
	else if($pageid ==19){
	 include("pages/sales/Manage_sales.php");
	}
	else if($pageid ==20){
	 include("pages/sales/edit_sales.php");
	}
	


	// Finish Sales



	else if($pageid ==21){
	 include("pages/product/add_product.php");
	}
	else if($pageid ==22){
	 include("pages/product/View_product.php");
	}
	else if($pageid ==23){
	 include("pages/product/Manage_product.php");
	}
	else if($pageid ==24){
	 include("pages/product/edit_product.php");
	}
	

	  // Finish Product



	else if($pageid ==25){
	 include("pages/supplier/add_supplier.php");
	}
	else if($pageid ==26){
	 include("pages/supplier/View_supplier.php");
	}
	else if($pageid ==27){
	 include("pages/supplier/Manage_supplier.php");
	}
	else if($pageid ==28){
	 include("pages/supplier/edit_supplier.php");
	}


	// Finish Supplier


	
	else if($pageid ==29){
	 include("pages/Medicine/add_madecine.php");
	}
	else if($pageid ==30){
	 include("pages/Medicine/View_Madecine.php");
	}
	else if($pageid ==31){
	 include("pages/Medicine/Manage_Madecine.php");
	}
	else if($pageid ==32){
	 include("pages/Medicine/edit_Madecine.php");
	}
	else if($pageid ==33){
	 include("pages/stock/add_stock.php");
	}
	else if($pageid ==34){
	 include("pages/stock/View_stock.php");
	}
	else if($pageid ==35){
	 include("pages/stock/Manage_stock.php");
	}
	else if($pageid ==36){
	 include("pages/stock/edit_stock.php");
	} else if($pageid == "dashboard"){
	 include("dashboard.php");
	}
	else{
		echo "<h1>Placeholder</h1>";
	}
}
?>

