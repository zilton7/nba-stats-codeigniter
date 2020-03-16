<?php

class Home extends CI_Controller
{
    public function standings($year, $conference)
    {

        $data['standings'] = get_standings($year, $conference)->api->standings;

        $data['teams_data'] = $this->team_model->get_teams_data();

        $data['conference'] = $conference;

        $data['year'] = $year;

        $data['main_view'] = "home_view";

        $this->load->view('layouts/main', $data);

    }

    // public function team_data_api()
    // Use this to populate teams table with data from api
    // {
    //     for ($x = 33; $x <= 43; $x++) {
    //         $team_data = get_teams($x)->api->teams[0];

    //         $data = array(

    //             'teamId' => $team_data->teamId,
    //             'city' => $team_data->city,
    //             'fullName' => $team_data->fullName,
    //             'nickname' => $team_data->nickname,
    //             'logo' => $team_data->logo,
    //             'shortName' => $team_data->shortName,
    //             'allStar' => $team_data->allStar,
    //             'nbaFranchise' => $team_data->nbaFranchise,

    //         );

    //         $this->team_model->add_team_data($data);

    //     }
    // }

}