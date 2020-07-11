<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Traits\BaseMigrationTrait;

class CreateStatesTable extends Migration
{
    use BaseMigrationTrait;

    public $table_name = 'states';
    public $table_comment = 'state of objects in the system.';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');

            $table->string('name')->comment('state name');
            $table->string('code', 100)->unique()->comment('state code');

            $table->boolean('is_default')->default(false)->comment('determine whether is the default one.');

            $table->timestamps();
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
        Schema::dropIfExists($this->table_name);
    }
}
