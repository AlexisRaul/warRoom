<? 
	require_once('..\View\mesa1.html');
	require_once('..\Controller\conexion.php');


	class mesa1Controller{

		function selectRegsitros($query){
	        $this->conectar();
	            $result=mssql_query($query);
	            // Verifica si hay registros
	            if (!mssql_num_rows($result)) {
	                echo 'No se encontraron registros';
	            } 
	            else {
	                $row = mssql_fetch_assoc($result);                
	                    foreach ($row as $variable) {
	                        echo $variable;
	                        echo "<br>";
	                    }

	            }
		}
	}
?>