/*
 * SimpleModal Basic Modal Dialog
 * http://www.ericmmartin.com/projects/simplemodal/
 * http://code.google.com/p/simplemodal/
 *
 * Copyright (c) 2010 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Revision: $Id: basic.js 254 2010-07-23 05:14:44Z emartin24 $
 */

jQuery(function ($) {
	// Load dialog on page load
	//$('#basic-modal-content').modal();

	// Load dialog on click
	$('#basic-modal .basic').click(function (e) {
		$('#basic-modal-content').modal();

		return false;
	});
	
	$('#basic-modal2 .basic2').click(function (e) {
		$('#basic-modal-content2').modal();

		return false;
	});
	//SERVICIOS.
	$('#basic-modal-Osteopatia .basic-Osteopatia').click(function (e) {
		$('#basic-modal-content-Osteopatia').modal();

		return false;
	});
	$('#basic-modal-Nutricion .basic-Nutricion').click(function (e) {
		$('#basic-modal-content-Nutricion').modal();

		return false;
	});
	$('#basic-modal-Estetica .basic-Estetica').click(function (e) {
		$('#basic-modal-content-Estetica').modal();

		return false;
	});
	$('#basic-modal-Podologia .basic-Podologia').click(function (e) {
		$('#basic-modal-content-Podologia').modal();

		return false;
	});	
	$('#basic-modal-Personal .basic-Personal').click(function (e) {
		$('#basic-modal-content-Personal').modal();

		return false;
	});
	$('#basic-modal-Pilates .basic-Pilates').click(function (e) {
		$('#basic-modal-content-Pilates').modal();

		return false;
	});
	
	//TESTIMONIOS.
	$('#basic-modal01 .basic01').click(function(e) {
		  $('#basic-modal-content01').modal();

		  return false;
		 });

		 $('#basic-modal02 .basic02').click(function(e) {
		  $('#basic-modal-content02').modal();

		  return false;
		 });
		 
		 $('#basic-modal03 .basic03').click(function (e) {
		  $('#basic-modal-content03').modal();

		  return false;
		 });
		 
		 $('#basic-modal04 .basic04').click(function (e) {
		  $('#basic-modal-content04').modal();

		  return false;
		 });	
});