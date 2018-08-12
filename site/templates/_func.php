<?php namespace ProcessWire;

/**
 * /site/templates/_func.php
 * 
 * Example of shared functions used by template files
 *
 * This file is currently included by _init.php 
 * 
 * FUN FACT: This file is identical to the one in the NON-multi-language
 * version of this site profile (site-default). In fact, it's rare that
 * one has to think about languages when developing a multi-language 
 * site in ProcessWire. 
 *
 */

/**
 * Given a group of pages, render a simple <ul> navigation
 *
 * This is here to demonstrate an example of a simple shared function.
 * Usage is completely optional.
 *
 * @param PageArray $items
 * @return string
 *
 */
function renderNav($linkClass) {

	// $out is where we store the markup we are creating in this function
	$out = '';

	// cycle through all the items
	foreach (wire('pages')->get("/")->children("template=category") as $category) {
		if (count($category->children) > 0) {

			if($category->id == wire('page')->parent->id) {
				$current = " current";
			}

			$out .= '<a href=' . $category->children->first->url . ' class="' . $linkClass . $current . '">' . $category->title . '</a>';
		}
	}


	// return the markup we generated above
	return $out;
}
