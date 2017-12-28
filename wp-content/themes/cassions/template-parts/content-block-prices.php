<div class="bgtk">
	<?php		
		try {										
			$data = wp_excel_cms_get("banggia", "1");						
			//$row_count = 0;
			$isRowHeaderChild = false;
			$isRowItem = true;
	        foreach($data as $rows){
	        	$array = array();
	        	$count = 0;  					        	
	            foreach($rows as $row) {
	        	   if($row != '') {
	        	   	  $array[$count] = $row;
	        	   	  $count++; 
	        	   }  	 
	            }  				            
	            if($count == 1) {
	            	echo '<div class="row-header">';
	            	$isRowHeaderChild = true;
	            	$isRowItem = false;				            		
	            } else {
	            	if($isRowHeaderChild == true) {
	            		echo '<div class="row-item row-header-child">';
	            		$isRowHeaderChild = false;
	            		$isRowItem = false;
	            	} else { 	
	            		$isRowItem = true;
	            		echo '<div class="row-item">';
	            	}
	            	if($count > 0) {
		            	while($count < 5) {
		            		$array[$count++] = '0.00';				            		
		            	}				
	            	}            	
	            } 	
	            for($i = 0; $i < $count; $i++) {
	            	echo '<div class="column-item column_' . $i .'">';
	            	if($i >= 2 && $i < 5 && $isRowItem == true)
	            		echo '<span>' . number_format((float)$array[$i], 2, '.', '') . '</span>';
	            	else 
	            		echo '<span>' . $array[$i] . '</span>';
            		echo '</div>';
            	}	
            	echo '</div>';
            	$row_count++;				            			   				                          
	        }			
		} catch (Exception $ex) {
			error_log($ex->errorMessage());
		}			
	?>					
</div>	