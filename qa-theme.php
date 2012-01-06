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
		function logo()
		{
			$this->output(
				'<DIV CLASS="qa-logo">',
				qa_opt('site_title'),
				'</DIV>'
			);
		}
	}
	

/*
	Omit PHP closing tag to help avoid accidental output
*/