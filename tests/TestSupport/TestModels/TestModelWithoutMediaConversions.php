<?php

namespace Spatie\MediaLibrary\Tests\TestSupport\TestModels;

use MongoDB\Laravel\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class TestModelWithoutMediaConversions extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'test_models';
    protected $guarded = [];
    public $timestamps = false;
}
