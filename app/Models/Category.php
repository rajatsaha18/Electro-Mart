<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $categories;
    private static $category;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'category-image/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    public static function newCategory($request)
    {
        self::$categories = new Category();
        self::$categories->name         = $request->name;
        self::$categories->description  = $request->description;
        self::$categories->image        = self::getImageUrl($request->file('image'));
        self::$categories->status       = $request->status;
        self::$categories->save();
    }

    public static function updateCategory($request, $id)
    {
        self::$category = Category::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$category->image))
            {
                unlink(self::$category->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else{
            self::$imageUrl = self::$category->image;
        }
        self::$category->name         = $request->name;
        self::$category->description  = $request->description;
        self::$category->image        = self::$imageUrl;
        self::$category->status       = $request->status;
        self::$category->save();

    }

    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        if(file_exists(self::$category->image))
        {
            unlink(self::$category->image);
        }
        self::$category->delete();
    }
}
