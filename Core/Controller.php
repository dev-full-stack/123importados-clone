<?php
	class Controller{
		public function loadView($viewName, $viewData = array()){
			extract($viewData);
			include('Views/'.$viewName.'.php');
		}

		public function loadTemplate($viewName, $viewData = array()){
			include('Views/Template.php');
		}

		public function loadViewInTemplate($viewName, $viewData = array()){
			if (is_array($viewData)) {
				extract($viewData);
			}
			include('Views/'.$viewName.'.php');
		}
	}
?>