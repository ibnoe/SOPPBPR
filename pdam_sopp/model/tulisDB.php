<?php
	require "errorHD.php";
	class bacaDB{
		protected $link;
		public function __construct(){
			$this->connect();
		}
		private function connect(){
			$this->link = mysql_connect("localhost","root","rutan") or die(errorHD::salahDB(array(mysql_errno(),mysql_error(),0)));
			mysql_select_db("alir_sopp",$this->link);
		}
		public function tutup(){
			mysql_close($this->link);
		}
	}
	
	class tulisDB{
		protected $link;
		public function __construct(){
			$this->connect();
		}
		private function connect(){
			$this->link = mysql_connect("localhost","root","rutan") or die(errorHD::salahDB(array(mysql_errno(),mysql_error(),0)));
			mysql_select_db("alir_sopp",$this->link);
		}
		public function tutup(){
			mysql_close($this->link);
		}
	}
?> 