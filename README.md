Sistem TBM Sigambir
=================

Keperluan untuk Mengelola Donasi Dan Web TBM Sigambir

Install
----------

Prerequisites:

* Php 7.x.x
* My SQL Maria Db

Untuk menjalankan program, ada beberapa perubahan di file config.

Untuk Perubahan File Config `config/config.php`:

    config['base_url'] = 'http://localhost/book_collect_ci/';

Untuk Perubahan File Config `config/database.php`:

        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'book_collect',