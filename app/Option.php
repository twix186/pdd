<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Option
 *
 * @package App
 * @property string $text
 * @property integer $is_correct
 * @property integer $question_id
*/
class Option extends Model
{
    use SoftDeletes;

    protected $fillable = ['text', 'is_correct', 'question_id'];
    protected $hidden = [];
    
    

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setIsCorrectAttribute($input)
    {
        $this->attributes['is_correct'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setQuestionIdAttribute($input)
    {
        $this->attributes['question_id'] = $input ? $input : null;
    }

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id')->withTrashed();
    }
}
