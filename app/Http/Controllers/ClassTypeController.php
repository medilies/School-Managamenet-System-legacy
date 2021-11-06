<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassType;

class ClassTypeController extends Controller
{
    public function showAll(ClassType $class_type)
    {
        dd($class_type);
    }

    public function showAllEstablishmentClasses(ClassType $class_type)
    {
        dd($class_type->establishmentClasses()->get());
    }

    public function showAllYearClasses(ClassType $class_type)
    {
        dd($class_type->yearClasses()->get());
    }

    public function show(ClassType $class_type)
    {
        dd($class_type);
    }
}
