<?php

use App\Models\Clients\Subjects;
use App\Models\Clients\Components;
use App\Models\Clients\Topics;

function getAllSubjects()
{
    $subjects = new Subjects();
    return $subjects->getAll();
}
function getAllComponents()
{
    $components = new Components();
    return $components->getAll();
}
function getAllTopics()
{
    $topics = new Topics();
    return $topics->getAll();
}
