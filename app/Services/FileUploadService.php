<?php
namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUploadService
{
    /**
     * Upload an image for a user.
     *
     * @param UploadedFile $file
     * @param int $userId
     * @param string $folder
     * @return string $path
     */
    public static function uploadImage(UploadedFile $file, int $userId, string $folder = 'images'): string
    {
        $filename = Str::slug($file->getClientOriginalName()) . '-' . time() . '.' . $file->getClientOriginalExtension();

        $path =  'user_content/' . $folder . '/' . $userId . '/' . $filename;

        $file->storeAs($path);

        return $path;
    }

}
