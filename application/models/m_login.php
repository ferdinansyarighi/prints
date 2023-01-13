<?php

class M_login extends CI_Model
{
        function cek_login($username, $password)
        {
                $this->db->select('*');
                $this->db->from('users');
                $this->db->where('username', $username);
                $this->db->where('password', $password);

                $query = $this->db->get();

                return $query;
        }

        public function edit_pass($username,$password)
        {
                $data = array(
                        'password' => $password
                );
                
                $this->db->where('username', $username);
                $this->db->update('users', $data);

                if($this->db){
                        return true;
                }else{
                        return false;
                }
        }
}
