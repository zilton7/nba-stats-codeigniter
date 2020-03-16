<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

// Load secret keys from .env
require_once realpath(realpath(__DIR__ . '/../..' . '/vendor/autoload.php'));
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(realpath(__DIR__ . '/../..'));
$dotenv->load();

if (!function_exists('get_standings')) {
    function get_standings($year, $conference)
    {
        $curl = curl_init();
        $url = "https://api-nba-v1.p.rapidapi.com/standings/standard/$year/conference/$conference";
        // echo $url;
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: api-nba-v1.p.rapidapi.com",
                "x-rapidapi-key: " . getenv("API_KEY"),

            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data = json_decode($response);
            return $data;
        }
    };
}

if (!function_exists('get_teams')) {
    function get_teams($team_id)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api-nba-v1.p.rapidapi.com/teams/teamId/$team_id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: api-nba-v1.p.rapidapi.com",
                "x-rapidapi-key: " . getenv("API_KEY"),
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data = json_decode($response);
            return $data;
        }
    }
}

if (!function_exists('get_player')) {
    function get_player($player_id)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api-nba-v1.p.rapidapi.com/players/playerId/{$player_id}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: api-nba-v1.p.rapidapi.com",
                "x-rapidapi-key: " . getenv("API_KEY"),
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data = json_decode($response);
            return $data;
        }
    }
}

if (!function_exists('get_games')) {
    function get_games($year)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api-nba-v1.p.rapidapi.com/games/seasonYear/$year",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: api-nba-v1.p.rapidapi.com",
                "x-rapidapi-key: " . getenv("API_KEY"),
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data = json_decode($response);
            return $data;
        }
    }
}

if (!function_exists('get_game_stats')) {
    function get_game_stats($game_id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api-nba-v1.p.rapidapi.com/statistics/games/gameId/$game_id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: api-nba-v1.p.rapidapi.com",
                "x-rapidapi-key: " . getenv("API_KEY"),
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data = json_decode($response);
            return $data;
        }
    }

}