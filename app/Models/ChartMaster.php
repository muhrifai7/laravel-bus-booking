<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartMaster extends Model
{
    protected $table = 'chart_master';

    protected $fillable = ['account_code', 'account_name', 'account_type', 'inactive', 'no_pol', 'id_bus', 'nomor_rek', 'id_company'];

    public static function rules()
    {
        return [
            'account_code' => 'required|max:15',
            'account_name' => 'required|max:60',
            'account_type' => 'string',
            'inactive' => 'required|boolean',
            'no_pol' => 'required|integer',
            'id_bus' => 'required|integer',
            'nomor_rek' => 'string',
            'id_company' => 'required|integer',
        ];
    }
}
