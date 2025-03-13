<?php

use App\Models\Customer;
use App\Models\Table;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id('request_id');
            $table->foreignId("custumer_id")->constraint()->onDelete("CASCADE");
            $table->foreignIdFor(Table::class)->nullabble();
            $table->string('order_status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
