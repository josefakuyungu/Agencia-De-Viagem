<?php

use App\Models\Orderitem;
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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->foreignIdFor(Orderitem::class)->nullabble();
            $table->float('value');
            $table->enum('typepayment', [ "queche","cartao"])->default("queche");
            $table->enum('status', ["pendent", "pied","canceled"])->default("pendent");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
