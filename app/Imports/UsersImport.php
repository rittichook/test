<?php
// namespace App\Imports;

// use App\Models\User;
// use App\Models\StudentProfile;

// use Maatwebsite\Excel\Concerns\ToModel;
// use Illuminate\Support\Facades\Hash;

// class UsersImport implements ToModel
// {
//     private $importCount = 0;

//     public function model(array $row)
//     {
//         $existingUser = User::where('studentCode', $row[1])->first();

//         if ($existingUser) {
//             return null;
//         }

//         $this->importCount++;

//         return [
//             new User([
//                 'username' => $row[0],
//                 'studentCode' => $row[1],
//                 'password' => Hash::make($row[2]),
//                 'role' => $row[3],
//             ]),
//             new StudentProfile([
//                 'studentCode' => $row[4],
//                 'prefix' => $row[5],
//                 'firstName_TH' => $row[6],
//                 'lastName_TH' => $row[7],
//                 'firstName_EN' => $row[8],
//                 'lastName_EN' => $row[9],
//                 'email' => $row[10],
//                 'tel' => $row[11],
//                 'birthday' => $row[12],
//                 'faculty' => $row[13],
//                 'branch' => $row[14],
//                 'avatar' => $row[15],
//             ]),
//         ];
//     }

//     public function getImportCount()
//     {
//         return $this->importCount;
//     }
// }



namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Members;
use App\Models\StudentProfile;

class UsersImport implements ToModel
{

    public function model(array $row)
    {
        dd($row);
        return new Members([
            'username' => $row[0],
            'password' => $row[1],
            'prefix' => $row[2],
            'firstName' => $row[3],
            'lastName' => $row[4],
            'firstNameE' => null,
            'lastNameE' => null,
            'email' => null,
            'phone' => null,
            'birthday' => $row[5],
            'avatar' => null,
            'faculty' => $row[6],
            'branch' => $row[7],
            'role' => $row[8],
            'status' => true,
        ]);
    }


        // Create and save the User instance
        // $user = new User([
        //     'username' => $row[0],
        //     'password' => Hash::make($row[1]),
        //     'first_name' => $row[2],
        //     'last_name' => $row[3],
        //     'tel' => $row[4],
        //     'role' => $row[5],
        //     'avatar' => $row[6],
        //     'status' => $row[7],
        // ]);
        // $user->save();

        // Create and save the associated StudentProfile instance
        // $studentProfile = new StudentProfile([
        //     'user_id' => $user->id,
        //     'student_code' => $row[8],
        //     'user_prefix_id' => $row[9],
        //     'first_name' => $row[2],
        //     'last_name' => $row[3],
        //     'first_name_e' => $row[2],
        //     'last_name_e' => $row[3],
        //     'email' => $row[14],
        //     'phone' => $row[15],
        //     'faculty_id' => $row[17],
        //     'branch_id' => $row[18],
        //     'birthday' => '2544-12-07 02:50:00',
        //     'avatar' => $row[19],
        // ]);
        // $studentProfile->save();

        // Return null to indicate that the data has been imported successfully

    }


