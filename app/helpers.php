<?php 


use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use Laravolt\Avatar\Facade as Avatar;

if (!function_exists('createAvatar')) {
    function createAvatar($name = null, $path = 'uploads/logo'): string
    {
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }

        $name = $name ? $name . '_' . time() . '_' . uniqid() : time() . '_' . uniqid();
        Avatar::create($name)->save("{$path}/{$name}.png");

        return "{$path}/{$name}.png";
    }
}

if (!function_exists('uploadImage')) {
    function uploadImage($file, $path)
    {
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('/uploads/' . $path . '/'), $fileName);

        return "uploads/$path/" . $fileName;
    }
}

if (!function_exists('flashSuccess')) {
    function flashSuccess(string $msg)
    {
        session()->flash('success', $msg);
    }
}


/**
 * Response error flash message.
 *
 * @param string $msg
 * @return \Illuminate\Http\Response
 */
if (!function_exists('flashError')) {
    function flashError(string $message = null)
    {
        if (!$message) {
            $message = __('something_went_wrong');
        }

        return session()->flash('error', $message);
    }
}