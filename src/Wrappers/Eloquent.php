<?php

namespace Michaeljennings\Carpenter\Wrappers;

use Illuminate\Database\Eloquent\Model;

class Eloquent
{
    /**
     * The item being wrapped.
     *
     * @var Model
     */
    protected $item;

    /**
     * @param Model $item
     */
    public function __construct(Model $item)
    {
        $this->item = $item;
    }

    /**
     * Check if the provided key is set on the model.
     *
     * @param $key string
     * @return bool
     */
    function __isset($key)
    {
        return isset($this->item->$key);
    }

    /**
     * Return an value from the item.
     *
     * @param $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->item->$key;
    }
}