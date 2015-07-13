<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'questions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['question','option_A','option_B','option_C','option_D',
                            'answer','category','difficulty_rating'];
    /**
     * Get the user who created the question
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the users who answered the question
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function answeredByUsers()
    {
        return $this->belongsToMany('App\User','question_user')
                    ->withPivot('user_response')
                    ->withTimestamps();
    }

    /**
     * Query scope for excluding the given columns for the requested model
     *
     * @param $query
     * @param array $value
     * @return mixed
     */
    public function scopeExclude($query,$value = array())
    {
        $columns = array_merge(['id'],$this->fillable);
        return $query->select( array_diff( $columns,(array) $value) );
    }

    /**
     * Query scope for selecting eligible questions
     *
     * @param $query
     * @param $id
     * @param $question
     * @return mixed
     */
    public function scopeEligible($query,$id,$question)
    {
        return $query->where('user_id','!=',$id)
            ->whereNotIn('id',$question)
            ->take(1)->exclude(['answer']);
    }
}
