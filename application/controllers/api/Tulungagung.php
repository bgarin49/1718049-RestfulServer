<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Tulungagung extends REST_Controller
{
    public function __construct()
        {
            parent::__construct();
            $this->load->model('Tulungagung_model');
        }

    public function index_get() 
    {
        $wilayah = $this->get('wilayah');
        if ($wilayah === null){
            $tulungagung = $this->Tulungagung_model->getTulungagung();
        } elseif( $wilayah > null) {
            $tulungagung = $this->Tulungagung_model->getTulungagung($wilayah);
        } 

        // $wilayah = $this->get('wilayah');
        // $desa = $this->get('desa');
        // if ($wilayah == null || $desa == null){
        //     $tulungagung = $this->Tulungagung_model->getTulungagung();
        // } elseif ($wilayah > null || $desa == null) {
        //     $tulungagung = $this->Tulungagung_model->getTulungagung($wilayah);
        // } elseif ($wilayah == null || $desa > null) {
        //     $tulungagung = $this->Tulungagung_model->getTulungagung($desa);
        // } elseif ($wilayah > null || $desa > null) {
        //     $tulungagung = $this->Tulungagung_model->getTulungagung($desa,$wilayah);
        // }

        if ($tulungagung){
            $this->response([
                'status' => true,
                'data' => $tulungagung
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
            'status' => false,
            'data' => 'Wilayah tidak ditemukan!'
            ], REST_Controller::HTTP_NOT_FOUND);

        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');
        if($id === null){
            $this->response($message =[
                'status' => false,
                'data' => 'Masukkan id tempat untuk menghapus!'
                ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if($this->Tulungagung_model->deleteTulungagung($id) > 0){
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'id berhasil terhapus'
                ], REST_Controller::HTTP_OK);
            }else {
                $this->response([
                    'status' => false,
                    'data' => 'id tidak ditemukan!'
                    ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'kode_pos' => $this->post('kode_pos'),
            'desa' => $this->post('desa'),
            'wilayah' => $this->post('wilayah')
        ];
        if($this->Tulungagung_model->createTulungagung($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'data berhasil ditambahkan'
            ], REST_Controller::HTTP_CREATED);
        }else {
            $this->response([
                'status' => false,
                'data' => 'gagal untuk menambahkan data!'
                ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id = $this->put('id');
        $data = [
            'kode_pos' => $this->put('kode_pos'),
            'desa' => $this->put('desa'),
            'wilayah' => $this->put('wilayah')
        ];
        if($this->Tulungagung_model->updateTulungagung($data, $id) > 0){
            $this->response([
                'status' => true,
                'message' => 'data berhasil dirubah'
            ], REST_Controller::HTTP_OK);
        }else {
            $this->response([
                'status' => false,
                'data' => 'gagal untuk merubah data!'
                ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}