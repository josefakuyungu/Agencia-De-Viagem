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
        Schema::create('reserves', function (Blueprint $table) {
            $table->id('reserve_id');
            $table->foreignIdFor(Customer::class)->nullabble();
            $table->foreignIdFor(Table::class)->nullabble();
            $table->string('date_reaservation', );
            $table->string('status', ["agendado", "pendente"])->default("agendado");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserves');
    }
};
