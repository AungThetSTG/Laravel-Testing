<?php
    namespace App\Services;

    use Illuminate\Foundation\Auth\User as Authenticatable;

    abstract class ObjCreator extends Authenticatable 
    {
        public abstract function createObj(array $array);
    }
?>