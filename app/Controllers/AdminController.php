<?php namespace App\Controllers;

class AdminController extends BaseController
{
    private $admins = [
        [
            'name' => 'Ndasmui (JexzX)',
            'role' => 'Executive Admin',
            'role_color' => '#00008B',
            'vehicles' => ['Sultan', 'Benson', 'Roadtrain'],
            'properties' => [
                'temporary' => [
                    'type' => 'Flat High',
                    'name' => 'Verona Flat'
                ],
                'house' => 'None'
            ],
            'stats' => ['Operator', 'Teknik', 'Programer', 'Administrator'],
            'last_active' => '2 days ago',
            'status' => 'Online'
        ],
        // ... (other admins data)
    ];

    public function index()
    {
        return view('admin/index', [
            'title' => 'Database Admin',
            'admins' => $this->admins
        ]);
    }

    public function detail($id)
    {
        return view('admin/detail', [
            'title' => 'Admin Details',
            'admin' => $this->admins[$id],
            'id' => $id
        ]);
    }

    public function search()
    {
        $query = $this->request->getGet('q');
        $results = [];

        if (!empty($query)) {
            foreach ($this->admins as $admin) {
                if (stripos($admin['name'], $query) !== false || 
                    stripos($admin['role'], $query) !== false) {
                    $results[] = $admin;
                }
            }
        }

        return view('admin/search', [
            'title' => 'Search Results',
            'results' => $results,
            'query' => $query
        ]);
    }
}