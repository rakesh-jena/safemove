<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SourceExpenssModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_source_expenss';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['sd_exp_id','cn_no','expense_cat','cost','payment_mode','narration','created_by','updated_by'];
}
