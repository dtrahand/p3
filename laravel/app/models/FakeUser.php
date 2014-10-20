<?php

class FakeUser {

// Properties (Variables)
	//Arrays:
	private $users;

	// String:
	private $path;

    // Methods (Functions)
	public function ($path) {
		$this->path = $path;
    } 
    // setPath
	public function getPath () {
		return $this->path;
    }
	public function getusers () {
        // Get the list of users
        $users = ();

        // Convert to an array:
        $this->users = json_decode($users, true);
        return $this->users;
    }
}
?>