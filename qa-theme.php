<?php

	class qa_html_theme extends qa_html_theme_base
	{
		function doctype() 
		{
            qa_html_theme_base::doctype();
            if(isset($this->content['a_form'])) {
                $a_form = $this->content['a_form'];
                unset($this->content['a_form']);
                $this->content['a_form'] = $a_form;
            } 
		}
	}
	

/*
	Omit PHP closing tag to help avoid accidental output
*/