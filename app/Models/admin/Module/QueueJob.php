<?php

namespace App\Models\admin\Module;

use Illuminate\Database\Eloquent\Model;

class QueueJob extends Model
{
    protected $fillable = [
        'job_name',
        'status',
        'queue',
        'payload',
        'exception',
        'attempts',
        'started_at',
        'completed_at',
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'completed_at' => 'datetime',
    ];

    public function isCompleted(): bool
    {
        return $this->status === 'completed';
    }

    public function isFailed(): bool
    {
        return $this->status === 'failed';
    }

    public function isPending(): bool
    {
        return $this->status === 'pending';
    }

    public function isProcessing(): bool
    {
        return $this->status === 'processing';
    }
}
