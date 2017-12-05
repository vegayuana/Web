<?php
class m_ticketform extends CI_Model{
	
    public function __construct(){
        parent::__construct();
        // Your own constructor code
        $this->load->database();
    }
    
    public function input($quantity, $phone, $address, $festival, $price, $total, $no_ticket, $id){
        
        $data = array(
            'jumlah_tiket' => $quantity,
            'phone' => $phone,
            'alamat' => $address,
            'festival' => $festival,
            'harga' => $price,
            'total' => $total,
            'no_ticket' => $no_ticket,
            'id_users' => $id
        );
        if ($this->db->insert('pembelian_tiket', $data)){
            return TRUE;
        }
    }
    
    public function get($no_ticket){
        $this->db->where('no_ticket', $no_ticket);
        return $this->db->get('ticket');
    }
}
