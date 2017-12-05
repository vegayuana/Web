<?php
class m_merchform extends CI_Model{
	
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function input($quantity, $phone, $address, $price, $total, $id_barang, $id){
        
        $data = array(
            'jumlah_barang' => $quantity,
            'phone' => $phone,
            'alamat' => $address,
            'harga' => $price,
            'total' => $total,
            'id_barang' => $id_barang,
            'id_users' => $id
        );
        if ($this->db->insert('pembelian_merch', $data)){
            return TRUE;
        }
    }
    
    public function get($id_barang){
        $this->db->where('id_barang', $id_barang);
        return $this->db->get('merch');
    }
}
