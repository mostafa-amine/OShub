<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'project_url',
        'repo_url',
        'packagist_url',
        'description',
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function GetProjects($PerPage = 10)
    {
        return $this->orderBy('created_at' , 'desc')->get();
    }

    public function findProjectWithTags($id)
    {
        return $this->findOrFail($id)->tags()->get();
    }
}
