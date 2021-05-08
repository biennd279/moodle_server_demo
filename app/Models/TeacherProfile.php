<?php

namespace App\Models;

use Database\Factories\TeacherProfileFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

/**
 * App\Models\TeacherProfile
 *
 * @property int $id
 * @property string|null $profile_picture_url
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $date_of_birth
 * @property string|null $address
 * @property string|null $phone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User|null $user
 * @method static TeacherProfileFactory factory(...$parameters)
 * @method static Builder|TeacherProfile newModelQuery()
 * @method static Builder|TeacherProfile newQuery()
 * @method static Builder|TeacherProfile query()
 * @method static Builder|TeacherProfile whereAddress($value)
 * @method static Builder|TeacherProfile whereCreatedAt($value)
 * @method static Builder|TeacherProfile whereDateOfBirth($value)
 * @method static Builder|TeacherProfile whereFirstName($value)
 * @method static Builder|TeacherProfile whereId($value)
 * @method static Builder|TeacherProfile whereLastName($value)
 * @method static Builder|TeacherProfile wherePhone($value)
 * @method static Builder|TeacherProfile whereProfilePictureUrl($value)
 * @method static Builder|TeacherProfile whereUpdatedAt($value)
 * @mixin Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Course[] $courses
 * @property-read int|null $courses_count
 */
class TeacherProfile extends Profile
{
    use HasFactory;

    protected $fillable = ["profile_picture_url", "first_name", "last_name", "date_of_birth", "address", "phone",];

    public function courses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(
            Course::class,
            'teacher_id'
        );
    }
}
