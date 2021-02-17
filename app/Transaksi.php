<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use AutoNumberTrait;

    protected $table = 'transaksi';
    protected $guarded = [];

    public function getAutoNumberOptions(){
        return[
            'kode_transaksi'=>[
                'format'=>function(){
                    return 'TRANS/'.date('Ymd').'/?';
                },'length'=>5]
            ];
    }
    public function suplier(){
        return $this->belongsTo(Suplier::class);
    }
    public function barang(){
        return $this->belongsTo(Barang::class);
    }
}
