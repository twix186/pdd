<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Question
 *
 * @package App
 * @property string $text
 * @property string $picture
*/
class Question extends Model
{
    use SoftDeletes;

    protected $fillable = ['text', 'picture'];
    protected $hidden = [];

    public function options()
    {
        return $this->hasMany(Option::class, 'question_id')->withTrashed();
    }
    
    
}
