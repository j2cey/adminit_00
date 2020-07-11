<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Traits\BaseMigrationTrait;

class CreateReportDimensionsTable extends Migration
{
    use BaseMigrationTrait;

    public $table_name = 'report_dimensions';
    public $table_comment = 'Report Dimension';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->id();

            $table->foreignId('report_trend_id')->nullable()
                ->comment('report trend type reference')
                ->constrained()->onDelete('set null');

            $table->foreignId('report_field_id')->nullable()
                ->comment('report field reference')
                ->constrained()->onDelete('set null');

            $table->foreignId('key_field_id')->nullable()
                ->comment('dimension key field reference if any')
                ->constrained('report_fields')->onDelete('set null');

            $table->foreignId('key_value_id')->nullable()
                ->comment('dimension key value reference if any')
                ->constrained('report_values')->onDelete('set null');

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
            $table->dropForeign(['report_trend_id']);
            $table->dropForeign(['report_field_id']);
            $table->dropForeign(['key_field_id']);
            $table->dropForeign(['key_value_id']);
        });
        Schema::dropIfExists($this->table_name);
    }
}
