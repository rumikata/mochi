<?php

namespace App\Controllers;

use App\Models\Projeler;

class Projekontrol extends BaseController
{
    protected $projectModel;

    public function __construct()
    {
        $this->projectModel = new Projeler(); 
    }

    public function index()
    {
        $projects = $this->projectModel->getAllProjects();
        return view('sayfalar/panel', ['projects' => $projects]); 
    }

    public function add()
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'name' => $this->request->getPost('name'),
                'description' => $this->request->getPost('description')
            ];
            
            $this->projectModel->addProject($data);
            
            return redirect()->to('/projeler');
        }
    }

    public function delete($id)
    {
        $this->projectModel->deleteProject($id);
        return redirect()->to('/projeler');
    }

    public function update($id)
    {
    if ($this->request->getMethod() === 'post') {
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description')
        ];
        $this->projectModel->updateProject($id, $data);
        return redirect()->to('/projeler');
    }
    }

}
