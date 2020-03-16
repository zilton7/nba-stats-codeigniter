<?php

class Games extends CI_Controller
{
    public function all($year)
    {
        $data['games_data'] = get_games($year)->api->games;

        $this->load->view('game_view', $data);

        // var_dump($games_data);
    }

    public function stats($game_id)
    {
        $data['statistics'] = get_game_stats($game_id)->api->statistics;

        $data['teams_data'] = $this->team_model->get_teams_data();

        $data['main_view'] = "game_stats_view";

        $this->load->view('layouts/main', $data);

        // var_dump($data['game_stats']);

    }

}