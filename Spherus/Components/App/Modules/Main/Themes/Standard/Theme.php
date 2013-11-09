<?php

	namespace App\Modules\Main\Themes\Standard;

	use Spherus\Core\Base\ThemeBase;
	
	class Theme extends ThemeBase
	{
		
		/* FIELDS */
		
		/**
		 * Defines the child theme object
		 * @var ITheme
		 */
		private $childTheme = 'Standard';
		
		
		/* PROPERTIES */
		
		/* (non-PHPdoc)
		 * @see \Spherus\Interfaces\ITheme::getChildTheme()
		*/
		public function getChildTheme()
		{
			return $this->childTheme;
		}
			
		/* (non-PHPdoc)
		 * @see \Spherus\Interfaces\ITheme::setChildTheme()
		*/
		public function setChildTheme($childTheme)
		{
			$this->childTheme = $childTheme;
		}
		
		/* (non-PHPdoc)
		 * @see \Spherus\Interfaces\ITheme::getName()
		*/
		public function getName()
		{
			return $this->name;
		}
		
		/*
		 * (non-PHPdoc) @see \Spherus\Interfaces\ITheme::getCssPath()
		*/
		public function getCssPath()
		{
			return '/Css';
		}
		
		/*
		 * (non-PHPdoc) @see \Spherus\Interfaces\ITheme::getImagesPath()
		*/
		public function getImagesPath()
		{
			return '/App/Themes/'.$this->name.'/Css';
		}
		
		/*
		 * (non-PHPdoc) @see \Spherus\Interfaces\ITheme::getLayoutsPath()
		*/
		public function getLayoutsPath()
		{
			return __DIR__.'/Layouts';
		}
		
		/*
		 * (non-PHPdoc) @see \Spherus\Interfaces\ITheme::getScriptsPath()
		*/
		public function getScriptsPath()
		{
			return '/App/Themes/'.$this->name.'/scripts';
		}
		
	}