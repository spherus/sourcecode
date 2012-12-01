<?php

	namespace Spherus\HttpContext
	{
	
		use Spherus\Core\SpherusException;
		use Spherus\Core\ControllerBase;
		use Spherus\Core\Context;
		use Spherus\Routing\RouteHandler;

		/**
		 * Class that represents the http context object
		 *
		 * @author Rostislav Rotaru
		 * @package spherus.httpcontext
		 * @version 3.0
		 * 
		 */
		class HttpContext
		{
			
			/* CONSTRUCTOR */
			
			/**
			 * Initializes HTTPContext class with base variables
			 */
			public static function Initialize()
			{
				Request::Initialize();
				self::$serverProtocol = $_SERVER["SERVER_PROTOCOL"];
				self::$isSecured = empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == 'off' ? false : true;
				self::$parsedUrl = RouteHandler::Parse();
			}
			
			
			/* FIELDS */
			
			/**
			 * Defines if server HttpContext is secured (HTTPS)
			 * @var boolean
			 */
			private static $isSecured = false;
			
			/**
			 * Defines the server protocol
			 * 
			 * @var string
			 */
			private static $serverProtocol = null;
			
			/**
			 * Defines RouteHandler url parsing result
			 * @var Spherus\HttpContext\ParsedUrl
			 */
			private static $parsedUrl = null;
			
			/**
			 * Contains rendered view page content
			 * @var string
			 */
			private static $pageContent = null; 
			

			/* PROPERTIES */
			
			/**
			 * Gets the server http request is secured
			 * @return boolean
			 */
			public static function getIsSecured()
			{
				return self::$isSecured;
			}
			
			/**
			 * Gets the server protocol
			 * @return string
			 */
			public static function getServerProtocol()
			{
				return self::$serverProtocol;
			}
			
			/**
			 * Gets RouteHandler url parsing result
			 * @return Spherus\HttpContext\ParsedUrl
			 */
			public static function getParsedUrl()
			{
				return self::$parsedUrl;
			}

			/**
			 * Gets the rendered page content
			 * @return string
			 */
			public static function getPageContent()
			{
				return HttpContext::$pageContent;
			}
			
			/**
			 * Set the rendered page content
			 * @param string $pageContent The page content to set
			 */
			public static function setPageContent($pageContent)
			{
				HttpContext::$pageContent = $pageContent;
			}
			
		}	

	}

?>