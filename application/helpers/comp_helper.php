<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function format_rupiah($angka)
{ 
	$rupiah = number_format($angka, 2, ',', '.');
	return $rupiah;
}

function tanggal_indo($tanggal)
{ 
	$newDate = date("d-m-Y", strtotime($tanggal));
	return $newDate;
}

function tanggal_db($tanggal)
{ 
	$newDate = date("Y-m-d", strtotime($tanggal));
	return $newDate;
}