<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Traits\BaseMigrationTrait;

class CreateReportDimensionValuesTable extends Migration
{
    use BaseMigrationTrait;

    public $table_name = 'report_dimension_values';
    public $table_comment = 'Analyse result (for the referenced value) of Configured Report Dimension';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->id();

            $table->foreignId('report_dimension_id')->nullable()
                ->comment('report dimension reference')
                ->constrained()->onDelete('set null');

            $table->foreignId('report_value_id')->nullable()
                ->comment('report value reference')
                ->constrained()->onDelete('set null');

            $table->foreignId('report_trend_id')->nullable()
                ->comment('trend reference')
                ->constrained()->onDelete('set null');

            $table->foreignId('trend_value_id')->nullable()
                ->comment('trend value reference')
                ->constrained('report_values')->onDelete('set null');

            $table->integer('times')->nullable()->comment('result times (in case of same result)');

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
            $table->dropForeign(['report_dimension_id']);
            $table->dropForeign(['report_value_id']);
            $table->dropForeign(['report_trend_id']);
            $table->dropForeign(['trend_value_id']);
        });
        Schema::dropIfExists($this->table_name);
    }
}
