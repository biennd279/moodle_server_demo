<?php

namespace App\Models;

use Database\Factories\StudentProfileFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\StudentProfile
 *
 * @property int $id
 * @property string|null $profile_picture_url
 * @property string|null $class
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $date_of_birth
 * @property string|null $address
 * @property string|null $phone
 * @property-read User|null $user
 * @method static StudentProfileFactory factory(...$parameters)
 * @method static Builder|StudentProfile newModelQuery()
 * @method static Builder|StudentProfile newQuery()
 * @method static Builder|StudentProfile query()
 * @method static Builder|StudentProfile whereAddress($value)
 * @method static Builder|StudentProfile whereClass($value)
 * @method static Builder|StudentProfile whereDateOfBirth($value)
 * @method static Builder|StudentProfile whereFirstName($value)
 * @method static Builder|StudentProfile whereId($value)
 * @method static Builder|StudentProfile whereLastName($value)
 * @method static Builder|StudentProfile wherePhone($value)
 * @method static Builder|StudentProfile whereProfilePictureUrl($value)
 * @mixin Eloquent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|StudentProfile whereCreatedAt($value)
 * @method static Builder|StudentProfile whereUpdatedAt($value)
 */
class StudentProfile extends Profile
{
    use HasFactory;

    protected $fillable = ["profile_picture_url", "class", "first_name", "last_name", "date_of_birth", "address", "phone",];
}
