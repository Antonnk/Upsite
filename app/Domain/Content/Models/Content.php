<?php

namespace Domain\Content\Models;

use Domain\Content\Traits\Contentable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $type
 * @property array $body
 */
class Content extends Model
{
    use Contentable;

    protected $guarded = [];

    protected $table = "content";

    protected $casts = [
        'body' => 'array'
    ];

    public function contentable()
    {
        return $this->morphTo();
    }
}
