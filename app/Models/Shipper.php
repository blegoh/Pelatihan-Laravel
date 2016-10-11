<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 11/10/16
 * Time: 19:59
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    protected $table = 'Shippers';
    protected $primaryKey = 'ShipperID';
    protected $fillable = ['ShipperID','CompanyName','Phone'];

    public $timestamps = false;

}