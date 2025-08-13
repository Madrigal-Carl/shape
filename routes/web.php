<?php

use App\Models\Admin;
use App\Models\Account;
use App\Models\Address;
use App\Models\Student;
use App\Models\Guardian;
use App\Models\Instructor;
use App\Models\LearnersProfile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

Route::middleware(['role.redirect'])->group(function () {
    Route::get('/', [RouteController::class, 'authentication'])->name('authentication');

    Route::get('/instructor',[RouteController::class, 'instructorPanel'])->name('instructor.panel');

    Route::get('/admin', [RouteController::class, 'adminPanel'])->name('admin.panel');
});

// Route::get('/create', function () {
//     $instructor = Instructor::create([
//         'license_number' => 'LIC-' . rand(1000, 9999),
//         'image_src' => 'images/instructor/default.jpg',
//         'first_name' => 'Erickson Dave',
//         'middle_name' => 'Cruzado',
//         'last_name' => 'Geroleo',
//         'sex' => 'male',
//         'birth_date' => '2004-12-20',
//         'specialization' => 'autism',
//         'status' => 'active',
//         'created_at' => now()->toDateTimeString(),
//         'updated_at' => now()->toDateTimeString(),
//     ]);

//     $admin = Admin::create([
//         'first_name' => 'Carl',
//         'middle_name' => 'Salido',
//         'last_name' => 'Madrigal',
//         'created_at' => now()->toDateTimeString(),
//         'updated_at' => now()->toDateTimeString(),
//     ]);

//     $student = Student::create([
//         'image_src' => 'images/instructor/default.jpg',
//         'first_name' => 'Aldrin James',
//         'middle_name' => 'Teodoro',
//         'last_name' => 'Palma',
//         'sex' => 'male',
//         'birth_date' => '2004-01-20',
//         'status' => 'active',
//         'created_at' => now()->toDateTimeString(),
//         'updated_at' => now()->toDateTimeString(),
//     ]);

//     Account::create([
//         'user_id' => $admin['admin_id'],
//         'username' => 'adminUser',
//         'password' => Hash::make('password123'),
//         'role' => 'admin',
//         'created_at' => now()->toDateTimeString(),
//         'updated_at' => now()->toDateTimeString(),
//     ]);

//     Account::create([
//         'user_id' => $student['student_id'],
//         'username' => 'studentUser',
//         'password' => Hash::make('password123'),
//         'role' => 'student',
//         'created_at' => now()->toDateTimeString(),
//         'updated_at' => now()->toDateTimeString(),
//     ]);

//     Account::create([
//         'user_id'  => $instructor['instructor_id'],
//         'username' => 'instructorUser',
//         'password' => Hash::make('password123'),
//         'role'     => 'instructor',
//         'created_at' => now()->toDateTimeString(),
//         'updated_at' => now()->toDateTimeString(),
//     ]);

//     LearnersProfile::create([
//         'student_id' => $student['student_id'],
//         'lrn' => '1234567890',
//         'grade_level' => 'Kindergarten',
//         'disability_type' => 'autism',
//         'support_need' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
//         'created_at' => now()->toDateTimeString(),
//         'updated_at' => now()->toDateTimeString(),
//     ]);

//     Guardian::create([
//         'student_id' => $student['student_id'],
//         'first_name' => 'Gene Elpie',
//         'middle_name' => 'Burikat',
//         'last_name' => 'Landoy',
//         'email' => 'carl.madrigal05@gmail.com',
//         'phone_number' => '9641787140',
//         'created_at' => now()->toDateTimeString(),
//         'updated_at' => now()->toDateTimeString(),
//     ]);

//     Address::create([
//         'owner_id' => $student['student_id'],
//         'province' => 'Marinduque',
//         'municipality' => 'Santa Cruz',
//         'barangay' => 'Bangcuangan',
//         'type' => 'permanent',
//         'created_at' => now()->toDateTimeString(),
//         'updated_at' => now()->toDateTimeString(),
//     ]);

//     Address::create([
//         'owner_id' => $instructor['instructor_id'],
//         'province' => 'Marinduque',
//         'municipality' => 'Boac',
//         'barangay' => 'Balimbing',
//         'type' => 'current',
//         'created_at' => now()->toDateTimeString(),
//         'updated_at' => now()->toDateTimeString(),
//     ]);

//     return 'Sample data created!';
// });

