<?php

    use App\ReportTrend;
    use Illuminate\Database\Seeder;

class ReportTrendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trends = [
            [
                'code' => "eq",'name' => "equal"
            ],
            [
                'code' => "diff",'name' => "different"
            ],
            [
                'code' => "up",'name' => "up"
            ],
            [
                'code' => "dwn",'name' => "down"
            ]
        ];
        foreach ($trends as $trend) {
            ReportTrend::create($trend);
        }
    }
}
