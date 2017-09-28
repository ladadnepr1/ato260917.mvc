<?php

class View {
    public function generate($content_view, $template_view='template_view.php'){
	include_once $template_view;
    }
}
