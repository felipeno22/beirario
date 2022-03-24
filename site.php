<?php

use \felipeno22\Page;


$app->get("/", function (){

	
		$page=new Page();


		$page->setTpl("index");


	

});









?>