<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteData extends CI_Model {

    public function deleteAllPenerima() {
        $this->db->empty_table('penerima');
    }

}
