<?php

$data_siswa=[];


while(true)
{
    //Data siswa

    $siswa=&$data_siswa;

    //Banner Aplikasi

    tampil("Data Siswa Magang Top");
    tampil("=====================");

    // User Input data siswa magang

    $input_siswa=readline("Masukkan data siswa ? ");

    //validasi huruf

    if(!preg_match("/^[A-Za-z\s]*$/",$input_siswa."\n")|| empty($input_siswa))
    {
        
        tampil("Input Hanya Bisa Huruf !");
        continue;
    }

    //simpan Data Siswa

    $siswa[]=$input_siswa;

    // Munculkan data siswa magang

    $nomor=1;

    foreach($siswa as $key)
    {
        tampil("$nomor.$key");
        $nomor++;
    }

    //Tanya usser untuk masukkan data lagi

    tanyaUser();

}

function tampil($pesan)
{
    echo $pesan.PHP_EOL;
}

function tanyaUser()
{
    $tanya = readline("Tambah data ? ");

    if($tanya == "no") {
        tampil("Terima Kasih");
        exit;
    }
}

function tampilData()
{
    $nomor = 1;

    foreach ($data as $key){
        tampil("Data Siswa");
        
    }
}

// CRUD (Create Read Update Delete)

function inputData(&$data)
{
   echo ("tampil data");
}

function tampilData2(&$data)
{

}

function updateData(&$data)
{

}

function deleteData(&$data)
{

}