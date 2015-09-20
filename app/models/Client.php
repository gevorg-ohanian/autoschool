<?php
class Client extends User
{
    protected $table = 'clients';


    public static $rules = array(
        'name'=>'required|alpha',
        'surname'=>'required|alpha',
        'telephone'=>'required|numeric',
    );

    protected $fillable = array(
        'name',
        'surname',
        'telephone',
        );
}