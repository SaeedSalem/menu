<?php

namespace SaeedSalem\menu\Models;

use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    protected $table = 'menus';
    protected $fillable = ['parent_id','title','url','order', 'is_active'];

    public function parent() {

        return $this->hasOne(MenuModel::class, 'id', 'parent_id');

    }

    public function children() {

        return $this->hasMany(MenuModel::class, 'parent_id', 'id');

    }

    public static function tree() {

        return static::with('children')->whereNull('parent_id')->get();

    }
}
