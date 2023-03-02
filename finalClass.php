<?php

class SocialMedia {
	public string $name;
}

final class Facebook extends SocialMedia{
}

/*
 * Ini akan error
class FakeFacebook extends Facebook{

}
 */
