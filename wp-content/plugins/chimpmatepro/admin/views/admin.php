<?php
/** 
 * ChimpMate Pro - WordPress MailChimp Assistant
 *
 * @package   ChimpMate Pro - WordPress MailChimp Assistant
 * @author    Voltroid<care@voltroid.com>
 * @link      http://voltroid.com/chimpmate
 * @copyright 2015 Voltroid
 */

?>
<div class="wrap wpmca_home" ng-app="chimpmate" ng-controller="chimpmateController">
	<div class="wpmca_header">
		<div class="h_left"></div>
		<div class="h_mid"></div>
		<div class="h_right">
			<div class="header_voltriod h_right">
				<span class="voltroid"></span>
				<span class="apanel"></span>
				<div class="vlogo"></div>
			</div>
		</div>
	</div> 
	<div class="wpmca_toolbar">
		<div class="wpmca_tabs">
			<ul>
				<li class="tabitem active material-design"><a href="#general" data-title="general">GENERAL</a></li>
				<li class="tabitem material-design"><a href="#lightbox" data-title="lightbox">LIGHTBOX</a></li>
				<li class="tabitem material-design"><a href="#slider" data-title="slider">SLIDER</a></li>
				<li class="tabitem material-design"><a href="#widget" data-title="widget">WIDGET</a></li>
				<li class="tabitem material-design"><a href="#addon" data-title="addon">ADD-ON</a></li>
				<li class="tabitem material-design"><a href="#statistics" data-title="statistics">STATISTICS</a></li>
				<li class="tabitem material-design"><a href="#abtest" data-title="abtest">A/B TESTING</a></li>
				<li class="tabitem material-design"><a href="#advanced" data-title="advanced">ADVANCED</a></li>
			</ul>
		</div>
		<button ng-click="update_options()" class="wpmca_button red material-design">Update Options</button>
		<div class="wpcmaloading_container">
			<div class="wpmcaspinner">
				<svg class="circular">
					<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
				</svg>
			</div>
			<div class="wpmca_status"></div>                
		</div>
	</div>  

	<div class="wpmca_content">
		<div class="divloader"><div class="divload"><div class="divload1"></div><div class="divload2"></div><div class="divload3"></div><div class="divload4"></div><div class="divload5"></div></div></div>

		<div id="general" class="wpmca_box show materialcard">

		</div>
		<div id="lightbox" class="wpmca_box materialcard">

		</div>
		<div id="slider" class="wpmca_box materialcard">

		</div>
		<div id="widget" class="wpmca_box materialcard">

		</div>
		<div id="addon" class="wpmca_box materialcard">

		</div>
		<div id="statistics" class="wpmca_box materialcard">

		</div>
		<div id="abtest" class="wpmca_box materialcard">

		</div>
		<div id="advanced" class="wpmca_box materialcard">

		</div>
	</div> 
</div>