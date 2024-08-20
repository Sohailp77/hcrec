<?php

namespace App\Actions\Jetstream;

use App\Models\User;
use Laravel\Jetstream\Contracts\DeletesUsers;
use App\Models\DeletedUser; // Import the DeletedUser model
use Illuminate\Support\Facades\DB;

class DeleteUser implements DeletesUsers
{

    /**
     * Delete the given user.
     */
    public function delete(User $user): void
    {

        DB::transaction(function () use ($user) {
            // Insert the user's details into the deleted_users table
            DB::table('deleted_users')->insert([
                'name' => $user->name,
                'email' => $user->email,
                'email_verified_at' => $user->email_verified_at,
                'password' => $user->password,
                'profile_photo_path' => $user->profile_photo_path,
                'phone' => $user->phone,
                'phone_verified' => $user->phone_verified,
                'temp_address' => $user->temp_address,
                'per_address' => $user->per_address,
                'pin_code' => $user->pin_code,
                'gender' => $user->gender,
                'date_birth' => $user->date_birth,
                'token' => $user->token,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Perform the deletion tasks
            $user->deleteProfilePhoto();
            $user->tokens->each->delete();
            $user->delete();
        });
    }
}
