<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Test
 *
 * @package App
 * @property string $title
 */
class Test extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'result', 'topic_id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    static public function GetLatestResult($topic_id,$user_id)
    {
        $test = Test::where('topic_id', $topic_id)->where('user_id', $user_id)->latest()->first();
        if($test){
            return $test->result;
        }
        else{
            return 0;
        }
    }
}
