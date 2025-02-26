<?php

class PdoConnect {

	private const HOST = 'localhost';
	private const DB = 'cd79987_axaxaxax';
	private const USER = 'cd79987_axaxaxax';
	private const PASS = '31103110fFfF';
	private const CHARSET = 'utf8';

	protected static $_instance;

	protected $DSN;
	protected $OPD;
	public $PDO;

	private function __construct() {
		
		$this->DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB . ";charset=" . self::CHARSET;

		$this->OPD = array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => false,
		);

		$this->PDO = new PDO($this->DSN, self::USER, self::PASS, $this->OPD);
	}

	public static function getInstance() {

		if (self::$_instance === null)
			self::$_instance = new self;

		return self::$_instance;
	}

	private function __clone() {}
	public function __wakeup() {}
	
	
}