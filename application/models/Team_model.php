<?php

class Team_model extends CI_Model
{
    public function add_team_data($data)
    {
        $insert_data = $this->db->insert('teams', $data);
    }

    public function get_teams_data()
    {

        $team_data = $this->db->get('teams');

        return $team_data->result();
    }

    public function get_team_data($team_id)
    {
        $this->db->where('teamId', $team_id);

        $team_data = $this->db->get('teams');

        return $team_data->row();
    }

}