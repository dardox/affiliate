<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('clicks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('affiliate_id');
            $table->string('ip_address');
            $table->timestamp('clicked_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clicks');
    }
};
