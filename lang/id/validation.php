<?php

return [
    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut ini berisi standar pesan kesalahan yang digunakan oleh
    | kelas validasi. Beberapa aturan mempunyai banyak versi seperti aturan 'size'.
    | Jangan ragu untuk mengoptimalkan setiap pesan yang ada di sini.
    |
    */

    'accepted'        => ':Attribute harus diterima.',
    'accepted_if'     => ':Attribute harus diterima ketika :other adalah :value.',
    'active_url'      => ':Attribute bukan URL yang valid.',
    'after'           => ':Attribute harus berisi tanggal setelah :date.',
    'after_or_equal'  => ':Attribute harus berisi tanggal setelah atau sama dengan :date.',
    'alpha'           => ':Attribute hanya boleh berisi huruf.',
    'alpha_dash'      => ':Attribute hanya boleh berisi huruf, angka, strip, dan garis bawah.',
    'alpha_num'       => ':Attribute hanya boleh berisi huruf dan angka.',
    'array'           => ':Attribute harus berisi sebuah array.',
    'before'          => ':Attribute harus berisi tanggal sebelum :date.',
    'before_or_equal' => ':Attribute harus berisi tanggal sebelum atau sama dengan :date.',
    'between'         => [
        'numeric' => ':Attribute harus bernilai antara :min sampai :max.',
        'file'    => ':Attribute harus berukuran antara :min sampai :max kilobyte.',
        'string'  => ':Attribute harus berisi antara :min sampai :max karakter.',
        'array'   => ':Attribute harus memiliki :min sampai :max anggota.',
    ],
    'boolean'        => ':Attribute harus bernilai true atau false',
    'confirmed'      => 'Konfirmasi :attribute tidak cocok.',
    'current_password' => 'Kata sandi salah.',
    'date'           => ':Attribute bukan tanggal yang valid.',
    'date_equals'    => ':Attribute harus berisi tanggal yang sama dengan :date.',
    'date_format'    => ':Attribute tidak cocok dengan format :format.',
    'declined'       => ':Attribute harus ditolak.',
    'declined_if' => ':Attribute harus ditolak ketika :other adalah :value.',
    'different'      => ':Attribute dan :other harus berbeda.',
    'digits'         => ':Attribute harus terdiri dari :digits angka.',
    'digits_between' => ':Attribute harus terdiri dari :min sampai :max angka.',
    'dimensions'     => ':Attribute tidak memiliki dimensi gambar yang valid.',
    'distinct'       => ':Attribute memiliki nilai yang duplikat.',
    'email'          => ':Attribute harus berupa alamat surel yang valid.',
    'ends_with'      => ':Attribute harus diakhiri salah satu dari berikut: :values',
    'exists'         => ':Attribute tidak ditemukan.',
    'file'           => ':Attribute harus berupa sebuah berkas.',
    'filled'         => ':Attribute harus memiliki nilai.',
    'gt'             => [
        'numeric' => ':Attribute harus bernilai lebih besar dari :value.',
        'file'    => ':Attribute harus berukuran lebih besar dari :value kilobyte.',
        'string'  => ':Attribute harus berisi lebih besar dari :value karakter.',
        'array'   => ':Attribute harus memiliki lebih dari :value anggota.',
    ],
    'gte' => [
        'numeric' => ':Attribute harus bernilai lebih besar dari atau sama dengan :value.',
        'file'    => ':Attribute harus berukuran lebih besar dari atau sama dengan :value kilobyte.',
        'string'  => ':Attribute harus berisi lebih besar dari atau sama dengan :value karakter.',
        'array'   => ':Attribute harus terdiri dari :value anggota atau lebih.',
    ],
    'image'    => ':Attribute harus berupa gambar.',
    'in'       => ':Attribute yang dipilih tidak valid.',
    'in_array' => ':Attribute tidak ada di dalam :other.',
    'integer'  => ':Attribute harus berupa bilangan bulat.',
    'ip'       => ':Attribute harus berupa alamat IP yang valid.',
    'ipv4'     => ':Attribute harus berupa alamat IPv4 yang valid.',
    'ipv6'     => ':Attribute harus berupa alamat IPv6 yang valid.',
    'json'     => ':Attribute harus berupa JSON string yang valid.',
    'lt'       => [
        'numeric' => ':Attribute harus bernilai kurang dari :value.',
        'file'    => ':attribute harus berukuran kurang dari :value kilobyte.',
        'string'  => ':attribute harus berisi kurang dari :value karakter.',
        'array'   => ':attribute harus memiliki kurang dari :value anggota.',
    ],
    'lte' => [
        'numeric' => ':attribute harus bernilai kurang dari atau sama dengan :value.',
        'file'    => ':attribute harus berukuran kurang dari atau sama dengan :value kilobyte.',
        'string'  => ':attribute harus berisi kurang dari atau sama dengan :value karakter.',
        'array'   => ':attribute harus tidak lebih dari :value anggota.',
    ],
    'max' => [
        'numeric' => ':Attribute maskimal bernilai :max.',
        'file'    => ':Attribute maksimal berukuran :max kilobyte.',
        'image'    => ':Attribute maksimal berukuran :max kilobyte.',
        'string'  => ':Attribute maskimal berisi :max karakter.',
        'array'   => ':Attribute maksimal terdiri dari :max anggota.',
    ],
    'mimes'     => ':attribute harus berupa berkas berjenis: :values.',
    'mimetypes' => ':attribute harus berupa berkas berjenis: :values.',
    'min'       => [
        'numeric' => ':Attribute minimal bernilai :min.',
        'file'    => ':Attribute minimal berukuran :min kilobyte.',
        'string'  => ':Attribute minimal berisi :min karakter.',
        'array'   => ':Attribute minimal terdiri dari :min anggota.',
    ],
    'multiple_of' => ':Attribute harus terdiri dari banyak :value.',
    'not_in'               => ':attribute yang dipilih tidak valid.',
    'not_regex'            => 'Format :attribute tidak valid.',
    'numeric'              => ':attribute harus berupa angka.',
    'password'             => 'Kata sandi salah.',
    'present'              => ':attribute wajib ada.',
    'prohibited' => ':Attribute dilarang.',
    'prohibited_if' => ':Attribute dilarang ketika :other adalah :value.',
    'prohibited_unless' => ':Attribute dilarang kecuali :other ada di :values.',
    'prohibits' => ':Attribute dilarang :other ada.',
    'regex'                => 'Format :attribute tidak valid.',
    'required'             => 'Bidang :Attribute wajib diisi.',
    'required_if'          => ':Attribute wajib diisi bila :other adalah :value.',
    'required_unless'      => ':Attribute wajib diisi kecuali :other memiliki nilai :values.',
    'required_with'        => ':Attribute wajib diisi bila terdapat :values.',
    'required_with_all'    => ':Attribute wajib diisi bila terdapat :values.',
    'required_without'     => ':Attribute wajib diisi bila tidak terdapat :values.',
    'required_without_all' => ':Attribute wajib diisi bila sama sekali tidak terdapat :values.',
    'same'                 => ':Attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => ':Attribute harus berukuran :size.',
        'file'    => ':Attribute harus berukuran :size kilobyte.',
        'string'  => ':Attribute harus berukuran :size karakter.',
        'array'   => ':Attribute harus mengandung :size anggota.',
    ],
    'starts_with' => ':attribute harus diawali salah satu dari berikut: :values',
    'string'      => ':Attribute harus berupa string.',
    'timezone'    => ':attribute harus berisi zona waktu yang valid.',
    'unique'      => ':Attribute sudah ada.',
    'uploaded'    => ':Attribute gagal diunggah.',
    'url'         => 'Format :attribute tidak valid.',
    'uuid'        => ':Attribute harus merupakan UUID yang valid.',

    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi Kustom
    |---------------------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi untuk atribut sesuai keinginan dengan menggunakan
    | konvensi "attribute.rule" dalam penamaan barisnya. Hal ini mempercepat dalam menentukan
    | baris bahasa kustom yang spesifik untuk aturan atribut yang diberikan.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |---------------------------------------------------------------------------------------
    | Kustom Validasi Atribut
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk menukar 'placeholder' atribut dengan sesuatu yang
    | lebih mudah dimengerti oleh pembaca seperti "Alamat Surel" daripada "surel" saja.
    | Hal ini membantu kita dalam membuat pesan menjadi lebih ekspresif.
    |
    */

    'attributes' => [
        'login'                 => 'Email atau Nama Pengguna',
        'name'                  => 'Nama',
        'first_name'            => 'Nama Awal',
        'last_name'             => 'Nama Akhir',
        'company'               => 'Perusahaan',
        'gender'                => 'Jenis Kelamin',
        'address'               => 'Alamat',
        'nik'                   => 'Nomor Induk kependudukan',
        'phone'                 => 'No. Telp',
        'pob'                   => 'Tempat Lahir',
        'dob'                   => 'Tanggal Lahir',
        'username'              => 'Nama Pengguna',
        'password'              => 'Kata Sandi',
        'password_confirmation' => 'Konfirmasi Kata Sandi',
        'notes'                 => 'Catatan',
        'bank'                  => 'Bank',
        'name_user_rekening'    => 'Nama Pengirim',
        'sum_payment'           => 'Total Pembayaran',
        'dokumen_proof_payment' => 'Dokumen Epayment',
        'date_payment'          => 'Tanggal Pembayaran',
        'date_payment'          => 'Nomor Rekening',
        'product.measurement'   => 'Unit Ukuran',
        'product.sku'           => 'SKU',
        'product.brand'         => 'Merek',
        'product.supplier'      => 'Pemasok',
        'product.weight'        => 'Berat',
        'product.subcategory'   => 'Sub Kategori',
        'product.dimension_l'   => 'Panjang',
        'product.dimension_w'   => 'Lebar',
        'product.dimension_h'   => 'Tinggi',
    ],
];
