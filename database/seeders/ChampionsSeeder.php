<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Champion;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;


class ChampionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $current_date_time = Carbon::now()->toDateTimeString();

        $response = Http::get('http://ddragon.leagueoflegends.com/cdn/12.2.1/data/es_ES/champion.json');

        $data = $response->json();

        foreach ($data['data'] as $obj) {
            Champion::create(array(
                'name' => $obj['name'],
                'title' => $obj['title'],
                'blurb' => $obj['blurb'],
                'image_full' => $obj['image']['full'],
                "created_at" => $current_date_time,
                "updated_at" => $current_date_time
            ));
        }
    }
}
