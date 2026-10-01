<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['subtitle', 'title', 'footer_badge', 'footer_text', 'footer_link_text', 'footer_link_url'])]
class ServiceSection extends Model
{
}
