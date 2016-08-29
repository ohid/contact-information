<?php

namespace App\Models;
use App\Models\Contact;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'nickname', 'email', 'image', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    /**
     *
     * Set Hashed password
     *
     */
    public  function setPasswordAttribute( $value )
    {
        $this->attributes['password'] = bcrypt( $value );
    }


    /**
     *
     * User has one Contact
     *
     */
    public function contact()
    {
        return $this->hasOne(Contact::class);
    }


    
    /**
     *
     * Get the gravatar image of the user
     *
     */
    
    public function gravatarImage($size)
    {
        $email = $this->attributes['email'];
        $size = $size;

        return $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=mm&s=" . $size;

    }

    /**
     *
     * Get the profile image
     *
     */
    
    public function getImage( $size )
    {
        $profileImg = $this->attributes['image'];

        if( $profileImg ) {
            return '/uploads/profile_images/' . $profileImg;
        } else {
            return $this->gravatarImage( $size );
        }
    }

 
}
