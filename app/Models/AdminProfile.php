<?php

namespace App\Models;

use Database\Factories\AdminProfileFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

/**
 * App\Models\AdminProfile
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
 * @method static AdminProfileFactory factory(...$parameters)
 * @method static Builder|AdminProfile newModelQuery()
 * @method static Builder|AdminProfile newQuery()
 * @method static Builder|AdminProfile query()
 * @method static Builder|AdminProfile whereAddress($value)
 * @method static Builder|AdminProfile whereCreatedAt($value)
 * @method static Builder|AdminProfile whereDateOfBirth($value)
 * @method static Builder|AdminProfile whereFirstName($value)
 * @method static Builder|AdminProfile whereId($value)
 * @method static Builder|AdminProfile whereLastName($value)
 * @method static Builder|AdminProfile wherePhone($value)
 * @method static Builder|AdminProfile whereProfilePictureUrl($value)
 * @method static Builder|AdminProfile whereUpdatedAt($value)
 * @mixin Eloquent
 */
class AdminProfile extends Profile
{
    use HasFactory;

    protected $fillable = ["profile_picture_url", "staff_position","first_name", "last_name", "date_of_birth", "address", "phone",];
}
