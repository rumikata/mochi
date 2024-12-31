<?php

namespace App\Models;

use MongoDB\Client;


class Projeler
{
    private $collection;

    public function __construct()
    {
        $client = new Client("mongodb://localhost:27017");
        $this->collection = $client->kasei->projeler;
    }


    public function getAllProjects()
    {
        return $this->collection->find()->toArray();
    }


    public function addProject($data)
    {
        $this->collection->insertOne($data);
    }


    public function deleteProject($id)
    {
        $this->collection->deleteOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);
    }

    public function updateProject($id, $data)
    {
    $this->collection->updateOne(
        ['_id' => new \MongoDB\BSON\ObjectId($id)],
        ['$set' => $data]
    );
    return redirect()->to('/projeler');
    }
}
