<?php

use App\Models\Areapractica;
use App\Models\Categoria;
use App\Models\Config;
use App\Models\Whatsapp;


function setting()
{
	
	return Config::get()->last();
}


function areas()
{
	return Areapractica::orderBy('title', 'asc')->get();
}

function categorias()
{
	return Categoria::orderBy('name', 'asc')->get();
}

function subcategorias()
{
	return Subategoria::orderBy('name', 'asc')->get();
}


function whatsapp()
{
	return Whatsapp::orderBy('nombre', 'asc')->get();
}