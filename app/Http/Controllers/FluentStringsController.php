<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentStringsController extends Controller
{
    public function index()
    {
        $string="hello hi";
        $string=Str::of($string)->ucfirst($string)->replaceFirst('hi', 'my', $string)->camel($string);
        return $string;
    }
}