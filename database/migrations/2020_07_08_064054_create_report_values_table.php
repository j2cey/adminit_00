<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Traits\BaseMigrationTrait;

class CreateReportValuesTable extends Migration
{
    use BaseMigrationTrait;

    public $table_name = 'report_values';
    public $table_comment = 'value for a given field s report.';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->id();
            $table->uuid('generation_uuid')->comment('uuid of value generation');
            $table->integer('line_num')->comment('line number');

            $table->foreignId('report_field_id')->nullable()
                ->comment('report field reference')
                ->constrained()->onDelete('set null');

            $table->string('string_value')->nullable()->comment('STRING equivalent value');
            $table->bigInteger('biginteger_value')->nullable()->comment('BIGINT equivalent value');
            $table->integer('integer_value')->nullable()->comment('INTEGER equivalent value');
            $table->binary('binary_value')->nullable()->comment('BLOB equivalent value');
            $table->boolean('boolean_value')->nullable()->comment('BOOLEAN equivalent value');
            $table->dateTime('datetime_value')->nullable()->comment('DATETIME equivalent value');
            $table->ipAddress('ipaddress_value')->nullable()->comment('IP address equivalent value');
            $table->json('json_value')->nullable()->comment('JSON equivalent value');

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
            $table->dropForeign(['report_field_id']);
        });
        Schema::dropIfExists($this->table_name);
    }
}
