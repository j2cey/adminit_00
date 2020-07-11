<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Traits\BaseMigrationTrait;

class CreateReportFieldsTable extends Migration
{
    use BaseMigrationTrait;

    public $table_name = 'report_fields';
    public $table_comment = 'list of fields for a Report.';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->id();
            $table->integer('num_ord')->comment('number order');
            $table->string('name')->comment('name of the field');

            $table->foreignId('report_id')->nullable()
                ->comment('report reference')
                ->constrained()->onDelete('set null');
            $table->foreignId('report_value_type_id')->nullable()
                ->comment('value type reference')
                ->constrained()->onDelete('set null');

            $table->integer('offset')->nullable()->comment('offset if any');
            $table->integer('max_length')->nullable()->comment('max length if any');

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
            $table->dropForeign(['report_id']);
            $table->dropForeign(['report_value_type_id']);
        });
        Schema::dropIfExists($this->table_name);
    }
}
