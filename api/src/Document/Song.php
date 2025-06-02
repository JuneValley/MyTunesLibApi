<?php

namespace App\Document;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Field;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;

#[ApiResource]
#[Document(collection: 'songs')]
class Song {
    #[Id]
    public string $id;

    #[Field]
    public string $url;
}