<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $guarded = [];

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
      $this->comments()->create(compact('body'));
    }

    public function scopeFilter($query, $filters)
    {
      //dd($filters);

      if (array_key_exists('month', $filters)) {
        $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
      }

      if (array_key_exists('year', $filters)) {
        $query->whereYear('created_at', $filters['year']);
      }
    }

    public static function archives()
    {
      return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
    }
}
