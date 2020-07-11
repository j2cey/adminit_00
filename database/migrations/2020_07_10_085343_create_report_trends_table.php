<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Traits\BaseMigrationTrait;

class CreateReportTrendsTable extends Migration
{
    use BaseMigrationTrait;

    public $table_name = 'report_trends';
    public $table_comment = 'List of report trends';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->id();

            $table->string('code')->comment('code of trend');
            $table->string('name')->comment('name of trend');

            $table->baseFields();
        });
        $this->setTableComment($this->table_name, $this->table_comment);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->table_name, function (Blueprint $table) {
            $table->dropBaseForeigns();
        });
        Schema::dropIfExists($this->table_name);
    }
}
