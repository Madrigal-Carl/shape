<?php

namespace App\Models;

use Roddy\FirestoreEloquent\Facade\FModel;
use Roddy\FirestoreEloquent\Firestore\Eloquent\Traits\FRelations;

class Account extends FModel
{
    use FRelations;
    /**
    * Name of your firestore collection
    */
    protected $collection = 'accounts';

    /**
    * The primary key of the model/collection
    */
    protected $primaryKey = 'account_id';

    /**
    * The fillable property takes care of defining which fields are
    * to be considered when the user will insert or update data.
    * Fillable property should ba an array. e.g ['id', 'age', 'name']
    */
    protected $fillable = [
        'user_id',
        'username',
        'password',
        'role',
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

    public function admin()
    {
        return $this->fBelongsTo(Admin::class, 'admin_id', 'user_id');
    }

    public function instructor()
    {
        return $this->fBelongsTo(Instructor::class, 'instructor_id', 'user_id');
    }

    public function student()
    {
        return $this->fBelongsTo(Student::class, 'student_id', 'user_id');
    }
}
