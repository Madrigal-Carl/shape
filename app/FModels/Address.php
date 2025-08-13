<?php

namespace App\FModels;

use Roddy\FirestoreEloquent\Facade\FModel;
use Roddy\FirestoreEloquent\Firestore\Eloquent\Traits\FRelations;

class Address extends FModel
{
    use FRelations;
    /**
    * Name of your firestore collection
    */
    protected $collection = 'address';

    /**
    * The primary key of the model/collection
    */
    protected $primaryKey = 'address_id';

    /**
    * The fillable property takes care of defining which fields are
    * to be considered when the user will insert or update data.
    * Fillable property should ba an array. e.g ['id', 'age', 'name']
    */
    protected $fillable = [
        'owner_id',
        'province',
        'municipality',
        'barangay',
        'type',
        'created_at',
        'updated_at',
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

    public function instructor()
    {
        return $this->fbelongsTo(Instructor::class, 'instructor_id', 'address_id');
    }

    public function student()
    {
        return $this->fbelongsTo(Student::class, 'student_id', 'instructor_id');
    }
}
