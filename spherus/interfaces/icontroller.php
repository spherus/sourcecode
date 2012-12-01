<?php

	namespace Spherus\Interfaces
	{
		/**
		 * Defines interface that all modules should implement
		 *
		 * @author Rostislav Rotaru
		 * @package spherus.interfaces
		 * @version 3.0
		 *
		 */
		interface IController
		{
			
			//Methods that should be implemeted in module.php file for each module
			
			/**
			 * Permits to write custom functionality when module is loaded 
			 */
			function Run();
			
			/**
			 * Gets module name
			 * @return string 
			 */
			function GetModuleName();
			
			/**
			 * Gets module namestace name
			 * @return string
			 */
			function GetNamespaceName();
		}
	}

?>