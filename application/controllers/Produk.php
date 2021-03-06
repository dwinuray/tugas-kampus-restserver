<?php
defined('BASEPATH') or exit('No direct script access allowed');


use chriskacerguis\RestServer\RestController;

class Produk extends RestController{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('produk_model', 'produk');
  }




  public function index_get()
  {
    $id = $this->get('id', true);
    if ($id === null) {
      $p = $this->get('page', true);
      $p = (empty($p) ? 1 : $p);
      $total_data = $this->produk->count();
      $total_page = ceil($total_data / 5);
      $start = ($p - 1) * 5;
      $list = $this->produk->get(null, 5, $start);
      if ($list) {
        $data = [
          'status' => true,
          'page' => $p,
          'total_data' => $total_data,
          'total_page' => $total_page,
          'data' => $list
        ];
      } else {
        $data = [
          'status' => false,
          'msg' => 'Data tidak ditemukan'
        ];
      }
      $this->response($data, RestController::HTTP_OK);
    } else {
      $data = $this->produk->get($id);
      if ($data) {
        $this->response(['status' => true, 'data' => $data], RestController::HTTP_OK);
      } else {
        $this->response(['status' => false, 'msg' => $id . ' tidak ditemukan'], RestController::HTTP_NOT_FOUND);
      }
    }
  }

  public function index_post()
  {
    $data = [
      'kd_produk' => $this->post('kd_produk', true),
      'nama_produk' => $this->post('nama_produk', true),
      'deskripsi' => $this->post('deskripsi', true),
      'berat' => $this->post('berat', true)
    ];

    $simpan = $this->produk->add($data);
    if ($simpan['status']) {
      $this->response(['status' => true, 'msg' => $simpan['data'] . ' Data telah ditambahkan'], RestController::HTTP_CREATED);
    } else {
      $this->response(['status' => false, 'msg' => $simpan['msg']], RestController::HTTP_INTERNAL_ERROR);
    }
  }

  public function index_put()
  {
    $data = [
        'kd_produk' => $this->put('kd_produk', true),
        'nama_produk' => $this->put('nama_produk', true),
        'deskripsi' => $this->put('deskripsi', true),
        'berat' => $this->put('berat', true)
      ];
    $id = $this->put('kd_produk', true);
    if ($id === null) {
      $this->response(['status' => false, 'msg' => 'Masukkan kode yang akan dirubah'], RestController::HTTP_BAD_REQUEST);
    }
    $simpan = $this->produk->update($id, $data);
    if ($simpan['status']) {
      $status = (int)$simpan['data'];
      if ($status > 0)
        $this->response(['status' => true, 'msg' => $simpan['data'] . ' Data telah dirubah'], RestController::HTTP_OK);
      else
        $this->response(['status' => false, 'msg' => 'Tidak ada data yang dirubah'], RestController::HTTP_BAD_REQUEST);
    } else {
      $this->response(['status' => false, 'msg' => $simpan['msg']], RestController::HTTP_INTERNAL_ERROR);
    }
  }

  public function index_delete()
  {

      // test
    $id = $this->delete('kd_produk', true);
    if ($id === null) {
      $this->response(['status' => false, 'msg' => 'Masukkan kode yang akan dihapus'], RestController::HTTP_BAD_REQUEST);
    }
    $delete = $this->produk->delete($id);
    if ($delete['status']) {
      $status = (int)$delete['data'];
      if ($status > 0)
        $this->response(['status' => true, 'msg' => $id . ' data telah dihapus'], RestController::HTTP_OK);
      else
        $this->response(['status' => false, 'msg' => 'Tidak ada data yang dihapus'], RestController::HTTP_BAD_REQUEST);
    } else {
      $this->response(['status' => false, 'msg' => $delete['msg']], RestController::HTTP_INTERNAL_ERROR);
    }
  }

}