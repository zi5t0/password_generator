<?php
class PasswordGenerator {
    const CHARS = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789!@#&*()_-";
    private string $length;
    private int $chars_length;
    public function __construct(string $length) {
	// Password length
        $this->length = $length;
	// Chars length
	$this->chars_length = strlen(self::CHARS)-1;
	// Call to generatePassword
        return $this->generatePassword($length, $this->chars_length);
    }
    
    // Returns password given length and list of chars
    public function generatePassword($length, $chars_length){
	$password = '';
	for ($i=0; $i < $length; $i++) {
	    $index = rand(0, $chars_length);
            $password .= self::CHARS[$index];
	}
        echo $password;
        return $password;
    }
}
$length = isset($_GET['length']) ? $_GET['length'] : 8;
$password = new PasswordGenerator($length);
echo $password;
?>
