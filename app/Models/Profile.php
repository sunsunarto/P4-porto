<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
 protected $filable = [
 'name','headline','bio','email','phone','location','photo','cv_path'
 ];
}
