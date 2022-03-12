<?php
class User{
    public int $Id;
    public string $Username;
    public array $Gifts;
    public function __construct(int $id, string $username, array $gifts)
    {
        $this->Id = $id;
        $this->Username = $username;
        $this->Gifts = $gifts;
    }
}