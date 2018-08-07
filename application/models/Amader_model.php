<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class amader_model extends CI_Model {

    public $Id;

    public function Save($table, $data) {
        if ($this->db->insert($table, $data)) {
            $this->Id = $this->db->insert_id();
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function Update($table, $data, $where) {
        $this->db->where($where);
        if ($this->db->update($table, $data)) {
            $this->Id = $this->db->insert_id();
            return TRUE;
        }
        return FALSE;
    }

    public function Delete($table, $where) {
        $this->db->where($where);
        $this->db->delete($table);
        if ($this->db->affected_rows()) {
            return TRUE;
        }
        return FALSE;
    }

    public function view($select, $table, $where = NULL, $order = NULL) {
        if ($where) {
            $this->db->where($where);
        }
        $this->db->select($select);
        $this->db->order_by($order[0], $order[1]);
        $this->db->from($table);

        return $this->db->get()->result();
        ;
    }

    public function home() {
        return $this->GetMultipleQueryResult("CALL home()");
    }

    public function category($id, $start, $per_page){
        return $this->GetMultipleQueryResult("CALL category($id, $start, $per_page)");
    }
    public function search($name) {
        $this->db->select("doctor.id,doctor.name, designetion.name dsname, degrees.name dgname,specialist.name spname");
        $this->db->from("doctor");
        $this->db->join("designetion", "designetion.id=doctor.designetionid");
        $this->db->join("degrees", "degrees.id=doctor.degreesid");
        $this->db->join("specialist", "specialist.id=doctor.specialistid");
        $this->db->like("doctor.name", $name);
        $this->db->order_by("doctor.id", "desc");
        $this->db->group_by("doctor.id");
        return $this->db->get()->result();
    }

    public function GetMultipleQueryResult($queryString) {
        if (empty($queryString)) {
            return false;
        }
        $index = 0;
        $ResultSet = array();
        if (mysqli_multi_query($this->db->conn_id, $queryString)) {
            do {
                if (false != $result = mysqli_store_result($this->db->conn_id)) {
                    $rowID = 0;
                    while ($row = $result->fetch_object()) {
                        $ResultSet[$index][$rowID] = $row;
                        $rowID++;
                    }
                }
                $index++;
            } while (mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        }
        return $ResultSet;
    }

    public function UploadImg($dest, $name, $field) {
        $this->load->library('upload');
        $config['upload_path'] = "./{$dest}";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '10000';
        $config['max_width'] = '3000';
        $config['max_height'] = '4000';
        $config['file_name'] = $name;
        $this->upload->initialize($config); //upload image data
        $this->upload->do_upload($field);
    }

}
