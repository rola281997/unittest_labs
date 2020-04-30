<?php
	class Form {
		protected $htmlCode = [];

		public function __construct($options = []) {
			$this->htmlCode[] = sprintf(
				'<form method="%s" action="%s">', 
				isset($options['method']) ? $options['method'] : '',
				isset($options['action']) ? $options['action'] : ''
			);
		}

		public function textbox($options = []) {
			$this->htmlCode[] = sprintf(
				'<div><label>%s</label>' .
				'<input type="text" name="%s" value="%s" %s>' .
				'</div>',
				isset($options['label']) ? $options['label'] : '',
				isset($options['name']) ? $options['name'] : '',
				isset($options['value']) ? $options['value'] : '',
				isset($options['required']) && $options['required'] === true ? 'required' : ''
			);
		}

		public function select($options = []) {
			
			$this->htmlCode[] = sprintf(
				'<div><label>gender</label>'.
				'<select name="%s"><option value="" selected></option>',
				isset($options['name']) ? $options['name'] : '');
					
				
				if(isset($options['options'])) 
				{foreach($options['options'] as $key => $key_value)
					$this->htmlCode[] = sprintf(
						'<option value="%s">%s</option>',$key,$key_value);
				} 
			
			
			$this->htmlCode[] = '</select>.</div>';
		}

		public function email($options = []) {
			$this->htmlCode[] = sprintf(
				'<div><label>email</label>' .
				'<input type="email" name="%s" %s>' .
				'</div>',
				isset($options['name']) ? $options['name'] : '',
				isset($options['required']) && $options['required'] === true ? 'required' : ''
			);
		}
		

		public function submit($options = []) {
			$this->htmlCode[] = sprintf(
				
				'<div><input type="%s" value="%s">' .
				'</div>',
				isset($options['type']) ? $options['type'] : '',
				isset($options['value']) ? $options['value'] : ''
			);
		}

		
		public function hidden($options = []) {
			$this->htmlCode[] = sprintf(
				'<div>'.
				'<input type="%s" name="%s" value="%s">' .
				'</div>',
				isset($options['type']) ? $options['type'] : '',
				isset($options['name']) ? $options['name'] : '',
				isset($options['value']) ? $options['value'] : ''
			);
		}
		public function html() {
			$this->htmlCode[] = '</form>';
			return implode(' ', $this->htmlCode);
		}


	}