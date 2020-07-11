<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Traits\BaseMigrationTrait;

class CreateReportTypesTable extends Migration
{
    use BaseMigrationTrait;

    public $table_name = 'report_types';
    public $table_comment = 'list of report types';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->id();

            $table->string('name')->comment('report type name');

            $table->baseFields();
        });
        $this->setTableComment($this->table_name,$this->table_comment);
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
