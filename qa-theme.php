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
		function vote_buttons($post) {
			if($this->template != 'questions' && $this->template != 'qa')
				qa_html_theme_base::vote_buttons($post);
		}

	}
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
