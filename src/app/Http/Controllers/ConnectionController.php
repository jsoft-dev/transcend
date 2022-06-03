<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class ConnectionController extends Controller
{
    public function index() :InertiaResponse
    {
        return Inertia::render('Connection');
    }

    public function create()
    {
        return Inertia::render('Connections/Create', [
            'name' => 'mage nama',
        ]);
    }

    public function store()
    {
        dd('called');
        $connection = request('connection');

    }
}
