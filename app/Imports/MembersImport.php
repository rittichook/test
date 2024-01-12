<?php

// MembersImport.php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Members;

class MembersImport implements ToModel
{
    public function model(array $row)
    {
        return new Members([
            'username' => $row[0],
            'password' => $row[1],
            'prefix' => $row[2],
            'firstName' => $row[3],
            'lastName' => $row[4],
            'birthday' => $row[5],
            'faculty' => $row[6],
            'branch' => $row[7],
            'role' => $row[8],
            'status' => true,
        ]);
    }
}

