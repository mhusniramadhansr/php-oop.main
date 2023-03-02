<?php

class SocialMedia {
	public string $name;
}

class Facebook extends SocialMedia {

	final public function login(string $name, string $passwd): void{

	}
}

class FakeFacebook extends Facebook{

	/* ini akan error
	public function login(string $name, string $passwd): void{

	}*/
}
