<?php
namespace App\View\Helper;

use Cake\View\Helper\HtmlHelper;
use Cake\View\View;

/**
 * MyHtml helper
 */
class MyHtmlHelper extends HtmlHelper {


	public function foo() {
		debug('this is returned from my own HtmlHelper!');
	}

}
