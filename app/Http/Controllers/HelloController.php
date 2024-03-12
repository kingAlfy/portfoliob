<?php
// app\Http\Controllers\PostController.php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia; // Import Inertia class to render components

class HelloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Here we provide posts from the database to prop that we created in component
        return Inertia::render('Index');
    }

}