<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('mst_categories');
            $table->string('project');
            $table->string('line');
            $table->string('format_document');
            $table->string('PIC');
            $table->string('status');
            $table->string('serah_terima')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_documents');
    }
}
