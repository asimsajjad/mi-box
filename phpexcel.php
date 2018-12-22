<?php 

		ini_set('memory_limit', '128M');
		set_time_limit(0);
		
		ini_set('display_errors',1);
		ini_set('display_startup_errors',1);
		error_reporting(1);
		
		require ('libs/sys_util/PHPExcel/PHPExcel.php');
		
		$filename = 'excel-file-ready-to-parse.xlsx';
		
		$uploaddir = str_replace("\\", "/", getcwd()) . '/modules/customer/assets/bulklanerate/';
		
		$inputFileType = PHPExcel_IOFactory::identify($uploaddir . $filename);
		
		//echo $uploaddir . $filename; die;
		
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		
		
		
		$objReader->setReadDataOnly(true);
		
		$objReader->setReadDataOnly(true);
		
		/**  Load $inputFileName to a PHPExcel Object  * */
		$objPHPExcel = $objReader->load($uploaddir . $filename);


//		$total_sheets = $objPHPExcel->getSheetCount();

		$allSheetName = $objPHPExcel->getSheetNames();
		
		
		$tot_sheet = $objPHPExcel->getSheetCount();
		
		//echo $tot_sheet; die; 
		
		$total_sheets_array = array();
		
		for ($i = 0; $i < $tot_sheet; $i++) {
			
			$objWorksheet = $objPHPExcel->setActiveSheetIndex($i);
		
			$maxCell = $objWorksheet->getHighestRowAndColumn();
			
			
			//print_r($maxCell);
			
			$data = $objWorksheet->rangeToArray('A1:' . $maxCell['column'] . $maxCell['row']);
			//$data = $objWorksheet->rangeToArray('A1:' . 'AK'. $maxCell['row']);
			foreach( $data as $key => $val){
				$tempArray = array();
				foreach($val as $innerKey=>$innerVal){
					$tempArray[$innerKey] = $innerVal;
				}
				array_push($total_sheets_array,$tempArray);
			}
			
			
		}
		
		echo '<pre>'; echo json_encode($total_sheets_array); echo '</pre>';



?>