<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route ::get('/posts',[postcontroller::class, 'index']);