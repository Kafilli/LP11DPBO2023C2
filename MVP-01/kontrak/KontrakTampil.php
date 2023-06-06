<?php

interface KontrakTampil
{
	public function tampil();
}

interface KontrakPresenterTampil
{
	public function prosesDataPasien();
	public function getId($i);
	public function getNik($i);
	public function getNama($i);
	public function getTempat($i);
	public function getTl($i);
	public function getGender($i);
	public function getSize();
	public function getEmail($i);
	public function getTelp($i);
	public function delete($id);
}
