<?php namespace App\Controllers;

class AdminController extends BaseController
{
    private $admins = [
        [
            'name' => 'Ndasmui (JexzX)',
            'role' => 'Executive Admin',
            'role_color' => 'darkblue',
            'vehicles' => ['Sultan', 'Benson', 'Roadtrain'],
            'properties' => [
                'temporary' => [
                    'type' => 'Flat High',
                    'name' => 'Verona Flat'
                ],
                'house' => 'None'
            ],
            'stats' => ['Operator', 'Teknik', 'Programer', 'Administrator']
        ],
        // Data untuk admin lainnya...
    ];

    public function index()
    {
        $data = [
            'title' => 'Database Admin',
            'admins' => $this->admins
        ];
        
        return view('admin/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Admin',
            'admin' => $this->admins[$id]
        ];
        
        return view('admin/detail', $data);
    }
}