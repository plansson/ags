<?php

class Conexao {

    private static $instance;

	public static function getInstance() {

		if (!isset(self::$instance)) {


			try {

				self::$instance = new \PDO('mysql:host=localhost;dbname=plans128_ags;charset=utf8', 'plans128_ags', '@1q2w3e4r');

				self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

				self::$instance->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

			} catch (Exception $e) {

				throw new \Exception($e->getCode()." - " . $e->getMessage());
			}

		}

		return self::$instance;

	}

}

