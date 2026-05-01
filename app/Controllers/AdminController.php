<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function dashboard()
    {
        // Data statis untuk dashboard admin
        $data = [
            'title' => 'Admin Dashboard',
            'total_visitors' => 1247,
            'total_transactions' => 156,
            'total_products' => 24,
            'total_users' => 89,
            'today_visitors' => 42,
            'today_transactions' => 8,
            'recent_activities' => [
                ['time' => '10:30 AM', 'activity' => 'Admin valen menambahkan menu baru', 'icon' => 'plus'],
                ['time' => '09:15 AM', 'activity' => 'User budi melakukan login', 'icon' => 'login'],
                ['time' => '08:45 AM', 'activity' => 'Transaksi baru #INV-001', 'icon' => 'cart'],
                ['time' => 'Yesterday', 'activity' => 'Menu "Cappuccino" diupdate harganya', 'icon' => 'edit'],
                ['time' => 'Yesterday', 'activity' => '5 pengunjung baru hari ini', 'icon' => 'user'],
            ],
            'top_products' => [
                ['name' => 'Cappuccino', 'sales' => 45, 'revenue' => 'Rp 1.350.000'],
                ['name' => 'Latte', 'sales' => 38, 'revenue' => 'Rp 1.140.000'],
                ['name' => 'Espresso', 'sales' => 32, 'revenue' => 'Rp 640.000'],
                ['name' => 'Mocha', 'sales' => 28, 'revenue' => 'Rp 840.000'],
                ['name' => 'Americano', 'sales' => 25, 'revenue' => 'Rp 625.000'],
            ],
            'monthly_stats' => [
                'Jan' => 120, 'Feb' => 150, 'Mar' => 180, 'Apr' => 200, 
                'May' => 220, 'Jun' => 250, 'Jul' => 280, 'Aug' => 300,
                'Sep' => 310, 'Oct' => 340, 'Nov' => 360, 'Dec' => 400
            ]
        ];
        
        return view('v_admin_dashboard', $data);
    }
    
    // Method tambahan untuk manajemen menu (opsional)
    public function menuManagement()
    {
        $data = [
            'title' => 'Manajemen Menu',
            'menus' => [
                ['id' => 1, 'name' => 'Cappuccino', 'price' => 30000, 'category' => 'Coffee'],
                ['id' => 2, 'name' => 'Latte', 'price' => 30000, 'category' => 'Coffee'],
                ['id' => 3, 'name' => 'Espresso', 'price' => 20000, 'category' => 'Coffee'],
                ['id' => 4, 'name' => 'Mocha', 'price' => 30000, 'category' => 'Coffee'],
                ['id' => 5, 'name' => 'Americano', 'price' => 25000, 'category' => 'Coffee'],
            ]
        ];
        
        return view('v_admin_menu', $data);
    }
}