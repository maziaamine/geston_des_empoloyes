<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['reference', 'employee_id', 'amount', 'launch_date', 'done_time', 'status', 'month', 'year'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
