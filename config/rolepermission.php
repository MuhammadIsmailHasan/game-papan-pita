<?php

return [
    'permissions' => [
        'administrator' => [
            'name' => 'administrator',
            'label' => 'Administrator',
        ],
        'materi_update' => [
            'name' => 'materi_update',
            'label' => 'Materi Update',
        ],
        'permainan_read' => [
            'name' => 'permainan_read',
            'label' => 'Permainan Read',
        ],
        'nilai_tertinggi_read' => [
            'name' => 'nilai_tertinggi_read',
            'label' => 'Nilai Tertinggi Read',
        ],
        'daftar_nilai_read' => [
            'name' => 'daftar_nilai_read',
            'label' => 'Daftar Nilai Read',
        ],
        'daftar_nilai_update' => [
            'name' => 'daftar_nilai_update',
            'label' => 'Daftar Nilai Update',
        ],
        'daftar_nilai_delete' => [
            'name' => 'daftar_nilai_delete',
            'label' => 'Daftar Nilai Delete',
        ],
        'daftar_siswa_read' => [
            'name' => 'daftar_siswa_read',
            'label' => 'Daftar Siswa Read',
        ],
        'daftar_siswa_update' => [
            'name' => 'daftar_siswa_update',
            'label' => 'Daftar Siswa Update',
        ],
        'daftar_siswa_delete' => [
            'name' => 'daftar_siswa_delete',
            'label' => 'Daftar Siswa Delete',
        ],
        'profil_read' => [
            'name' => 'profil_read',
            'label' => 'Profil Read',
        ],
    ],

    'roles' => [
        'administrator' => [
            'name' => 'administrator',
            'label' => 'Administrator Aplikasi',
            'permissions' => [
                'administrator'
            ],
        ],
        'admin' => [
            'name' => 'admin',
            'label' => 'Admin',
            'permissions' => [
                'daftar_nilai_read',
                'daftar_nilai_update',
                'daftar_nilai_delete',
                'daftar_siswa_read',
                'daftar_siswa_update',
                'daftar_siswa_delete',
            ],
        ],
        'siswa' => [
            'name' => 'siswa',
            'label' => 'Siswa',
            'permissions' => [
                'materi_update',
                'permainan_read',
                'nilai_tertinggi_read',
                'profil_read',
            ],
        ],
    ],
];
