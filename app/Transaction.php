<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'items',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];
    
    /**
     * The attributes that are going to be entered as JSON in the database.
     *
     * @var array
     */
    protected $casts = [
        'items' => 'array',
    ];
    
    /**
     * Instantiate a Transaction
     */
    public function __construct(array $items = [])
    {
        if(count($items)) $this->items = $items;
    }
    
    /**
     * Belongs-to-one Key relationship
     * 
     * @return mixed
     */
    public function redisKey()
    {
        return $this->belongsToOne('App\RedisKey');
    }
}