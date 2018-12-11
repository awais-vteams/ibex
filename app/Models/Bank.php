<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bank
 *
 * @property $id
 * @property $name
 * @property $address
 * @property $account_no
 * @property $iban
 * @property $swift
 * @property $manufacturer_address
 * @property $created_at
 * @property $updated_at
 * @package App
 */
class Bank extends Model
{
    static $rules = [
		'name' => 'required',
		'address' => 'required',
		'account_no' => 'required',
		'iban' => 'required',
		'swift' => 'required',
		'manufacturer_address' => 'required',
    ];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','address','account_no','iban','swift','manufacturer_address'];
}