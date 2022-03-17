<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Overtrue\LaravelFollow\Followable;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Post[] $posts
 * @property-read int|null $posts_count
 * @method static \Database\Factories\CategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read Collection|Category[] $followers
 * @property-read int|null $followers_count
 * @property-read Collection|Category[] $followings
 * @property-read int|null $followings_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category orderByFollowersCount(string $direction = 'desc')
 * @method static \Illuminate\Database\Eloquent\Builder|Category orderByFollowersCountAsc()
 * @method static \Illuminate\Database\Eloquent\Builder|Category orderByFollowersCountDesc()
 */
class Category extends Model
{
    use HasFactory, Followable;

    /**
     * @var string
     */
    protected $table = 'categories';

    /**
     * @var string[]
     */
    protected $fillable = [
        'name'
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'id'
    ];

    /**
     * @return HasMany
     */
    public function posts (): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
