<?php

namespace App\Models;

use Roddy\FirestoreEloquent\Facade\FModel;
use Roddy\FirestoreEloquent\Firestore\Eloquent\Traits\FRelations;

class Student extends FModel
{
    use FRelations;
    /**
    * Name of your firestore collection
    */
    protected $collection = 'students';

    /**
    * The primary key of the model/collection
    */
    protected $primaryKey = 'student_id';

    /**
    * The fillable property takes care of defining which fields are
    * to be considered when the user will insert or update data.
    * Fillable property should ba an array. e.g ['id', 'age', 'name']
    */
    protected $fillable = [
        'image_src',
        'first_name',
        'middle_name',
        'last_name',
        'sex',
        'birth_date',
        'status',
    ];

    /**
    * The required property takes care of defining which fields
    * should be required and cannot be empty when inserting data only.
    * Required property should ba an array. e.g ['id', 'name']
    */
    protected $required = [];

    /**
    * The default property is use to set a default value for
    * the fields provided in the array if the fields is empty.
    * Default property should ba an array. e.g ['name' => 'Alfred', 'date' => date('Y-m-d)]
    */
    protected $default = [];

    /**
    * The fieldTypes property is use to set a types for
    * the fields provided in the array.
    * Supported types are: integer, string, array and object
    * fieldTypes property should ba an array. e.g ['name' => 'string', 'age' => 'int', 'date' => 'date']
    */
    protected $fieldTypes = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $now = now()->toDateTimeString();
            $model->created_at = $now;
            $model->updated_at = $now;
        });

        static::updating(function ($model) {
            $model->updated_at = now()->toDateTimeString();
        });
    }

    public function account()
    {
        return $this->fHasOne(Account::class, 'user_id', 'student_id');
    }

    public function address()
    {
        return $this->fHasOne(Address::class,'owner_id', 'student_id');
    }

    public function learnersProfile()
    {
        return $this->fHasOne(LearnersProfile::class,'student_id', 'student_id');
    }

    public function guardian()
    {
        return $this->fHasOne(Guardian::class,'student_id', 'student_id');
    }
}
