<?php

namespace App\Traits;

use App\Models\AdminHistory;
use Illuminate\Support\Facades\Log;

trait RecordsAdminHistory
{
    protected static function bootRecordsAdminHistory()
    {
        static::updated(function ($model) {
            self::recordHistory($model, 'updated');
        });

        static::deleted(function ($model) {
            self::recordHistory($model, 'deleted');
        });

        static::created(function ($model) {
            self::recordHistory($model, 'created');
        });
    }

    protected static function recordHistory($model, $action)
    {
        $history = new AdminHistory();
        $history->admin_id = auth()->id();
        $history->action = $action;
        $history->affected_model = get_class($model);
        $history->affected_model_id = $model->id;

        // Pastikan `changes` selalu terisi, meskipun tidak ada perubahan
        $changes = ($action === 'updated' || $action === 'deleted') ? $model->getDirty() : $model->getChanges();
        Log::info($changes);  // Debugging: Log perubahan ke file log
        $history->changes = !empty($changes) ? json_encode($changes) : '[]';

        $history->save();
    }
}
