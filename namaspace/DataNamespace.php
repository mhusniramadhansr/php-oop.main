<?php

namespace Helper {
	const APP = "Belajar OOP PHP";

	function helpMe(){
		echo "Help Me" . PHP_EOL;
	}
}

namespace Data\One {

	class Buku {
		public $pengarang;
		public $judul;
	}

}

namespace Data\Two {

	class Buku {

		const AUTHOR = "Ikhlash Mulyanurahman";

		function info(){
			return "Author : " . self::AUTHOR . PHP_EOL;
		}
	}

}
