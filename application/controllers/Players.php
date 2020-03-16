<?php
class Players extends CI_Controller
{
    public function show($player_id)
    {
        $player_data = get_player($player_id)->api->players[0];

        $data['player_data'] = $player_data;

        $data['team_data'] = $this->team_model->get_team_data($player_data->teamId);

        $this->load->view('player_view', $data);

        // var_dump($player_data);
    }
}